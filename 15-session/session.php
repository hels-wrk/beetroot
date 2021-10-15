<?php
session_start();

function session()
{
    if (isset($_GET['check'])) {
        $_SESSION[$_GET['check']] = 'checked';
    } else {
        unset($_SESSION[$_GET['check']]);
    }
    return $_SESSION[$_GET['check']];
}





