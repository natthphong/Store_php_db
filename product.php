<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCT</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/showrowfs.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar">
        <a href="index.php">HOME</a>
        <a href="product.php" style="background-color:#3CB371">PRODUCT</a>
        <a href="order.php">ORDER</a>
        <a href="report.php">REPORT</a>
        <a href="" onclick="window.location.reload();" class="right"><i class="fa fa-refresh fa-spin" style="font-size:18.5px;color:white;padding:0px;margin:0px"></i></a>
    </div>

    <div class="row1">
        <h2>PRODUCT</h2>
    </div>

    <div class="row1">
        <div class="column" onclick="search()">
            <img src="res/serach.png" width="100" height="100">
            <p>ค้นหา</p>
        </div>

        <div class="column" onclick="add_delete()">
            <img src="res/add.png" width="100" height="100">
            <p>เพิ่มหรือลบ</p>
        </div>

        <div class="column" onclick="update()">
            <img src="res/fix.png" width="100" height="100">
            <p>แก้ไข</p>
        </div>

        <div class="column" onclick="plus()">
            <img src="res/fix.png" width="100" height="100">
            <p>เพิ่มของในสต๊อก</p>
        </div>
    </div>
    <?php include 'form/product_form.php';

    if (isset($_POST['SubmitButton'])) {
        include './query/searchproduct_.php';
    }
    else if (isset($_POST['SubmitButton1'])) {
        include './query/insertproduct_.php';
        echo '<script language="javascript">alert("'.$check.'");</script>';
    }
    else if (isset($_POST['SubmitButton2'])) {
        include './query/deleteproduct_.php';
        echo '<script language="javascript">alert("'.$check.'");</script>';
    }
    else if (isset($_POST['SubmitButton3'])) {
        include './query/editproduct_.php';
    }
    else if (isset($_POST['EditButton'])) {
        include './query/updateproduct.php';
        echo '<script language="javascript">alert("'.$check.'");</script>';
    }
    
    ?>


    <footer>
        <p>Store management</p>
    </footer>
</body>

</html>