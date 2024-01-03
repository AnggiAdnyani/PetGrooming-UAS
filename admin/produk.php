<div class="title">
    <h1>Product</h1>
    <a href="index.php?page=produk-add"><button class="btn" type="button">add</button></a>
</div>
<table>
    <tr>
        <th width="5%">No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th width="12%">Aksi</th>
    </tr>

    <?php
    $que = "SELECT * FROM produk INNER JOIN kategori ON produk.id_kategori=kategori.id_kategori order by id_produk";
    $select = mysqli_query($con, $que);

    while ($data = mysqli_fetch_array($select)) {
        ?>
        <tr>
            <th>
                <?php echo $data['id_produk']; ?>
            </th>
            <td>
                <?php echo $data['nama_produk']; ?>
            </td>
            <td>
                <?php echo $data['nama_kategori']; ?>
            </td>
            <td>
                <?php echo $data['stok']; ?>
            </td>
            <td>
                <?php
                $uang = $data['harga'];
                $uang_format = number_format($uang, 0, ',', '.');
                echo "Rp. " . $uang_format;
                ?>
            </td>
            <td>
                <?php echo $data['gambar']; ?>
            </td>
            <td>
                <a href="index.php?page=produk-edt&id=<?php echo $data['id_produk']; ?>"><button class="btn"
                        type="button">edit</button></a>
                <a href="index.php?page=produk-del&id=<?php echo $data['id_produk']; ?>"><button class="btn"
                        type="button">delete</button></a>
            </td>
        </tr>
    <?php } ?>

</table>