<?php

require '../config.php';

use Market\App\User;

$login = $_POST['login'];
$pass = $_POST['password'];

if (isset($_POST["action1"])) {
    $user = new User($login, $pass);
    $user->login();
} elseif (isset($_POST["action2"])) {

    $user = new User($login, $pass);
    $user->registration();
}