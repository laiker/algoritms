<?php

function factorial($n)
{
    if ($n == 1) {
        return $n = 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// test cases
print_r(factorial(3));