<?php include_once "databasebai.php";?>
<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Thư Viện </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<?php
setcookie("title","Thêm Sách",time()+3000,"/quang_php");
$conn = connectDB();
$sql_txt = "select  * from quang";
$dssanpham  = queryDB($sql_txt);
?>
<table class="table">
    <?php
    if ($dssanpham != null) {
        foreach ($dssanpham as $item){?>
    <tr>
        <th scope="col">#</th>
        <th scope="col">bookid</th>
        <th scope="col">authorid</th>
        <th scope="col">title</th>
        <th scope="col">ISBN</th>
        <th scope="col">pub_year</th>
        <th scope="col">available</th>
        <th scope="col">Sửa / Xóa</th>
        <th scope="col">Xem Chi Tiết</th>


    </tr>
    <tr>
        <td scope="row">#</td>
        <td><?php echo $item["bookid"]?></td>
        <td><?php echo $item["authorid"]?></td>
        <td><?php echo $item["title"]?></td>
        <td><?php echo $item["ISBN"]?></td>
        <td><?php echo $item["pub_year"]?></td>
        <td><?php echo $item["available"]?></td>
        <td><a href="suasanpham.php?id=<?php echo $item["id"]; ?> "class="btn btn-primary btn-lg">Sửa</a> | <a href="xoasanpham.php?id=<?php echo $item["id"]; ?>" class="btn btn-primary btn-lg">Xóa</a></td>
        <th><a href="chitietsanpham.php?id=<?php echo $item["id"]; ?>" class="btn btn-primary btn-lg">Chi Tiết Sách</a></th>
    </tr>
    <?php }
    }
    else {?>
    <?php }
    ?>
    </tbody>
</table>
</body>
</html>
