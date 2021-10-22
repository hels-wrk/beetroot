<?php

if(isset($_POST["action1"])) {
    require_once "login.php";
}
elseif(isset($_POST["action2"])) {
    require_once "registration.php";
}