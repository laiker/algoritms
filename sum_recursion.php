<?php

function sumRecursion($array)
{
    if (count($array) == 1) {
        return $array[0];
    } else {
        $head = array_shift($array);
        return $head + sumRecursion($array);
    }
}

// test cases
print_r(sumRecursion([1,2,3]));
print_r(sumRecursion(range(rand(0, 100), rand(1000, 5000))));