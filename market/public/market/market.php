<?php
require 'config.php';
$smtp = $pdo->query("SELECT id, title FROM goods");
$data = $smtp->fetchAll();
var_export($data);
$i=1;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>.decoration {
            margin-bottom: 15px;
        }</style>
    <title>Document</title>
</head>
<body>
<form action="basket.php" method="post">
    <?php foreach ($data as $value){$good = $value['title'];?>
    <div class="decoration">
        <lable for="<?php echo $good;?>"><?php echo $good;?></lable>
        <input type="checkbox" name="item[]" value="<?php echo $good;?>">
    </div>
    <?php
    }?>
    <div class="decoration">
        <input type="submit" value="Send to basket">
    </div>
</form>
</body>
</html>
