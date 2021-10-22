<?php

session_start();
$login = $_SESSION['currentUser'];
$boughtGood = $_POST['item'];
session_destroy();

class Basket
{
    private $login;
    private $boughtGood;

    public function __construct(string $login, array $boughtGood)
    {
        $this->login = $login;
        $this->boughtGood = $boughtGood;
    }

    public function putInBasket(): void
    {
        require '../connection/connectionSetting.php';

        for ($i = 0; $i < count($this->boughtGood); $i++) {
            $smtp = $pdo->prepare("INSERT INTO basket(good, user_name) VALUES(?, ?)");
            $smtp->execute([$this->boughtGood[$i], $this->login]);
        }
    }

    public function showBasket(): array
    {
        require '../connection/connectionSetting.php';

        $result =[];
        $smtp = $pdo->prepare("SELECT good, user_name FROM basket WHERE user_name=?");
        $smtp->execute([$this->login]);
        $result = $smtp->fetchAll();
        return $result;
    }
}

if (empty($boughtGood)) {
    echo("Пожуалуйста, ну хоть 1 товар купите.");
} else {
    $order = new Basket($login, $boughtGood);
    $order->putInBasket();
    var_export($order->showBasket());
}

