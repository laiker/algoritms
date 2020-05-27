<?php

function findSmallest($arr)
{
    $smallest = $arr[0];
    $smallestIndex = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $smallest) {
            $smallest = $arr[$i];
            $smallestIndex = $i;
        }
    }

    return $smallestIndex;
}

function selectSort($arr)
{
    $sortedArr = [];
    $count = count($arr);

    for ($i = 0; $i < $count; $i++) {
        $smallestIndex = findSmallest($arr);
        $sortedArr[] = $arr[$smallestIndex];
        array_splice($arr, $smallestIndex, 1);
    }

    return $sortedArr;
}

// test cases
$arrayOne = range(0, 100);
shuffle($arrayOne);
print_r(selectSort($arrayOne));

$arrayTwo = range(0, 1000);
shuffle($arrayTwo);
print_r(selectSort($arrayTwo));
