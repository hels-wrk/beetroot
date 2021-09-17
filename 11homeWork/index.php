<?php
if (isset($_REQUEST['login']) && (isset($_REQUEST['password']))) {

    $loginsPasswordsBase = file("loginsPasswordsBase.txt", FILE_IGNORE_NEW_LINES);
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];
    foreach($loginsPasswordsBase as $item) {
        $line = explode(" ", $item);
        if ($line[0] == $login && ($line[1] == $password)) {
            $visitRecord = "Пользователь $login авторизировался" . PHP_EOL;
            $numbersOfAttempts = fopen("numbersOfAttempts.txt", "a");
            fwrite($numbersOfAttempts, $visitRecord);
            fclose($numbersOfAttempts);
            echo $visitRecord;
            break;
        }
    }
} else {
    echo "Введите логин и пароль";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .formElement {
            margin-bottom: 5px;
        }
    </style>
    <title>Аuthorization</title>
</head>
<body>
<form action="#" method="get">
    <div class="formElement">
        <lable>Login</lable>
        <input type="text" name="login" autofocus value="<?php echo $login;?>">
    </div>
    <div class="formElement">
        <lable>Password</lable>
        <input type="text" name="password" value="<?php echo $password;?>">
    </div>
    <div class="formElement">
        <button type="submit">login</button>
    </div>
</form>
</body>
</html>