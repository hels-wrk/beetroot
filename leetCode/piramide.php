<?php

function generate(int $numRows): array
{
    $externalArray = [[1]];
    for ($i = 1; $i < $numRows; $i++) {
        $externalArray[] = internalArray(end($externalArray));
    }
    return $externalArray;
}

function internalArray(array $internalArray): array
{
    foreach ($internalArray as $key => $item) {
        if ($key == 0) {
            $newInternalArray[] = 1;
        } else {
            array_push($newInternalArray, $item + $internalArray[$key - 1]);
        }
    }
    $newInternalArray[] = 1;
    return $newInternalArray;
}

$num = 5;
var_export(generate($num));