<?php

if (isset($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $result = mysqli_query($con, "SELECT * FROM kategori WHERE id_kategori=$id");

    while ($data = mysqli_fetch_array($result)) {
        $nama = $data['nama_kategori'];
        $id = $data['id_kategori'];
    }

    ?>

    <h1>Edit Kategori</h1>

    <hr>

    <form action="index.php?page=kategori-edt" method="post" enctype="multipart/form-data">

        <table>
            <tr>
                <td width="10%">Nama</td>
                <td>
                    <input class="form" type="text" name="nama" value="<?php echo $nama; ?>">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn" type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>

<?php } ?>

<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    $result = mysqli_query($con, "UPDATE kategori SET nama_kategori='$nama' WHERE id_kategori=$id");

    header("Location: index.php?page=kategori");
}
?>