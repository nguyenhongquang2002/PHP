<?php include_once "database.php";?>
<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
<?php
    setcookie("title","Xin Chao T2009M",time()+3600,"/t2009m_php");//set vao key title 1 gia tri string , thoi gian la 36000
    $conn = connectDB();
    $sql_txt = "select  * from sinhviens";
    $rs = $conn->query($sql_txt);
    $dssinhvien = queryDB($sql_txt);
?>
<a href="themsinhvien.php">Thêm Sinh Viên</a>
<a href="danhsachxuatsac.php">SV Xuat Sac</a>
<ul>
    <?php foreach ($dssinhvien as $item){ ?>
        <li><a href="chitietsinhvien.php?id=<?php echo $item["id"]; ?>"> <?php echo $item["name"]."--".$item["tel"];?></a>
            <a href="suasinhvien.php?id=<?php echo $item["id"]; ?>">Sửa</a>
            <a href="xoasinhvien.php?id=<?php echo $item["id"]; ?>">Xóa</a>
            <a href="svxuatsac.php?id=<?php echo $item["id"]; ?>">SV xuat sac</a>
        </li>
    <?php } ?>
</ul>
</body>
</html>