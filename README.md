# HSA L17: Data Structures and Algorithms

## Overview
This is an example project to show how Counting Sort algorithm works on Balanced Binary Search Tree structure.

### Task:
* Implement class for Balanced Binary Search Tree that can insert, find and delete elements.
* Generate 100 random datasets and measure complexity,
* Implement Counting Sort algorithm.
* Figure out when Counting Sort doesn’t perform.

## Getting Started

### Preparation
Build docker image.
```bash
  docker build -t cli .
```

## Test cases

### Binary Search Tree

#### 1. Insert. Number of random datasets: 100.
```bash
docker run -it --rm cli php bstInsert.php
```

Result:
```bash
Dataset size: 10 elements
Time Spent: 4.414 milliseconds
Memory Spent: 2048 kilobytes

Dataset size: 50 elements. 
Time Spent: 22.579 milliseconds
Memory Spent: 4096 kilobytes

Dataset size: 100 elements. 
Time Spent: 56.041 milliseconds
Memory Spent: 6144 kilobytes

Dataset size: 500 elements. 
Time Spent: 363.859 milliseconds
Memory Spent: 6144 kilobytes

Dataset size: 1000 elements. 
Time Spent: 951.633 milliseconds
Memory Spent: 6144 kilobytes

Dataset size: 5000 elements. 
Time Spent: 17363.338 milliseconds
Memory Spent: 10240 kilobytes

Dataset size: 10000 elements. 
Time Spent: 86514.655 milliseconds
Memory Spent: 16384 kilobytes
```

#### 2. Search. Number of random datasets: 100.
```bash
docker run -it --rm cli php bstSearch.php
```

```bash
Dataset size: 10 elements. 
Time Spent: 0.770 milliseconds
Memory Spent: 808960 kilobytes

Dataset size: 50 elements. 
Time Spent: 6.171 milliseconds
Memory Spent: 808960 kilobytes

Dataset size: 100 elements. 
Time Spent: 14.870 milliseconds
Memory Spent: 808960 kilobytes

Dataset size: 500 elements. 
Time Spent: 199.361 milliseconds
Memory Spent: 808960 kilobytes

Dataset size: 1000 elements. 
Time Spent: 247.512 milliseconds
Memory Spent: 808960 kilobytes

Dataset size: 5000 elements. 
Time Spent: 1982.538 milliseconds
Memory Spent: 808960 kilobytes

Dataset size: 10000 elements. 
Time Spent: 4325.124 milliseconds
Memory Spent: 808960 kilobytes
```

#### 3. Delete. Number of random datasets: 100. Delete 1 random element.
```bash
docker run -it --rm cli php bstDelete.php
```

Operation takes a lot of time because first it searches node, then it removes and re-balance the tree.

Results:
```bash
Dataset size: 10 elements. 
Time Spent: 0.409 milliseconds
Memory Spent: 722944 kilobytes

Dataset size: 50 elements. 
Time Spent: 0.626 milliseconds
Memory Spent: 722944 kilobytes

Dataset size: 100 elements. 
Time Spent: 0.727 milliseconds
Memory Spent: 722944 kilobytes

Dataset size: 500 elements. 
Time Spent: 1.129 milliseconds
Memory Spent: 722944 kilobytes

Dataset size: 1000 elements. 
Time Spent: 1.286 milliseconds
Memory Spent: 722944 kilobytes

Dataset size: 5000 elements. 
Time Spent: 1.263 milliseconds
Memory Spent: 722944 kilobytes

Dataset size: 10000 elements. 
Time Spent: 1.419 milliseconds
Memory Spent: 722944 kilobytes
```

### Counting Sort
Dataset Sizes: 100, 500, 1_000, 5_000, 10_000, 100_000.

#### 1. Random unique elements.
```bash
docker run -it --rm cli php countingSortRandomUnique.php
```

Result:
```bash
Dataset size 100. 
Time Spent: 0.026 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 500. 
Time Spent: 0.065 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 1000. 
Time Spent: 0.120 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 5000. 
Time Spent: 0.643 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 10000. 
Time Spent: 1.139 milliseconds
Memory Spent: 4096 kilobytes

Dataset size 100000. 
Time Spent: 14.355 milliseconds
Memory Spent: 12296 kilobytes
```

#### 2. Random non-unique elements.
```bash
docker run -it --rm cli php countingSortRandomUnique.php
```

Result:
```bash
Dataset size 100. 
Time Spent: 0.031 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 500. 
Time Spent: 0.077 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 1000. 
Time Spent: 0.146 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 5000. 
Time Spent: 0.778 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 10000. 
Time Spent: 1.793 milliseconds
Memory Spent: 4096 kilobytes

Dataset size 100000. 
Time Spent: 18.259 milliseconds
Memory Spent: 12296 kilobytes
```

#### 3. Random elements including negative numbers.
```bash
docker run -it --rm cli php countingSortRandomWithNegative.php
```

```bash
Dataset size 100. 
Time Spent: 0.029 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 500. 
Time Spent: 0.078 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 1000. 
Time Spent: 0.148 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 5000. 
Time Spent: 0.947 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 10000. 
Time Spent: 1.837 milliseconds
Memory Spent: 4096 kilobytes

Dataset size 100000. 
Time Spent: 25.030 milliseconds
Memory Spent: 12296 kilobytes
```

#### 4. Random elements with big positive number  (e.g 1_000_000_000) in the beginning.
```bash
docker run -it --rm cli php countingSortRandomWithBigPositive.php
```

```bash
Dataset size 100. 
Time Spent: 19232.898 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 500. 
Time Spent: 21885.918 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 1000. 
Time Spent: 23655.319 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 5000. 
Time Spent: 22517.091 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 10000. 
Time Spent: 22812.142 milliseconds
Memory Spent: 4096 kilobytes

Dataset size 100000. 
Time Spent: 30189.927 milliseconds
Memory Spent: 12296 kilobytes
```

#### 5. Random elements with big negative number (e.g -1_000_000_000) in the beginning.
```bash
docker run -it --rm cli php countingSortRandomWithBigNegative.php
```

```bash
Dataset size 100.
Time Spent: 20327.225 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 500. 
Time Spent: 21179.761 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 1000. 
Time Spent: 22553.819 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 5000. 
Time Spent: 25505.741 milliseconds
Memory Spent: 2048 kilobytes

Dataset size 10000. 
Time Spent: 23072.540 milliseconds
Memory Spent: 4096 kilobytes

Dataset size 100000. 
Time Spent: 25456.604 milliseconds
Memory Spent: 12296 kilobytes
```

In the above scenarios, we used different cases of complexity. Counting sort is most efficient if the range of input values is not greater than the number of values to be sorted. In that scenario, the complexity of counting sort is much closer to O(n), making it a linear sorting algorithm. Also, the larger the range of elements in the given array, the larger is the space complexity, hence the space complexity of counting sort is bad if the range of integers is very large as the auxiliary array of that size has to be made.
