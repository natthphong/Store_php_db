<?php

use LDAP\Result;

require('connect.php');
$con = initDB();

$id_order = $_POST['id_order'];
$day = $_POST['date'];
$con->autocommit(false);
$con->query("START TRANSACTION");

$query = "insert into order_(id_order ,orderdate,id_emp)value($id_order,'$day','user1234')";
$result = mysqli_query($con, $query);
if ($result) {
    foreach ($_POST['id_product'] as $key => $value) {
        $query1 = "insert into order_detail(id_order , id_product, quantity)VALUES ($id_order,'" . $_POST['id_product'][$key] . "','" . $_POST['qu'][$key] . "')";
        $result = mysqli_query($con, $query1);
        if (!$result) {
            $check = "ไม่สามารถทำรายการได้";
            $con->rollback();
            return;
        
        } 
        $sql = "select quantity from stock where id_product = '" . $_POST['id_product'][$key] . "'";
        $result1= mysqli_query($con, $sql);
        $r = mysqli_fetch_array($result1);
        $o = $_POST['qu'][$key];
        $oo  = $r["quantity"] ;
        $input =  intval($o);
        $instock = intval($oo);
        $test = $instock-$input;
        if($test<0){
            $check = "ไม่สามารถทำรายการได้";
            $con->rollback();
            return;
        }else{
            $up = "update  stock set    quantity = $test where id_product = '" . $_POST['id_product'][$key] . "'";
            $update = mysqli_query($con, $up);
        }
 
    }
    $check = "ทำรายการสำเร็จ";
    $con->commit();
    mysqli_close($con);
} else {
    $check = "ไม่สามารถทำรายการได้";
    mysqli_close($con);
}
