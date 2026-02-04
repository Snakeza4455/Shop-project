<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
  die('ไม่อนุญาตให้เข้าหน้านี้โดยตรง');
}

//1.รับค่าจากฟอร์ม
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$birthdate = $_POST['birthdate'];

if (!$username || !$email || !$password || !$birthdate){
    die('กรุณากรอกข้อมูลให้ครบ');
}

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$check = $conn->prepare("SELECT id FROM user WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$check->store_result();

if ($check->num_rows > 0){
    die("Username นี้ถูกใช้งานแล้ว");
}

$sql = "INSERT INTO user (username, email, password, birthdate) VALUES (?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $username, $email, $hashedPassword, $birthdate);

if ($stmt->execute()){
    header("Location: index.php?register=success");
    exit;
} else {
    echo "เกิดข้อผิดพลาด";
}   
?>