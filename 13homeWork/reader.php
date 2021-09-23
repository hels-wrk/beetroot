<?php

$usersBaseFile = 'usersBase.json';
if (!file_exists($usersBaseFile)) {
    die("Файла $usersBaseFile не существует");
}
$fileResource = fopen($usersBaseFile, 'rb');
if(!$fileResource) {
    die("Ошибка при открытии файла $usersBaseFile");
}
$fileContent = fread($fileResource, filesize($usersBaseFile));
fclose($fileResource);

$baseAsArray = json_decode($fileContent, true);
