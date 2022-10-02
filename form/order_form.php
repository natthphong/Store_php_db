<div id="rowsearch" class="row1" style="display: none;">
    <form id="search" action="#" method="post">
        <h3>
            <label for="number">ค้นหาใบเสร็จ</label>
        </h3>
        <label for="number">รหัสใบเสร็จ</label>
        <input type="text" name="id_order" id="namepro" style="width: 100%;height: 25px">
        <input type="submit" value="submit" name="SUBMIT" >
    </form>
</div>

<div id="rowadd_delete" class="row1" style="display: none;">
    <div style="display: flex;flex-direction: row;">
        <form action="#" method="post">
            <table>
                <tr>
                    <label for="number">เพิ่มใบเสร็จ</label>
                </tr>
                <td><label for="number">รหัสใบเสร็จ</label></td>
                <td><input type="text" name="id_order"></td>
                <tr>
                    <td> <label for="number">วันที่:</label></td>
                    <td><input type="date" name="date"></td>
                </tr>
            </table>
            <div id="dynamic_field">
                <div class="form-row">
                    <div class="col">
                        <tr>
                            <td> <label for="number">รหัสสินค้า</label></td>
                            <td><input type="text" class="form-control" name="id_product[]" style="width: 20%;"></td>
                            <td> <label for="number">จำนวน</label></td>
                            <td><input type="text" class="form-control" name="qu[]" style="width: 20%;"></td>
                            <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-plus">
                                    </i></button></td>
                        </tr>
                    </div>
                </div>
            </div>
            <input type="submit" value="submit" name="insertorder" onclick="return confirm('ยืนยันการเพิ่มข้อมูลใบเสร็จ')">
    </div>
    </form>


    <form id="search" action="#" method="post">
        <p>
            <label for="number">ลบใบเสร็จ</label>
        <p>
            <label for="number">รหัสใบเสร็จ:</label>
            <input type="text" name="id_order">
        <p>
            <input type="submit" value="submit" name="delete_order" onclick="return confirm('ยืนยันการลบข้อมูลใบเสร็จ')">
        </p>
    </form>
</div>

<div id="rowupdate" class="row1" style="display: none;">
    <form id="search" action="#" method="post">
        <label for="number">แก้ไขใบเสร็จ จากรหัสใบเสร็จ</label>
        <table>
            <td><label for="number">รหัสสินค้า:</label></td>
            <td><input type="text" name="IdProduct" id="IdProduct"></td>
            <tr>
                <td><label for="number">ชื่อสินค้า:</label></td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="number">ราคาขายสินค้า:</label></td>
                <td><input type="text" name="sell" id="sell"></td>
            </tr>
            <tr>
                <td><label for="number">ราคาต้นทุนสินค้า:</label></td>
                <td><input type="text" name="cost" id="cost"></td>

            </tr>
            <tr>
                <td><label for="number">จำนวนสินค้า:</label></td>
                <td><input type="text" name="qu" id="qu"></td>
            </tr>
        </table>
        <input type="submit" value="submit">
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<div class="form-row" id="row' + i + '"> <tr><td> <label for="number">รหัสสินค้า</label></td><td><input type="text" class="form-control" name="id_product[]" style="width: 20%;"></td><td> <label for="number">จำนวน</label></td><td><input type="text" class="form-control" name="qu[]" style="width: 20%;"></td><td><button type="button" name="add" class="btn btn-danger btn_remove" id="' + i + '"><i class="fa fa fa-trash"></i></button></td></tr></div>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
    });
</script>