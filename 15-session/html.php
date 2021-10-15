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
<form action="index.php" method="get">
    <?php
    foreach ($products as $item) {
        $itemName = $item['Name'];
        $itemPrice = $item['Price'];
        $itemNumber = $item['Number'];
        $space = ' ';
        ?>
       <div>
           <lable><?php echo $itemName . $space . $itemPrice . $space . $itemNumber; ?></lable>
           <input type="checkbox" name="check" value="<?php echo $item['name']; ?>" <?php echo session();?> >
       </div>
   <?php } ?>
    <input type="submit">
</form>
</body>
</html>
