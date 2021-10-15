<?php

/**
 * @param string $sourceFile
 * @return array
 * @throws Exception
 */
function jsonToArray(string $sourceFile): array
{
    if (!file_exists($sourceFile)) {
        throw new Exception("Файл '$sourceFile' не нахожу");
    }

    $json = file_get_contents($sourceFile);
    if ($json === false) {
        throw new Exception("Не вижу содержимого файла $sourceFile");
    }

    try {
        $products = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (Exception $e) {
        throw new Exception('Ошибка работы с json');
    }

    return $products;
}