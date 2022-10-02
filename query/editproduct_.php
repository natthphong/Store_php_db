<?php
require('connect.php');
$con = initDB();
$id = $_POST["IdProduct"];
$sql = "select product.id_product,nameProduct,cost_price as 'cost',selling_price as 'selling',stock.quantity,product.id_type from stock,product where 
    (product.id_product = stock.id_product) and (product.id_product = $id)";
$result = mysqli_query($con, $sql);
echo '<div class="row1" id="rowupdate2" style="margin-bottom: 100px">';
if ($result->num_rows > 0) {
    echo '<form method="post">';
    echo '<p>แก้ไขสินค้า</p>';
    echo '<table>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>รหัสสินค้า</th>';
        echo '<td><input type="text" name="IdProduct" value ="' . $row["id_product"] . '" required></td>';
        echo '<tr>';
        echo '<tr>';
        echo '<td>ชื่อสินค้า</th>';
        echo '<td><input type="text" name="name" value ="' . $row["nameProduct"] . '" required></td>';
        echo '<tr>';
        echo '<tr>';
        echo '<td>ราคาขายสินค้า</th>';
        echo '<td><input type="text" name="sell" value  ="' . $row["selling"] . '" required></td>';
        echo '<tr>';
        echo '<tr>';
        echo '<td>ต้นทุนสินค้า</th>';
        echo '<td><input type="text" name="cost" value  ="' . $row["cost"] . '" required></td>';
        echo '<tr>';
        echo '<tr>';
        echo '<td>จำนวนสินค้า</th>';
        echo '<td><input type="text" name="qu" value  ="' . $row["quantity"] . '" required></td>';
        echo '<tr>';
        echo '<tr>';
        echo '<td>ประเภท</th>';
        echo '<td><input type="text" name="type" value  ="' . $row["id_type"] . '" required></td>';
        echo '<tr>';
    }
    echo '</table>';
    echo '<input type="submit" value="submit" name="EditButton" onclick="return confirm('."'ยืนยันการแก้ไขข้อมูลสินค้า'".')">';
    echo '</form>';
}else{
    echo '<center><h3>ไม่เจอสินค้าที่ค้นหา</h></center>';
}
echo '</div>';

