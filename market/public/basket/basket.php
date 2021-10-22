<?php

require 'config.php';
session_start();
$login = $_SESSION['currentUser'];
$arr = $_POST['item'];
var_export($arr);

if(empty($arr))
{
    echo("Вы не выбрали ни одного здания.");
}
else
{
    for($i=0; $i < count($arr); $i++)
    {
        $smtp = $pdo->prepare("INSERT INTO basket(good_id, user_id) VALUES(?, ?)");
        $smtp->execute([$arr[$i],  $login]);
    }
}
session_destroy();