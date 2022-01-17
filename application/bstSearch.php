<?php

require_once './vendor/autoload.php';

use App\BinarySearchTree;
use App\Util\RandomNumberSetGenerator;

const AMOUNT_OF_DATASETS = 100;
const DATASET_SIZE_LIST = [10, 50, 100, 500, 1000, 5000, 10000];

$dataCollection = [];
foreach (DATASET_SIZE_LIST as $datasetSize) {
    for ($index = 1; $index <= AMOUNT_OF_DATASETS; $index++) {
        $numberSetGenerator = new RandomNumberSetGenerator($datasetSize);
        $dataset = $numberSetGenerator->generateUnique();
        $tree = BinarySearchTree::createFromArray($dataset);
        $numberSetGenerator = null;
        $dataCollection[$datasetSize][$index] = [
            'tree' => $tree,
            'dataset' => $dataset,
        ];
    }
}

$results = [];
foreach ($dataCollection as $datasetSize => $dataItems) {
    $startTime = microtime(true);
    foreach ($dataItems as $dataItem) {
        foreach ($dataItem['dataset'] as $value) {
            $dataItem['tree']->find($value);
        }
    }
    unset($dataCollection[$datasetSize]);
    $endTime = microtime(true);
    $memory = memory_get_usage(true);
    $results[] = sprintf(
        "Dataset size: %d elements. \nTime Spent: %s\nMemory Spent: %s kilobytes\n",
        $datasetSize,
        number_format((float) (($endTime - $startTime) * 1000), 3, '.', ''),
        round($memory / 1024, 2)
    );
}
unset($dataCollection);

print_r($results);
