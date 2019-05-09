<?php

$change = 0;
// เช็คการ Submit form

if (!empty($_POST['submit']))
{

// รับค่่าจากฟอร์มด้วย PHP

    $price = $_POST["price"];
    $money = $_POST["money"];

// คำนวณเงินทอน
    $change = $money - $price;
//     echo $change;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>โปรแกรมคิดเงินทอน</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>


    <div class="jumbotron bg-danger text-light">
        <h1 class="display-5 text-center">โปรแกรมคิดเงินทอน</h1>

    </div>

    <div class="container">
        <form class="col-md-6 offset-md-3" method="POST" action="exercise_change.php">
            <div class="form-group row">
                <label for="price" class="col-sm-3 col-form-label">ราคาสินค้า</label>
                <div class="col-sm-9">
                    <input type="number" step = ".01" class="form-control" name="price" id="price" placeholder="" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="money" class="col-sm-3 col-form-label">จ่ายเงินมา</label>
                <div class="col-sm-9">
                    <input type="number" step = ".01" class="form-control" name="money" id="money" placeholder="" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputName" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" value="คำนวน" class="btn btn-primary">
                    <hr>
                    เงินทอน <?=$change;?> บาท.
                </div>
            </div>
        </form>



    </div>

    <script src="jquery/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</body>

</html>
