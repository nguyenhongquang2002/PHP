<?php include_once "databasebai.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết thông tin Sản Phẩm</title>
</head>
<body>
<?php
?>
<a href="home.php"><< Trở lại</a>
<?php
    $id = $_GET["id"];
    $conn = connectDB();
    $sql_txt = "select * from hocsinhs where id = $id";
    $ds = queryDB($sql_txt);
    if(count($ds)==0) header("Location: home.php");
    $sp = $ds[0];
?>
<h1><?php echo $_COOKIE["title"]?></h1>
<ul>
    <?php foreach ($sp as $key=>$value){?>
        <li><?php echo $key.":".$value;?></li>
    <?php } ?>
</ul>
</body>
</html>