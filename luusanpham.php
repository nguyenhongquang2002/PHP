<?php include_once "databasebai.php";?>
<?php
$name = $_POST["name"];
$price = $_POST["price"];
$tel = $_POST["tel"];
$address = $_POST["address"];
$sql_txt = "insert into hocsinhs (name,price,tel,address) values ('$name',$price,'$tel','$address')";
if(updateDB($sql_txt)){
    header("Location: home.php");
}else{
    echo "Them that bai";
}