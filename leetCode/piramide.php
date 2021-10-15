<?php

$num = 5;

function pir($numRows)
{
    $arr = [];
    for ($i = 0; $i < $numRows; $i++) {
        $arr[$i]=[];
        $arr[$i][0]=$arr[$i][$i]=1;
        for ($j = 1; $j < $i; $j++) {
            $arr[$i][$j] = $arr[$i-1][$j-1] + $arr[$i-1][$j];
        }
        ksort($arr[$i]);
    }
    return $arr;

}

var_export(pir($num));