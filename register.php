<?php
session_start();
include "sql.php";

$notification = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $role = "Customer";

  $key = "primakara";
  $hashedpassword = hash_hmac("sha256", $password, $key);

  $notification = "Registrasi berhasil!";
  $reset = "alter table user AUTO_INCREMENT = 1";
  $query = mysqli_query($con, $reset);
  $result = mysqli_query($con, "INSERT INTO user (email,  username, role, password) VALUES ('$email','$username','$role','$hashedpassword')");

  if (!$result) {
    $notification = "Gagal melakukan registrasi.";
  }

}
header("Location: index.php?notification=" . urlencode($notification));
exit(); // Pastikan untuk keluar setelah melakukan redirect
?>