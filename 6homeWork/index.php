<?php
$name = 'Oleksandr';
$password = '123';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="">
    <div class="input">
        <lable>Login:</lable>
        <input type="text" value="<?php echo $name;?>">
    </div>
    <div class="input">
        <lable>Password:</lable>
        <input type="text" value="<?php echo $password;?>">
    </div>
</form>
</body>
</html>