<?php include_once "databasebai.php";?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sản phẩm</title>
</head>
<body>
<?php
    $id = $_GET["id"];
    $conn = connectDB();
    $sql_txt = "select * from hocsinhs where id = $id";
    $rs = $conn->query($sql_txt);
    $sp = null;
    if($rs->num_rows>0){
        while ($row = $rs->fetch_assoc()){
            $sp = $row;
        }
    }
    if($sp == null) header("Location: home.php"); // redirect ve list neu ko tim thay sv
?>
    <h1><?php echo $_COOKIE["title"]?></h1>
    <form action="capnhatsanpham.php" method="post">
        <input name="id" value="<?php echo $sp["id"];?>" type="hidden"/>
        <input name="name" type="text" placeholder="Name" value="<?php echo $sp["name"];?>"/><br/><br/>
        <input name="price" type="text" placeholder="Price" value="<?php echo $sp["price"];?>"/><br/><br/>
        <input name="tel" type="number" placeholder="Tel" value="<?php echo $sp["tel"];?>"/><br/><br/>
        <input name="address" type="text" placeholder="Address" value="<?php echo $sp["address"];?>"/><br/><br/>
        <button type="submit">Sửa</button>
    </form>
</body>
</html>
