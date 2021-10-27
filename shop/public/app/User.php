<?php

namespace Market\App;

class User
{
    private $login;
    private $pass;

    public function __construct(string $login, string $pass)
    {
        $this->login = $login;
        $this->pass = $pass;
    }

    public function login(): void
    {
        require_once 'connection.php';

        $smtp = $pdo->prepare("SELECT * FROM users WHERE username=?");
        $smtp->execute([$this->login]);
        $result = $smtp->fetch();

        if(password_verify($this->pass, $result['password'])){
            session_start();
            $_SESSION['currentUserId'] = $result['id'];
            echo "Приятных покупок, $this->login!".PHP_EOL;
            require_once 'market.php';
        }else{
            echo 'Неверный логин или пароль';
        }
    }

    public function registration(): void
    {
        require_once 'connection.php';

        $smtp = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        $smtp->execute([$this->login]);
        $loginFromDB = $smtp->fetch();
        $hashPassword = password_hash($this->pass, PASSWORD_DEFAULT);

        if(!$loginFromDB){
            $smtp = $pdo->prepare("INSERT INTO users(username, password) VALUES(?, ?)");
            $smtp->execute([$this->login, $hashPassword]);
            echo 'Успешно зарегестрировались';
        }else{
            echo 'Такой логин уже есть';
        }
    }
}
