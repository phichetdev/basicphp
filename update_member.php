<?php
require 'config/connect_mysql.php';
// รับค่า id ที่จะแก้ไข

$id  = $_GET['id'];
$msg = "";
// ตรวจสอบการ submit form

if (!empty($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $email    = $_POST['email'];
    $tel      = $_POST['tel'];
    $password = $_POST['password'];
    $status   = $_POST['status'];

    $sql = "UPDATE members
            SET fullname = '$fullname',
                email = '$email',
                tel ='$tel',
                password ='$password',
                status ='$status'
                WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);

    if ($query)
    {
        $msg = "<div class='alert alert-success'>Edit members success</div>";
        echo "<meta http-equiv=\"refresh\"content=\"2;URL='read_member.php'\">";
    }
    else
    {
        $msg = "<div class='alert alert-danger'>Edit members Fail!!</div>";
    }

// ดึงข้อมูล member ตามหมายเลข id ที่ได้มา
}
$sql_select   = "SELECT*FROM members WHERE id ='$id'";
$query_select = mysqli_query($connect, $sql_select); // read data in table
$data         = mysqli_fetch_assoc($query_select);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="jumbotron bg-info text-light">
        <h1 class="display-4 text-center ">Edit member</h1>
    </div>

    <div class="container">
    <?php echo $msg; ?>
        <form method = "POST" action ="update_member.php?id=<?php echo $_GET['id']; ?>">
            <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">Fullname</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder=""required value="<?php echo $data["fullname"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder=""required value="<?php echo $data["email"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder=""required value="<?php echo $data["password"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tel" class="col-sm-3 col-form-label">Tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder=""required value="<?php echo $data["tel"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="status" id="status" placeholder=""required value="<?php echo $data["status"]; ?>">
                </div>
            </div>


            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" value="submit"class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>



    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
