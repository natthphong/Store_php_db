<?php 
require('connect.php'); 
$con = initDB();

$id=$_POST["IdProduct"]; 
$name= $_POST["name"];
$sell=$_POST["sell"];
$cost=$_POST["cost"];
$qu=$_POST["qu"];
$type=$_POST["type"];
 $sql = "INSERT INTO product(id_product,nameProduct,selling_price,id_type)value('$id','$name',$sell,'$type')";
$result=mysqli_query($con,$sql);
 $sql1 = "INSERT INTO stock(id_product ,quantity ,cost_price)value('$id',$qu,$cost)";
$result1=mysqli_query($con,$sql1);
if($result){
    $check = "ทำรายการสำเร็จ";
}else {
    $check = "ไม่สามารถทำรายการได้";
}
mysqli_close($con);
