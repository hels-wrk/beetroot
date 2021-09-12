<?php

$users = [];
$users[6] = [ "name" => "Dima", "email" => "Dima@test.com"];
$users[3] = [ "name" => "Olga", "email" => "Olga@test.com"];
$users[7] = [ "name" => "Vika", "email" => "Vika@test.com"];
$users[2] = [ "name" => "Petr", "email" => "Petr@test.com"];
$users[8] = [ "name" => "Kira", "email" => "Kira@test.com"];

echo 'Всего пользователей:' . (count($users)) . PHP_EOL;

krsort($users); //sortirovka po ubuvaniu klucha
echo 'Сортируем по буванию ID:' . PHP_EOL;
var_dump($users) . PHP_EOL;

echo 'Пользователь с минимальным ID:' . PHP_EOL;
$minID = end($users);
var_dump($minID);

echo 'Пользователь с максимальным ID:' . PHP_EOL;
$maxID = reset($users);
var_dump($maxID);

echo 'Пользователь с почти максимальниым ID:' . PHP_EOL;
$almostMaxID = next($users);
var_dump($almostMaxID);

echo 'Пользователь с почти минимальным ID:' . PHP_EOL;
$minID = end($users);
$almostMinID = prev($users);
var_dump($almostMinID);

echo 'Удалить пользователя с минимальным ID:' . PHP_EOL;
$minIndex = array_search($minID , $users, true);
unset($users[$minIndex]);
var_dump($users);






