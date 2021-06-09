<?php include_once "databasebai.php";?>
<?php
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$tel = $_POST["tel"];
$address = $_POST["address"];
$sql_txt = "update hocsinhs set name='$name',price=$price, tel='$tel', address='$address' where id= $id";
if(updateDB($sql_txt)){
    header("Location: home.php");
}else{
    echo "Them that bai";
}
