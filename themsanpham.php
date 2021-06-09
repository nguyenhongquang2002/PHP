<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1><?php echo $_COOKIE["title"]?></h1>
    <form action="luusanpham.php" method="post">
        <input name="name" type="text" placeholder="Name"/><br/><br/>
        <input name="price" type="text" placeholder="Price"/><br/><br/>
        <input name="tel" type="number" placeholder="Tel"/><br/><br/>
        <input name="address" type="text" placeholder="Address"/><br/><br/>
        <button type="submit" >Thêm</button>
    </form>
</body>
</html>