<?php
require 'config/connect_mysql.php';
// รับค่า id ที่จะแก้ไข

$id    = $_GET['id'];
$sql   = "DELETE FROM members WHERE id='$id'";
$query = mysqli_query($connect, $sql);

if ($query)
{
    echo "<div class='alert alert-success'>Delete members success</div>";
    echo "<meta http-equiv=\"refresh\"content=\"2;URL='read_member.php'\">";
}
else
{
    echo "<div class='alert alert-danger'>Delete members Fail!!</div>";
}
