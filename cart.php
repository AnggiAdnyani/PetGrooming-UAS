<?php
$id_user = $_SESSION['id'];
?>
<div class="container-cart">
  <p>Checkout</p>
  <form method="post" action="process.php">
    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Item</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Date</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "sql.php";
          $que = "SELECT * FROM detailpesanan 
          JOIN pesanan ON pesanan.id_pesanan = detailpesanan.id_pesanan
          JOIN user ON user.id_user = pesanan.id_user 
          JOIN produk ON produk.id_produk = detailpesanan.id_produk 
          JOIN kategori ON kategori.id_kategori = produk.id_kategori
          where pesanan.id_user = $id_user
          order by pesanan.id_pesanan";

          $select = mysqli_query($con, $que);
          $dana = 0;
          $nomor = 0;

          while ($data = mysqli_fetch_array($select)) {
            $nomor = $nomor + 1;
            ?>
            <tr>
              <td>
                <?php echo $data['nama_produk']; ?>
              </td>
              <td>
                <?php echo $data['nama_kategori']; ?>
              </td>
              <td>
                <?php echo $data['jumlah']; ?>
              </td>
              <td>
                <?php echo $data['tanggal_pesanan']; ?>
              </td>
              <td>
                <?php
                $uang = $data['harga'];
                $uang_format = number_format($uang, 0, ',', '.');
                echo "Rp. " . $uang_format;
                ?>
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
                <a href="index.php?page=pesanan-del&id=<?php echo $data['id_pesanan']; ?>"><button type="button"
                    class="tbn">Delete</button></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php
      $dana_format = number_format($dana, 0, ',', '.');
      ?>

      <td>
        <b>Total Semua Pesanan Rp.
          <?php echo $dana_format; ?>
        </b>
      </td>
    </div>
  </form>
</div>