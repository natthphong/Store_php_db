<?php
require('connect.php');
$con = initDB();
$first = $_POST["start"];
$last = $_POST["end"];
$sql = "select  order_.orderdate as 'date',sum(order_detail.quantity *cost_price) as 'cost',sum(order_detail.quantity * selling_price) as 'selling',sum(order_detail.quantity * selling_price)-sum(order_detail.quantity *cost_price) as 'Profit' from order_,order_detail,stock,product where (order_.id_order =order_detail.id_order)
and (order_detail.id_product =product.id_product) and (product.id_product = stock.id_product)  and(order_.orderdate between'$first' and '$last')";
$result = mysqli_query($con, $sql);
echo '<br>';
echo '<table class="info">';
echo "<tr><th>วันที่เรื่มต้น</th><th>ถึงวันที่</th><th>ราคาต้นทุน</th><th>ราคาขาย</th><th>กำไร</th></tr>";


while ($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<tr>";
  echo "<td>" . $first . "</td> ";
  echo "<td>" . $last . "</td> ";
  echo "<td>" . $row["cost"] .  "</td> ";
  echo "<td>" . $row["selling"] .  "</td> ";
  echo "<td>" . $row["Profit"] .  "</td> ";
}
echo "</table>";
mysqli_close($con);
