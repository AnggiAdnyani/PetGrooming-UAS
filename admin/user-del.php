<?php
	$id = $_GET['id'];
	$result = mysqli_query($con, "DELETE FROM user WHERE id_user=$id");
	header("Location:index.php?page=user");
?>