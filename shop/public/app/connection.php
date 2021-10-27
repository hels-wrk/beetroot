<?php

const PASSWORD_SALT = '123mbswj4fasdmjdsfjfnbvfnsfd';

$dns = 'mysql:host=shop_db;port=3306;dbname=beetroot';
$options = [
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
];

try {
    $pdo = new \PDO($dns, 'beetroot', 'beetroot', $options);
    return $pdo;
} catch (\Throwable $e) {
    print "Ошибка подключения к базе данных: {$e->getMessage()} <br/>";
}




