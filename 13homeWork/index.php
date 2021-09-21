<?php

require 'reader.php';
if(!$baseAsArray) {
    die('Нарушена связь с reader.php');
}
echo 'Все пользователи:'. PHP_EOL;
var_dump($baseAsArray);

require 'filter.php';
if(!$baseWithShortPassword) {
    die('Нарушена связь с filter.php');
}
echo 'Пользователи с паролем короче 8 символов:'. PHP_EOL;
var_dump($baseWithShortPassword);
