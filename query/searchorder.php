<?php
require('connect.php'); 
$con = initDB();
$number = $_POST["id_order"];
$query = "select product.id_product,nameProduct,selling_price,quantity,quantity * selling_price as 'PRICE' ,orderdate as 'date', First_name as 'empName' from  order_,order_detail,product,emp where (order_.id_order =order_detail.id_order)
and (order_detail.id_product =product.id_product) and (order_.id_emp = emp.id_emp) and (order_.id_order = $number)"; 
$result = mysqli_query($con, $query); 

echo '<br>'; 
echo '<div class="fakeimg" id="fakeimg">';
if($result->num_rows >0) {
echo '<center><h3>รหัสใบเสร็จ '.$number.'</h3></center>';
echo '<table class="info">';
echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคาต่อชิ้น</th><th>ราคาขายทั้งหมดต่อสินค้านี้</th><th>จำนวน</th><th>วันที่</th><th>พนักงานอออกใบเสร็จ</th></tr>";
echo '<tr>';
echo '</tr>';
$sum =0;
while($row = mysqli_fetch_array($result)) { 
    echo "<tr>";
    echo "<td>" .$row["id_product"] .  "</td> "; 
    echo "<td>" .$row["nameProduct"] .  "</td> ";  
	  echo "<td>" .$row["selling_price"] .  "</td> ";  
    echo "<td>" .$row["PRICE"] .  "</td> ";
    echo "<td>" .$row["quantity"] .  "</td> ";
    echo "<td>" .$row["date"] .  "</td> ";
    echo "<td>" .$row["empName"] .  "</td> ";
    $sum += $row["PRICE"];
  }
echo '<tr><th colspan="4"><center>จำนวนเงินทั้งหมดที่ได้รับ</th> <td colspan="3">'.$sum.'</center></td></tr>';
echo '</table>';
}
else {
  echo '<center><div><h3>ไม่เจอผลลัพท์ที่ค้นหา</h3></div></center>';
}
echo '</div>';
mysqli_close($con);
?>
