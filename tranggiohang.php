<?php
session_start();
$them_giohang = [];
if($_SESSION["them_sp"]){
    $them_giohang =  $_SESSION["them_sp"];
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Sản Phẩm Đã Thêm</title>
</head>
<body>
<a href="home.php"><< Trở lại</a>
    <ul>
        <?php foreach ($them_giohang as $sp){ ?>
        <li><?php echo $sp["name"]."--".$sp["price"]."--".$sp["tel"]."--".$sp["address"];?></li>
       <?php } ?>
        <li></li>
    </ul>
</body>
</html>

