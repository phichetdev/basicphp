<?php
$host   = "localhost";
$user   = "root";
$pass   = "i9343230";
$dbname = "phpbasicdb";

// เชื่อมฐานข้อมูล
$connect = mysqli_connect($host, $user, $pass, $dbname);
//เข้ารหัส utf8
mysqli_set_charset($connect, "utf8");
//ตรวจสอบสถานะการเชื่อมต่อ
if ($connect)
{
    // echo "connect database succcess";
}
else
{
    echo "connect database fail !!!";
}
