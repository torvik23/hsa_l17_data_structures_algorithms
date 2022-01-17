<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '-1');

require_once './vendor/autoload.php';

use App\CountingSort;
use App\Util\RandomNumberSetGenerator;

const BIG_POSITIVE = 1_000_000_000;
const DATASET_SIZE_LIST = [100, 500, 1_000, 5_000, 10_000, 100_000];

$results = [];
$countingSort = new CountingSort();
foreach (DATASET_SIZE_LIST as $datasetSize) {
    $numberSetGenerator = new RandomNumberSetGenerator($datasetSize, -$datasetSize);
    $dataset = $numberSetGenerator->generateNonUnique();
    $startTime = microtime(true);
    $dataset[0] = BIG_POSITIVE;
    $sortedDataset = $countingSort->execute($dataset);
    $endTime = microtime(true);
    $memory = memory_get_usage(true);
    $sortedDataset = null;
    $numberSetGenerator = null;
    $results[] = sprintf(
        "Dataset size %s. \nTime Spent: %s\nMemory Spent: %s kilobytes\n",
        $datasetSize,
        number_format((float) (($endTime - $startTime) * 1000), 3, '.', ''),
        round($memory / 1024, 2)
    );
}

print_r($results);
