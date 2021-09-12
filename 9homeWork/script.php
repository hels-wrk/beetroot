<?php

$users = [];
$users[6] = [ "name" => "Dima", "email" => "Dima@test.com", "lang" => "ru",];
$users[3] = [ "name" => "Olga", "email" => "Olga@test.com", "lang" => "en",];
$users[7] = [ "name" => "Vika", "email" => "Vika@test.com", "lang" => "ua",];
$users[8] = [ "name" => "Kira", "email" => "Kira@test.com", "lang" => "de",];
$users[1] = [ "name" => "Sasha", "email" => "Sasha@test.com", "lang" => "en",];

$greeting = ["ru" => "Здоров", "en" => "Hello", "ua" => "Добрий день", "de" => "Hallo"];

echo 'Послдений пользователь' . PHP_EOL;
$minID = end($users);
var_export($minID);
echo 'Первый пользователь' . PHP_EOL;
$maxID = reset($users);
var_export($maxID);

if ($minID["lang"] === $maxID["lang"]) {
        echo $greeting[$minID["lang"]];
} else {
    echo $greeting[$minID["lang"]] . PHP_EOL;
    echo $greeting[$maxID["lang"]] . PHP_EOL;
}

