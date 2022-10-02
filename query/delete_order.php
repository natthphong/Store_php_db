<?php 
require('connect.php');
$con = initDB(); 
$id = $_POST["id_order"];

$repair = "select id_product,quantity from order_detail where id_order = $id";
$resultr = mysqli_query($con, $repair); 
while ($row = mysqli_fetch_array($resultr)) {
    $sql = "select quantity from stock where id_product = '" . $row["id_product"]  . "'";
    $re= mysqli_fetch_array(mysqli_query($con, $sql));
    
     $qu =  intval($row["quantity"] );
    
     $stock =   intval($re["quantity"] );  
     $p =    $stock +   $qu ;
     $up = "update  stock set   quantity =$p where  id_product  = '". $row["id_product"] ."'"; 
   $update = mysqli_query($con, $up);
}


$query1 = "delete from order_detail where id_order = $id";
$result = mysqli_query($con, $query1); 
$query2 = "delete from order_ where id_order = $id";
$result1 = mysqli_query($con, $query2); 
mysqli_close($con);
if($result){
    $check = "ทำรายการสำเร็จ";
}else{
    $check = "ไม่สามารถทำรายการได้";
}
?>