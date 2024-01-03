<?php
session_start();

$_SESSION['status'] = "logout";
session_destroy();

// Alihkan pengguna ke halaman login atau halaman lain yang sesuai
header("location: index.php");
exit();
?>
