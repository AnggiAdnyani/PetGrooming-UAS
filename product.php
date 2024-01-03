<head>
  <link rel="stylesheet" href="./styles.css">
</head>

<body>
  <!-- NavBar -->
  <nav>
    <a href="index.php?page=home" class="logo">Pet Grooming</a>
    <ul>
      <li><a href="index.php?page=home" class="menu">Home</a></li>
      <li><a href="index.php?page=product" class="menu">Product</a></li>
      <li><a href="index.php?page=cart" class="menu">Cart</a></li>
      <li><a href="logout.php?page=logout" class="menu">logout</a></li>
    </ul>
  </nav>

  <section>
    <div class="kategori-nav">
      <li><a href="product.php?page=product-food" class="menu2">Food</a></li>
      <li><a href="product.php?page=product-snack" class="menu2">Snack</a></li>
      <li><a href="product.php?page=product-toys" class="menu2">Toys</a></li>
      <li><a href="product.php?page=product-health" class="menu2">Health</a></li>
      <li><a href="product.php?page=product-wash" class="menu2">Wash</a></li>
      <li><a href="product.php?page=product-grooming" class="menu2">Grooming</a></li>
      <li><a href="product.php?page=product-accessories" class="menu2">Accessories</a></li>
      <li><a href="product.php?page=product-other" class="menu2">Other</a></li>
    </div>

    <div>
      <?php
      include "./sql.php";
      $halaman = isset($_GET['page']) ? $_GET['page'] : 'product-food';

      switch ($halaman) {
        case 'product-snack':
          include('product-snack.php');
          break;
        case 'product-toys':
          include('product-toys.php');
          break;
        case 'product-health':
          include('product-health.php');
          break;
        case 'product-wash':
          include('product-wash.php');
          break;
        case 'product-grooming':
          include('product-grooming.php');
          break;
        case 'product-accessories':
          include('product-accessories.php');
          break;
        case 'product-other':
          include('product-other.php');
          break;
        default:
          include('product-food.php');
          break;
      }
      ?>
    </div>

    <!-- Footer -->
    <footer>
      <a href="./Home.php" class="logo1">Pet Grooming</a>
      <li><a href="#" class="menu1">Whatsapp</a></li>
      <li><a href="#" class="menu1">Telegram</a></li>
      <li><a href="#" class="menu1">Discord</a></li>
      <li><a href="#" class="menu1">Gmail</a></li>
    </footer>
  </section>

  <script>
    function increaseQuantity(buttonElement) {
      var quantityInput = buttonElement.previousElementSibling;
      var currentValue = parseInt(quantityInput.value);
      var maxStock = parseInt(quantityInput.getAttribute("data-stok"));

      if (!isNaN(currentValue) && currentValue < maxStock) {
        quantityInput.value = currentValue + 1;
      } else if (isNaN(currentValue)) {
        quantityInput.value = 1;
      }
    }

    function decreaseQuantity(buttonElement) {
      var quantityInput = buttonElement.nextElementSibling;
      var currentValue = parseInt(quantityInput.value);

      if (!isNaN(currentValue) && currentValue > 1) {
        quantityInput.value = currentValue - 1;
      } else {
        quantityInput.value = 1;
      }
    }
  </script>
</body>

</html>