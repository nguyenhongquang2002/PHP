<?php
session_start();
$dssv_xuatsac = [];
if($_SESSION["sv_xs"]){
    $dssv_xuatsac =  $_SESSION["sv_xs"];
}
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien xuat sac ky nay</title>
</head>
<body>
<ul>
    <?php foreach ($dssv_xuatsac as $sv){?>
    <li><?php echo $sv["name"];?></li>
    <?php } ?>
</ul>
</body>
</html>
