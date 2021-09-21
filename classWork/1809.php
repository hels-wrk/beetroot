<?php
$fileName = 'oscar_age_female.json';
if (!file_exists($fileName)) {
    die("Файла $fileName не существует");
}
$fileResource = fopen($fileName, 'rb');
if(!$fileResource) {
    die("Ошибка при открытии файла $fileName");
}
$fileContent = fread($fileResource, filesize($fileName));
fclose($fileResource);

$dataAsArray = json_decode($fileContent, true);

$headersCsv = array_keys(reset($dataAsArray));
$csvFileName = 'oscar.csv';
$csvFileResource = fopen($csvFileName, 'w');

fputcsv($csvFileResource, $headersCsv);
foreach ($dataAsArray as $item) {
    fputcsv($csvFileResource, $item);
}


