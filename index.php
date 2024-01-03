<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pet Grooming</title>
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
  <!-- NavBar -->
  <nav>
    <?php
    if (!isset($_SESSION['status'])) {
      ?>
      <a href="index.php" class="logo">Pet Grooming</a>
      <ul>
        <li><a href="index.php?page=login" class="menu">Login</a></li>
        <li><a href="index.php?page=register" class="menu">Register</a></li>
      </ul>
      <?php
    } else if ($_SESSION['status'] == "login") {
      $user = $_SESSION['username'];
      ?>
        <a href="index.php?page=home" class="logo">Pet Grooming</a>
        <ul>
          <li><a href="index.php?page=home" class="menu">Home</a></li>
          <li><a href="index.php?page=product" class="menu">Product</a></li>
          <li><a href="index.php?page=cart" class="menu">Cart</a></li>
          <li><a href="index.php?page=logout" class="menu">logout</a></li>
        </ul>
      <?php
    }
    ?>
  </nav>

  <?php
  //notifikasi register
  if (isset($_GET['notification'])) {
    $notification = urldecode($_GET['notification']);
    echo '<div id="notification" class="notification">' . $notification . '</div>';
  }
  ?>

  <div>
    <?php
    include "./sql.php";
    $halaman = isset($_GET['page']) ? $_GET['page'] : 'login';

    switch ($halaman) {
      case 'register':
        include('register-page.php');
        break;
      case 'home':
        include('Home.php');
        break;
      case 'product':
        include('product.php');
        break;
      case 'cart':
        include('cart.php');
        break;
      case 'logout':
        include('logout.php');
        break;
      case 'pesanan-add':
        include('pesanan-add.php');
        break;
      case 'pesanan-del':
        include('pesanan-del.php');
        break;
      default:
        include('login-page.php');
        break;
    }
    ?>
  </div>
  <script>
    setTimeout(function () {
      document.getElementById('notification').style.display = 'none';
    }, 2000);
  </script>
</body>

</html>