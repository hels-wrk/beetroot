<?php
$password = 'awdwadwmd';

if ((strlen($password) > 7) && (strlen($password) < 12)) {
    echo 'Пароль подходит.' . PHP_EOL;
} else {
    echo 'Нужно придумать другой пароль, где символов больше 7 и меньше 12' . PHP_EOL;
}