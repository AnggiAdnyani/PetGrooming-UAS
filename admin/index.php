<?php
session_start();
if($_SESSION['role'] != "admin")
{
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Store</title>
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <section>
    <!-- NavBar -->
    <nav>
      <a href="index.php" class="logo">Pet Grooming</a>
      <div class="search-bar">
        <input type="text" placeholder="Search...">
      </div>
      <div class="profile">
        <img src="../img/User.png" alt="user">
        <div class="user" ><?php echo $_SESSION['username'] ?></div>
      </div>
    </nav>

    <!-- content -->
    <div class="side-menu">
      <a class="menu-item" href="index.php?page=user">All user</a>
      <a class="menu-item" href="index.php?page=produk">Produk</a>
      <a class="menu-item" href="index.php?page=pesanan">Pesanan</a>
      <a class="menu-item" href="index.php?page=kategori">Kategori</a>
      <a class="menu-item" href="../logout.php?page=logout">Logout</a>
    </div>

    <div class="main-content">
      <?php
      include "../sql.php";
      $halaman = isset($_GET['page']) ? $_GET['page'] : 'user';

      switch ($halaman) {
        case 'user':
          include('user.php');
          break;
        case 'user-del':
          include('user-del.php');
          break;
        case 'pesanan':
          include('pesanan.php');
          break;
        case 'pesanan-del':
          include('pesanan-del.php');
          break;
        case 'produk':
          include('produk.php');
          break;
        case 'produk-add':
          include('produk-add.php');
          break;
        case 'produk-edt':
          include('produk-edt.php');
          break;
        case 'produk-del':
          include('produk-del.php');
          break;
        case 'kategori-add':
          include('kategori-add.php');
          break;
        case 'kategori-edt':
          include('kategori-edt.php');
          break;
        case 'kategori-del':
          include('kategori-del.php');
          break;
        default:
          include('kategori.php');
          break;
      }
      ?>
    </div>

    <!-- Footer -->
    <footer>
      <a href="index.php" class="logo1">Pet Grooming</a>
    </footer>
  </section>
</body>