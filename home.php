<?php include_once "databasebai.php";?>
<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<?php
setcookie("title","SAN PHAM SHOP",time()+3000,"/quang_php");
$conn = connectDB();
$sql_txt = "select  * from hocsinhs";
$dssanpham  = queryDB($sql_txt);
?>
<a href="themsanpham.php" class="btn btn-primary btn-lg">Thêm SP</a>
<a href="tranggiohang.php" class="btn btn-success btn-lg">Đã Thêm Giỏ Hàng</a>
<table class="table">
    <?php
    if ($dssanpham != null) {
        foreach ($dssanpham as $item){?>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Tel</th>
        <th scope="col">Address</th>
        <th scope="col">Sửa / Xóa</th>
        <th scope="col">Thêm</th>
        <th scope="col">Xem Chi Tiết</th>

    </tr>
    <tr>
        <td scope="row">#</td>
        <td><?php echo $item["name"]?></td>
        <td><?php echo $item["price"]?></td>
        <td><?php echo $item["tel"]?></td>
        <td><?php echo $item["address"]?></td>
        <td><a href="suasanpham.php?id=<?php echo $item["id"]; ?> "class="btn btn-primary btn-lg">Sửa</a> | <a href="xoasanpham.php?id=<?php echo $item["id"]; ?>" class="btn btn-primary btn-lg">Xóa</a></td>
        <th><a href="giohangsanpham.php?id=<?php echo $item["id"]; ?>" class="btn btn-success btn-lg">Thêm Giỏ Hàng</a></th>
        <th><a href="chitietsanpham.php?id=<?php echo $item["id"]; ?>" class="btn btn-primary btn-lg">Chi Tiết Sản Phẩm</a></th>
    </tr>
    <?php }
    }
    else {?>
    <?php }
    ?>
    </tbody>
</table>
<footer class="text-center text-white" style="background-color: #45637d;">
    <!-- Grid container -->
    <div class="container p-4">
        <!-- Section: Iframe -->
        <section class="">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="ratio ratio-16x9">
                        <iframe
                                class="shadow-1-strong rounded"
                                src="https://www.youtube.com/embed/vlDzYIIOYmM"
                                title="YouTube video"
                                allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Iframe -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
</body>
</html>
