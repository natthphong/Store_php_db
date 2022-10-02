<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORT</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/showrowfs.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="navbar">
        <a href="index.php">HOME</a>
        <a href="product.php">PRODUCT</a>
        <a href="order.php">ORDER</a>
        <a href="report.php" style="background-color:#3CB371">REPORT</a>
        <a href="" onclick="window.location.reload();" class="right"><i class="fa fa-refresh fa-spin" style="font-size:18.5px;color:white;padding:0px;margin:0px"></i></a>
    </div>

    <div class="row1" >
        <h2>REPORT</h2>
    </div>

    <div class="row1">
        <div class="column" onclick="search()">
            <img src="res/report.png" width="100" height="100">
            <p>คำนวณกำไรแบบกำหนดเอง</p>
        </div>

        <div class="column" onclick="update()">
            <img src="res/report.png" width="100" height="100">
            <p>คำนวณกำไรรายเดือน</p>
        </div>
    </div>

    <?php include 'form/report_form.php';

    if (isset($_POST['SubmitButton'])) {
        include './query/report_day.php';
    }
    if (isset($_POST['SubmitButton1'])) {
        include './query/report_month.php';
    }
    ?>

    <footer>
        <p>Store management</p>
    </footer>
</body>

</html>