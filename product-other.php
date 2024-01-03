<div class="product-banner">
  <p class="title-product">Dog and Cat</p>
  <p>Other</p>
</div>

<div class="product-container">
  <?php
  $que = "SELECT * FROM produk WHERE id_kategori=8 order by id_produk";
  $select = mysqli_query($con, $que);

  while ($data = mysqli_fetch_array($select)) {
    ?>
    <form action="index.php?page=pesanan-add" method="post">
      <div class="card3">
        <p class="card3-title">
          <?php echo $data['nama_produk'] ?>
        </p>
        <img src="./img/<?php echo $data['gambar'] ?>" alt="<?php echo $data['gambar'] ?>" />
        <p class="price">
          <?php
          $uang = $data['harga'];
          $uang_format = number_format($uang, 0, ',', '.');
          echo "Rp. " . $uang_format;
          ?>
        </p>
        <div class="quantity-add">
          <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
          <input type="hidden" name="tanggal" value="<?php echo date('Y-m-d'); ?>">
          <input type="hidden" name="stok" value="<?php echo $data['stok']; ?>">
          <button type="button" onclick="decreaseQuantity(this)">-</button>
          <label for="quantity"></label>
          <input type="text" class="quantity-input" name="quantity" data-stok="<?php echo $data['stok']; ?>" />
          <button type="button" onclick="increaseQuantity(this)">+</button>
        </div>
        <button class="cart" type="submit" name="submit">Add to Cart</button>
      </div>
    </form>
  <?php }
  ?>
</div>