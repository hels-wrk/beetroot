<?php

if (!$baseAsArray) {
    die('Файл для фильтрации по паролю не найдено');
}
foreach ($baseAsArray as $item) {
    if (strlen($item['Password']) < 8) {
        $baseWithShortPassword[] = $item;
    }
}

