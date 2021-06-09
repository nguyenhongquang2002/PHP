<?php include_once "databasebai.php";?>
<?php
$id = $_GET["id"];
$sql_txt = "delete from hocsinhs where id= $id";
if(updateDB($sql_txt)){
    header("Location: home.php");
}else{
    echo "xoa that bai";
}