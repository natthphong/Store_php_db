<style>
    select {
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
</style>


<div id="rowsearch" class="row1" style="display: none;">
    <form id="search" action="#" method="post">
        <h3>
            <label for="number">เลือกวันที่</label>
        </h3>
        <table style="text-align: start;">
            <tr>
                <td> <label for="number">วันที่เริ่มต้นค้นหา</label></td>
                <td><input type="date" class="s" name="start"></td>
            </tr>
            <tr>
                <td><label for="number">วันที่สิ้นสุด</label></td>
                <td> <input type="date" class="s" name="end"></td>
            </tr>
        </table>
        <input type="submit" value="submit" name="SubmitButton">
    </form>
</div>



<div id="rowadd_delete" class="row1" style="display: none;">
    <form id="search" action="#" method="post">
        <table>
            <tr>
                <label for="number">เพิ่มสต็อก</label>
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
        </table>
        <input type="submit" value="submit">

    </form>
    <form id="search" action="#" method="post">
        <p>
            <label for="number">ลบสต็อก</label>
        <p>
            <label for="number">รหัสสินค้า:</label>
            <input type="text" name="IdProduct" id="IdProduct">
        <p>
            <input type="submit" value="submit">
        </p>
    </form>
</div>

<div id="rowupdate" class="row1" style="display: none;">
    <form action="#" method="post">
        <p>
            <label for="number">ค้นหากำไรรายเดือน</label>
        </p>
        <label for="number">เดือน:</label>
        <select name="m" id="namepro">
            <option>select</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo '<option name="m" id="namepro" values="'. $i .'">' ;
                echo  $i . '</option>';
            }
            ?>
        </select>
        <label for="number">ปี:</label>
        <select name="y" id="namepro">
            <option>select</option>
            <?php
            for ($i = 2022; $i <= 2050; $i++) {
                echo '<option name="y" id="namepro" values="'. $i .'">';
                echo  $i . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="submit" name="SubmitButton1">
    </form>
</div>