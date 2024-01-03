<form action="index.php?page=kategori-add" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="10%">Nama</td>
            <td><input class="form" type="text" name="nama"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn" type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>

<?php
if(isset($_POST['submit'])) 
{
	$nama    	= $_POST['nama'];

	$reset   = "alter table kategori AUTO_INCREMENT = 1";
	$query   = mysqli_query($con,$reset);

	$result = mysqli_query($con, "INSERT INTO kategori (nama_kategori) VALUES ('$nama')");

	header("Location: index.php?page=kategori");
}
?>