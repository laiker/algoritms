<?php

function binarySearch($list, $item)
{
    $low = 0;
    $high = count($list) - 1;

    while ($low <= $high) { 
        $mid = floor(($low + $high) / 2);
        $guess = $list[$mid];

        if ($guess == $item) {
            return $mid;
        }
        
        if ($guess > $item) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return '';
}

// test cases
binarySearch(range(0, 100), 57);
binarySearch(range(0, 10000000), 2048);