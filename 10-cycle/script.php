<?php

$users = [];
$users[] = [ "name" => "Dima", "email" => "Dima@test.com", "lang" => "ru",];
$users[] = [ "name" => "Olga", "email" => "Olga@test.com", "lang" => "en",];
$users[] = [ "name" => "Vika", "email" => "Vika@test.com", "lang" => "ua",];
$users[] = [ "name" => "Kira", "email" => "Kira@test.com", "lang" => "de",];
$users[] = [ "name" => "Sasha", "email" => "Sasha@test.com", "lang" => "en",];
$users[] = [ "name" => "Roma", "email" => "Roma@test.com", "lang" => "en",];
$users[] = [ "name" => "Tolik", "email" => "Tolik@test.com", "lang" => "ua",];
$users[] = [ "name" => "Vika", "email" => "Vika@test.com", "lang" => "ru",];
$users[] = [ "name" => "Sasha", "email" => "Sasha@test.com", "lang" => "en",];
$users[] = [ "name" => "Sasha", "email" => "Sasha@test.com", "lang" => "de",];
$users[] = [ "name" => "Marina", "email" => "Marina@test.com", "lang" => "de",];

foreach ($users as $key => $value) {
    $user[] = $value['name'];
}

$numbers = array_count_values($user);

foreach ($numbers as $item => $number) {
    if ($number < 2) {
        unset($numbers[$item]);
    }
}
echo 'Пользователей больше 2 c одинаковыми именами:' . PHP_EOL;
var_dump($numbers);

foreach ($users as $key => $value) {
    switch ($value['lang']) {
        case 'ua':
            $uaLanguage[] = $value;
            break;
        case 'en':
            $ruLanguage[] = $value;
            break;
        case 'ru':
            $enLanguage[] = $value;
            break;
        case 'de':
            $deLanguage[] = $value;
            break;
    }
}
echo 'Пользователи с украинским языком:' . PHP_EOL;
var_dump($uaLanguage) . PHP_EOL;

echo 'Пользователи с английским языком:' . PHP_EOL;
var_dump($enLanguage) . PHP_EOL;

echo 'Пользователи с русским языком:' . PHP_EOL;
var_dump($ruLanguage) . PHP_EOL;

echo 'Пользователи с немецким языком:' . PHP_EOL;
var_dump($deLanguage) . PHP_EOL;

for ($i = count($users)-1;$i>=0;$i--) {
    $reversUser[] = $users[$i];
}
echo 'Перевернутый масив:' . PHP_EOL;
var_dump($reversUser);