<?php
$x = 10; //number
$y = "xin chào"; //String
echo $x; //print
$z = "T2009M";
$z = $y.$y;
$y.=$y; //string dung.
$x = $x + 10;// number dung + - * /
if( $x>10){
    echo "x > 10";
}
for ($i=0;$i<10;$i++){
    echo "i=".$i;
}
$arr =[];//khai bao 1 array
$arr [0] = 176;//khai bao 1 array
$arr [1] = "Hoa huong duong";//truyen vao theo chi muc
$arr [] = 103;//tu dong theo chi muc 2

$arr ["name"] = "Nguyen van A";//them phan tu truyen theo chi muc string name : Nguyen Van A

foreach ($arr as $item){ // $item tuong duong $arr[i]
    echo $item."<br/>";
}
$human = [];
$human ["name"] = "le van Nam";
$human ["age"] = "19";
$human ["tel"] = "0966186860";
foreach ($human as $key=>$item){
    echo $key."=".$item."<br/>";
}