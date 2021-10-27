<?php

require_once '../config.php';

use Market\App\Basket;

session_start();
$login = $_SESSION['currentUserId'];
session_destroy();
$boughtGood = $_POST['item'];

if (empty($boughtGood)) {
    echo("Пожуалуйста, ну хоть 1 товар купите.");
} else {
    $order = new Basket($login, $boughtGood);
    $order->putInBasket();

    $showBasket = $order->showBasket();
    echo 'Вы добавили в корзину: ';
    for ($i = 0; $i <= count($showBasket); $i++) {
        echo $showBasket[$i]['title'] . PHP_EOL;
    }
}