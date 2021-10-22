<?php

require_once "../user/userAction.php";

if (isset($_POST["action1"])) {
    $user = new User($login, $pass);
    $user->login();
} elseif (isset($_POST["action2"])) {
    $user = new User($login, $pass);
    $user->registration();
}