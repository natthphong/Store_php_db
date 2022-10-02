<div id="rowsearch" class="row1" style="display: none;">
    <form  id="search" action="#" method="post">
        <h3>
            <label for="number">ค้นหาสินค้า</label>
        </h3>
        <label for="number">ชื่อสินค้า/ประเภทสินค้า/รหัสสินค้า</label>
        <input type="text" name="nameProduct" id="namepro" style="width: 100%;height: 25px">
        <input type="submit" value="submit" name="SubmitButton">
    </form>
</div>

<div id="rowadd_delete" class="row1" style="display: none;">
    <form action="#" method="post">
        <table>
            <tr>
                <h3> <label for="number">เพิ่มสินค้า</label> </h3>
            </tr>
            <td><label for="number">รหัสสินค้า:</label></td>
            <td><input type="text" name="IdProduct" id="IdProduct"></td>
            <tr>
                <td> <label for="number">ชื่อสินค้า:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td> <label for="number">ราคาขายสินค้า:</label></td>
                <td> <input type="text" name="sell" id="sell"></td>
            </tr>
            <tr>
                <td> <label for="number">ราคาต้นทุนสินค้า:</label></td>
                <td> <input type="text" name="cost" id="cost"></td>

            </tr>
            <tr>
                <td> <label for="number">จำนวนสินค้า:</label></td>
                <td> <input type="text" name="qu" id="qu"></td>
            </tr>
            <tr>
                <td> <label for="number">ประเภทสินค้า:</label></td>
                <td>
                    <input type="radio" name="type" value="D001">เครื่องดื่ม
                    <input type="radio" name="type" value="D002">อาหาร
                    <input type="radio" name="type" value="D003">อื่นๆ
                </td>
            </tr>
        </table>
        <input type="submit" value="submit" name="SubmitButton1" onclick="return confirm('ยืนยันการเพิ่มข้อมูลสินค้า')">
    </form>

    <form action="#" method="post">
        <h3>
            <label for="number">ลบสินค้า</label>
        </h3>
        <label for="number">รหัสสินค้า:</label>
        <input type="text" name="IdProduct" id="IdProduct">
        <p>
            <input type="submit" value="submit" name="SubmitButton2" onclick="return confirm('ยืนยันการลบข้อมูลสินค้า')">
        </p>
    </form>
</div>

<div id="rowupdate" class="row1" style="display: none;">
    <form action="#" method="post">
        <h3>
            <label for="number">ค้นหาสินค้าเพื่อแก้ไข</label>
        </h3>
        <label for="number">รหัสสินค้า</label>
        <input type="text" name="IdProduct" id="IdProduct" style="width: 100%;height: 25px">
        <input type="submit" value="submit" name="SubmitButton3">
    </form>
</div>



<style>
    select {
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>