<?php include_once "database.php";?>
<?php
$id = $_GET["id"];

// b1 connect db
$conn = connectDB();
//    echo "Connect successfully";
$sql_txt = "delete from sinhviens where id= $id";
if(updateDB($sql_txt)){
    header("Location: list.php");
}else{
    echo "Cap nhat that bai";
}