<?php

function countRecursion($array)
{
    if (count($array) == 1) {
        return 1;
    } else {
        array_pop($array);
        return 1 + countRecursion($array);
    }
}

// test cases
print_r(countRecursion([1,2,3]));
print_r(countRecursion(range(rand(0, 100), rand(1000, 5000))));