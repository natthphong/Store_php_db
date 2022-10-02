<?php 
require('connect.php'); 
$con = initDB();
$id = $_POST["IdProduct"];
$query1 = "delete from stock where id_product = $id";
$result = mysqli_query($con, $query1); 

$query2 = "delete from product where id_product = $id";
$result1 = mysqli_query($con, $query2); 
if($result){
    $check = "ทำรายการสำเร็จ";
}else {
    $check = "ไม่สามารถทำรายการได้";
}
mysqli_close($con);
?>