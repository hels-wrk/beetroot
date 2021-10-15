<?php

$array = [1, 5, 2, 4];
$sum = 3;

function numbersOfSum(array $nums, int $target): array
{
    $countArray = count($nums);

    foreach ($nums as $i => $value) {
        for ($j = $i + 1; $j <= $countArray-1; $j++) {
            if (($value + $nums[$j] == $target)) {
                return [$i, $j];
            }
        }
    }
    return [];
}

var_export(numbersOfSum($array, $sum));