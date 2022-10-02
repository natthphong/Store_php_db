<?php
require('connect.php');
$con = initDB();
$m = $_POST["m"];
$y = $_POST["y"];
$sql = "select  order_.orderdate as 'date',sum(order_detail.quantity *cost_price) as 'cost',sum(order_detail.quantity * selling_price) as 'selling',sum(order_detail.quantity * selling_price)-sum(order_detail.quantity *cost_price) as 'Profit' from order_,order_detail,stock,product where (order_.id_order =order_detail.id_order)
and (order_detail.id_product =product.id_product) and (product.id_product = stock.id_product)  and(date_format(order_.orderdate,'%m') = $m) and(date_format(order_.orderdate,'%Y') = $y)";
echo '<br>';
echo '<table class="info">';
echo "<tr><th>เดือน</th><th>ราคาต้นทุน</th><th>ราคาขาย</th><th>กำไร</th></tr>";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
  echo "<tr>";
  echo "<td>" . $row["date"]. "</td> ";
  echo "<td>" . $row["cost"] .  "</td> ";
  echo "<td>" . $row["selling"] .  "</td> ";
  echo "<td>" . $row["Profit"] .  "</td> ";
  echo "</tr>";
echo "</table>";

mysqli_close($con);
