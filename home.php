<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cửa Hàng Thế Giời</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/ListTable.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
$category = [];
$category[] = [
    "id"=>1,
    "name"=>"Giày Adidas",
    "price"=>1000
];
$category[] = [
    "id"=>2,
    "name"=>"Đồng hồ Apple watch",
    "price"=>1500
];
$category[] = [
    "id"=>3,
    "name"=>"Iphone 12",
    "price"=>2000
];
$category[] = [
    "id"=>4,
    "name"=>"Áo Phông",
    "price"=>500
];
$category[] = [
    "id"=>5,
    "name"=>"Quần Đùi",
    "price"=>500
];
?>
<h1>Thế Giới Của Tôi</h1>
<div class="btn-add-new">
    <button onclick="location.href='AddProduct.php'" class="btn btn-success btn-lg">Add new product</button>
</div>
<table class="table table-striped table-bordered">
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th class="thead-button"></th>
    </thead>
    <tbody>
    <?php foreach ($category as $item) {?>
        <tr>
            <td><?php echo $item["id"] ?></td>
            <td><?php echo $item["name"] ?></td>
            <td><?php echo $item["price"] ?></td>
            <td class="item-button">
                <button onclick="location.href='EditProduct.php'" type="button" class="btn btn-primary btn-lg">Edit</button>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
            class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>CHÚ Ý
                    </h6>
                    <p>
                        CÙNG CHUNG TAY ĐẨY LÙI COVID NHÉ <3
                        ĐANG Ở CHỖ NÀO NGỒI YÊN CHỖ ĐẤY
                        VIỆT NAM CỐ LÊN
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        PHÒNG CHỐNG DỊCH
                    </h6>
                    <p>
                        <a href="https://ncov.moh.gov.vn/trang-chu!" class="text-reset">BỘ Y TẾ</a>
                    </p>
                    <p>
                        <a href="https://ncov.moh.gov.vn/trang-chu!" class="text-reset">BỘ Y TẾ</a>
                    </p>
                    <p>
                        <a href="https://ncov.moh.gov.vn/trang-chu!" class="text-reset">BỘ Y TẾ</a>
                    </p>
                    <p>
                        <a href="https://ncov.moh.gov.vn/trang-chu!" class="text-reset">BỘ Y TẾ</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        COVID-19
                    </h6>
                    <p>
                        <a href="https://tokhaiyte.vn/" class="text-reset">KHAI BÁO Y TẾ</a>
                    </p>
                    <p>
                        <a href="https://tokhaiyte.vn/!" class="text-reset">KHAI BÁO Y TẾ</a>
                    </p>
                    <p>
                        <a href="https://tokhaiyte.vn/!" class="text-reset">KHAI BÁO Y TẾ</a>
                    </p>
                    <p>
                        <a href="https://tokhaiyte.vn/" class="text-reset">KHAI BÁO Y TẾ</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> Hà Nội, NY 30000, VN</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        nguyenhongquang2002@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 09 661 868 60</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://www.facebook.com/nguyenhongquang3005.HN">Nguyễn Hồng Quang</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>