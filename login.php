<?php
session_start();
include "sql.php";

// Lakukan proses autentikasi di sini
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$hashedpassword = ''; // Inisialisasi variabel hashedpassword

	// Melakukan kueri untuk mencari pengguna dengan username yang sesuai
	$query = "SELECT * FROM user WHERE username='$username'";
	$result = mysqli_query($con, $query);

	$cek = mysqli_num_rows($result);

	if ($cek > 0) {
		while ($data = mysqli_fetch_array($result)) {
			$role = $data['role'];
			$id_user = $data['id_user'];

			if ($role == "Admin") {
				if ($password == $data['password']) {
					$_SESSION['username'] = $username;
					$_SESSION['status'] = "login";
					$_SESSION['role'] = "admin";
					$_SESSION['id'] = $id_user;
					header("location:admin/index.php");
				} else {
					header("location:index.php?error=admin");
				}
			} elseif ($role == "Customer") {
				$key = "primakara";
				$hashedpassword = hash_hmac("sha256", $password, $key);

				if ($hashedpassword == $data['password']) {
					$_SESSION['username'] = $username;
					$_SESSION['status'] = "login";
					$_SESSION['role'] = "customer";
					$_SESSION['id'] = $id_user;
					header("location:index.php?page=home");
				} else {
					header("location:index.php?error=customer");
				}
			}
		}
	} else {
		$_SESSION['status'] = "logout";
		session_destroy();
		header("location:index.php?error=user_not_found");
	}

	mysqli_close($con);
} else {
	header("location:index.php");
}

?>