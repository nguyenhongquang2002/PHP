<?php
include_once "databasebai.php";
session_start();
$id = $_GET["id"];

$sql_txt = "select * from hocsinhs where id = $id";
$ds = queryDB($sql_txt);
if(count($ds)==0) header("Location: home.php");
$sp = $ds[0];
$them_giohang = [];
if($_SESSION["them_sp"]){
    $them_giohang = $_SESSION["them_sp"] ;
}
$them_giohang[] = $sp;
$_SESSION["them_sp"] = $them_giohang;
header("location: home.php");