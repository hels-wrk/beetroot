<?php

function fileToArray($nameFile)
{
    if (!file_exists($nameFile)) {
        die("Файла $nameFile не существует");
    }
    $fileResource = fopen($nameFile, 'rb');
    if (!$fileResource) {
        die("Ошибка при открытии файла $nameFile");
    }
    $fileContent = fread($fileResource, filesize($nameFile));
    fclose($fileResource);

    try {
        $baseAsArray = json_decode($fileContent, true, 512, JSON_THROW_ON_ERROR);
    } catch (Exception $e) {
        $baseAsArray = [];
    }
    return $baseAsArray;
}

function userSearch($login, $password, $baseAsArray)
{
    $userData = [];
    foreach ($baseAsArray as $item) {
        if ($login == $item['Login'] && $password == $item['Password']) {
            $userData = $item;
            break;
        } else {
            $userData = 'Такого пользователя не существует.';
        }
    }
    return $userData;
}

$baseAsArray = fileToArray('usersBase.json');
var_export(userSearch('Dima1', '987654321', $baseAsArray));
