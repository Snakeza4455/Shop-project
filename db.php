<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "shop";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ");
}
?>