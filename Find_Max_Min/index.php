<?php
function findMin($arr): mixed
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr): mixed
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); ++$i) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$nums = [-2, 0, 5, 7, 9, -5, 30, 100];

echo implode(",",$nums);
$maxValue = findMax($nums);
echo "</br>";
echo "The maximum value is: " . $maxValue;
$minValue = findMin($nums);
echo "</br>";
echo "The mininum value is: " . $minValue;