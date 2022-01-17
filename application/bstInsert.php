<?php

require_once './vendor/autoload.php';

use App\BinarySearchTree;
use App\Util\RandomNumberSetGenerator;

const AMOUNT_OF_DATASETS = 100;
const DATASET_SIZE_LIST = [10, 50, 100, 500, 1000, 5000, 10000];

$results = [];
foreach (DATASET_SIZE_LIST as $datasetSize) {
    $startTime = microtime(true);
    for ($index = 1; $index <= AMOUNT_OF_DATASETS; $index++) {
        $numberSetGenerator = new RandomNumberSetGenerator($datasetSize);
        $dataset = $numberSetGenerator->generateUnique();
        $tree = BinarySearchTree::createFromArray($dataset);
        $tree = null;
        $numberSetGenerator = null;
    }
    $endTime = microtime(true);
    $memory = memory_get_usage(true);
    $results[] = sprintf(
        "%d trees were created. Each tree contain %d elements. \nTime Spent: %s\nMemory Spent: %s kilobytes\n",
        AMOUNT_OF_DATASETS,
        $datasetSize,
        number_format((float) (($endTime - $startTime) * 1000), 3, '.', ''),
        round($memory / 1024, 2)
    );
}

print_r($results);
