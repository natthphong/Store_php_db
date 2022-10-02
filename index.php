<!DOCTYPE html>
<html lang="en">

<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

        html,
        body {
            margin: 0;
            height: 100%;
            background-color: #f1f1f1;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            padding: 15px;
            text-align: center;
            margin-inline: 10px;
            background-color: #f1f1f3;
            width: 250px;
            height: 250px;
            border-color: #2d2d2d;
            border-style: solid;
            display: grid;
            grid-auto-flow: row;
            align-content: center;
            justify-content: center;
            border-radius: 30px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .column:hover {
            cursor: pointer;
            background-color: white;
        }

        h1 {
            padding-top: 70px;
            margin: 0;
            font-size: 80px;
            color: #f1f1f1;
            font-family: 'Bebas Neue', cursive;
            font-weight: 50;
        }

        h2 {
            font-family: 'Bebas Neue', cursive;
            font-size: 50px;
            font-weight: 50;
            margin: 5px;
        }

        .row0 {
            text-align: center;
            height: 15%;
            background-color: #2d2d2d;
        }

        .row1 {
            justify-content: center;
            align-content: center;
            grid-auto-flow: column;
            display: grid;
            gap: 8px;
            margin-bottom: 5px;
            height: 85%;
            background-color: #2d2d2d;
            padding: 5px;
        }

        .row2 {
            justify-content: center;
            align-content: flex-start;
            grid-auto-flow: column;
            display: grid;
            gap: 8px;
            margin-bottom: 5px;
            height: 45%;
            background-color: #2d2d2d;
            padding: 5px;
        }
    </style>
</head>

<body>

    <div class="row0">
        <h1>
            Store management
        </h1>
    </div>
    <div class="row1">

        <div class="column" onclick="location.href='product.php';">
            <h2>PRODUCT</h2>
            <img src="res/stock.png" width="130" height="130">
        </div>
        <div class="column" onclick="location.href='order.php';">
            <h2>ORDER</h2>
            <img src="res/order.png" width="120" height="135">
        </div>
        <div class="column" onclick="location.href='report.php';">
            <h2>REPORT</h2>
            <img src="res/report.png" width="135" height="135">
        </div>
    </div>

    <div class="row2" style="display: none;">
        <div class="column" onclick="location.href='order.php';">
            <h2>ORDER</h2>
            <img src="res/order.png" width="120" height="130">
        </div>

        <div class="column" onclick="location.href='report.php';">
            <h2>REPORT</h2>
            <img src="/res/report.png" width="120" height="130">
        </div>
    </div>


</body>

</html>