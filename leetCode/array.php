<?php

$a = [1,2,3,4,5];
$b = [6,7,8,9,0];

var_export(array_splice($a, count($a), 0, $b));