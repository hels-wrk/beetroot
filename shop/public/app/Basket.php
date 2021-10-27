<?php

namespace Market\App;

class Basket
{
    private $login;
    private $boughtGood;


    public function __construct(int $login, array $boughtGood)
    {
        $this->login = $login;
        $this->boughtGood = $boughtGood;
    }

    public function putInBasket(): void
    {
        require 'connection.php';

        for ($i = 0; $i < count($this->boughtGood); $i++) {
            $smtp = $pdo->prepare("INSERT INTO basket(good_id, user_id) VALUES(?, ?)");
            $smtp->execute([$this->boughtGood[$i], $this->login]);
        }
    }

    public function showBasket(): array
    {
        require 'connection.php';

        $smtp = $pdo->prepare(
            "SELECT title FROM goods JOIN basket on goods.id = basket.good_id WHERE basket.user_id=?"
        );
        $smtp->execute([$this->login]);
        $result = $smtp->fetchAll();
        return $result;
    }
}




