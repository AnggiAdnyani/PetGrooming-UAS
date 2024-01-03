<div class="title">
    <h1>Pesanan</h1>
</div>
<table>
    <tr>
        <th width="5%">No</th>
        <th>Customer</th>
        <th>Produk</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Tanggal</th>
        <th width="12%">Aksi</th>
    </tr>
    <?php
    include "../sql.php";
    $que = "SELECT * FROM detailpesanan 
        JOIN pesanan ON pesanan.id_pesanan = detailpesanan.id_pesanan
        JOIN user ON user.id_user = pesanan.id_user 
        JOIN produk ON produk.id_produk = detailpesanan.id_produk 
        JOIN kategori ON kategori.id_kategori = produk.id_kategori
        order by pesanan.id_pesanan";

    $select = mysqli_query($con, $que);
    $dana = 0;
    $nomor = 0;

    while ($data = mysqli_fetch_array($select)) {
        $nomor = $nomor + 1;
        ?>

        <tr>
            <th scope="row">
                <?php echo $nomor; ?>
            </th>
            <td>
                <?php echo $data['username']; ?>
            </td>
            <td>
                <?php echo $data['nama_produk']; ?>
            </td>
            <td>
                <?php echo $data['nama_kategori']; ?>
            </td>
            <td>
                <?php
                $uang = $data['harga'];
                $uang_format = number_format($uang, 0, ',', '.');
                echo "Rp. " . $uang_format;
                ?>
            </td>
            <td>
                <?php echo $data['jumlah']; ?>
            </td>
            <td>
                <?php
                $total = $data['jumlah'] * $data['harga'];
                $total_format = number_format($total, 0, ',', '.');
                echo "Rp. " . $total_format;
                $dana = $dana + $total;
                ?>
            </td>
            <td>
                <?php echo $data['tanggal_pesanan']; ?>
            </td>
            <td>
                <a href="index.php?page=pesanan-del&id=<?php echo $data['id_pesanan']; ?>"><button class="btn"
                        type="button">delete</button></a>
            </td>
        </tr>
    <?php } ?>

</table>