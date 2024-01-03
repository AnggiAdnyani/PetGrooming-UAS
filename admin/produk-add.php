<h1>Edit Produk</h1>

<hr>

<form action="index.php?page=produk-add" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td width="10%">Nama</td>
            <td><input class="form" type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>
                <select type="text" name="kategori">
                    <?php
                    $que = "SELECT * FROM kategori";
                    $select = mysqli_query($con, $que);

                    while ($data = mysqli_fetch_array($select)) {

                        ?>
                        <option value="<?php echo $data['id_kategori']; ?>">
                            <?php echo $data['nama_kategori']; ?>
                        </option>

                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input class="form" type="number" name="stok"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input class="form" type="number" name="harga"></td>
        </tr>
        <tr>
            <td>Gambar</td>
            <td><input class="form" type="file" name="gambar"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn" type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $uploadDir = "../img/";
    $gambarPath = $uploadDir . basename($_FILES["gambar"]["name"]);
    move_uploaded_file($_FILES["gambar"]["tmp_name"], $gambarPath);

    $gambar = $_FILES["gambar"]["name"];

    $reset = "alter table produk AUTO_INCREMENT = 1";
    $query = mysqli_query($con, $reset);

    $result = mysqli_query($con, "INSERT INTO produk (nama_produk,id_kategori,harga,gambar,stok) VALUES ('$nama','$kategori','$harga','$gambar','$stok')");

    header("Location: index.php?page=produk");
}
?>