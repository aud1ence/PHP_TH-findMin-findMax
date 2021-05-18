<?php
function findMin($arr): int
{
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

function findMax($arr)
{
    $max = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

$array = [-1, 2, 0, 4, -6, 100, 9];
$minValue = findMin($array);
$maxValue = findMax($array);
echo "<br>";
echo "The mini number value is: " . $minValue;
echo "<br>";
echo "The max number value is: " . $maxValue;
