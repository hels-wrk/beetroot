<?php
$dns = 'mysql:host=db;port=3306;dbname=beetroot';
$connection = new PDO($dns, 'beetroot', 'beetroot');
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$newName = $_POST['newName'];
$newPass = $_POST['newPass'];
$userName = $_POST['name'];
$userPass = $_POST['pass'];

if (!empty($newName) && !empty($newPass)) {
    $stmt = $connection->prepare("INSERT INTO users (user, password) VALUES (:newName, :newPass)");
    $stmt->bindParam(':newName', $newName);
    $stmt->bindParam(':newPass', $newPass);

    $stmt->execute();
    echo "User $newName registered)";
}

if (!empty($userName) && !empty($userPass)) {
    $stmt = $connection->query('SELECT * FROM users');
    $userArray = $stmt ->fetchAll();
    foreach ($userArray as $key => $value) {
        if ($value[0] == $userName && $value[1] == $userPass) {
            $answer = "Welcome, $userName!";
            break;
        }
    }
    if (empty($answer)) {
        $answer = 'Incorrect login or password';
    }
    echo $answer;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>.label{
            margin-bottom: 10px;}
        .Login{
            margin-top: 50px;
        }</style>
    <title>Document</title>
</head>
<body>
<div class="registration">
    <form action="" method="post">
        <div class="label">Registration form</div>
        <div class="label">
            <lable>Name</lable>
            <input type="text" name="newName" placeholder="new name" required="required">
        </div>
        <div class="label">
            <lable>Password</lable>
            <input type="password" name="newPass" placeholder="new password" required="required">
        </div>
        <div class="label">
            <input type="submit" value="Add user">
        </div>
    </form>
</div>

<div class="Login">
    <form action="" method="post">
        <div class="label">Login form</div>
        <div class="label">
            <lable>Name</lable>
            <input type="text" name="name" required="required">
        </div>
        <div class="label">
            <lable>Password</lable>
            <input type="password" name="pass" required="required">
        </div>
        <div class="label">
            <input type="submit" value="Login">
        </div>
    </form>
</div>
</body>
</html>