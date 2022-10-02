<?php 
require('connect.php'); 
$con = initDB();
$id = $_POST["nameProduct"];
$query = "select product.id_product ,nameProduct,cost_price as 'cost',selling_price as 'selling',stock.quantity,product.id_type from stock,product where (product.id_product = stock.id_product)
and ((product.id_product like '%$id%') or (product.id_type like '%$id%')or (product.nameProduct like '%$id%'))";
$result = mysqli_query($con, $query);
echo '<br>'; 
echo '<div class="fakeimg" id="fakeimg">';
if($result->num_rows >0) {
echo '<table class="info">';
echo "<tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>ราคาต้นทุน</th><th>ราคาขาย</th><th>จำนวน</th><th>รหัสประเภท</th></tr>";
echo '<tr>';
echo '</tr>';
while($row = mysqli_fetch_array($result)) { 
    echo "<tr>";
    echo "<td>" .$row["id_product"] .  "</td> "; 
    echo "<td>" .$row["nameProduct"] .  "</td> ";  
    echo "<td>" .$row["cost"] .  "</td> ";
    echo "<td>" .$row["selling"] .  "</td> ";
    echo "<td>" .$row["quantity"] .  "</td> ";
    echo "<td>" .$row["id_type"] .  "</td> ";
  }
echo '</table>';
}
else {
  echo '<center><div><h3>ไม่เจอผลลัพท์ที่ค้นหา</h3></div></center>';
}
echo '</div>';
mysqli_close($con);
?>
