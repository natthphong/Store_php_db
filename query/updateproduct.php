<?php
require('connect.php');
$con = initDB();
$id=$_POST["IdProduct"]; 
$name= $_POST["name"];
$sell=$_POST["sell"];
$cost=$_POST["cost"];
$qu=$_POST["qu"];
$type = $_POST["type"];

$sql = "update  product set   nameProduct = \"$name\" , selling_price = \"$sell\" , id_type = \"$type\" where id_product = $id";
$result=mysqli_query($con,$sql);
$sql1 = "update  stock set   cost_price = \"$cost\" , quantity = \"$qu\"  where id_product = $id";
$result1=mysqli_query($con,$sql1);
if($result){
    $check = "ทำรายการสำเร็จ";
}else {
    $check = "ไม่สามารถทำรายการได้";
}

mysqli_close($con);
