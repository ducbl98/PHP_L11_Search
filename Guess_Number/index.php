<?php

use JetBrains\PhpStorm\Pure;


function binarySearch($arr, $number): float|int
{
    $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($arr[$mid] > $number) {
            $high = $mid - 1;
        } else if ($arr[$mid] < $number) {
            $low = $mid + 1;
        } else {
            return $mid;
        }
    }
    return -1;
}


$numbers = range(1, 200, 5);

$number = 31;
if (binarySearch($numbers, $number) > 0) {
    echo "$number Found at index " . binarySearch($numbers, $number)."<br>";
} else {
    echo "$number Not found <br>";
}

$numberTwo = 500;
if (binarySearch($numbers, $numberTwo) > 0) {
    echo "$numberTwo Found at index " . binarySearch($numbers, $numberTwo)."<br>";
} else {
    echo "$numberTwo Not found <br>";
}