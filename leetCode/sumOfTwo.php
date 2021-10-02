<?php
$array = [1, 5, 2, 4];
$sum = 3;

function numbersOfSum(array $array, int $sum): array
{
    $countArray = count($array);
    $result = [];
    for ($i = 0; $i<$countArray-1;$i++) {
        for ($j = 1; $j<=$countArray-1;$j++) {
            if ($array[$i] + $array[$j] == $sum) {
                $result[] = $i;
                $result[] = $j;
                return $result;
            }
        }
    }
    die('Сума не найдена');
}

var_export(numbersOfSum($array,$sum));