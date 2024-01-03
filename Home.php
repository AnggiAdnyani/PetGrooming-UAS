<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PetGroomingUTS</title>
  <link rel="stylesheet" type="text/css" href="Home.css" />
</head>

<body>
  <section>
    <!-- Banner -->
    <div class="banner">
      <img src="img/Group of dog.png" alt="" />
      <div>
        <p class="text1">Welcome To Pet Grooming!</p>
        <p class="text2">
          Pet grooming is a daycare place where you can keep your pet with us
          for a few hours with a 100% safe guarantee! A place that
          offers the most awesome grooming services to pamper your pet! and we
          also sell pet needs like food, toys even health products that good
          for your pets! and of course with affordable prices
        </p>
      </div>
    </div>

    <!-- Card Service -->
    <p class="Title">Our Service</p>
    <div class="service-content">
      <?php
      $card_title1 = array("Full Grooming", "Wash and Brush Up", "Nail Clip", "Day Care");
      $img1 = array("full grooming.png", "wash.png", "nail clip.png", "day care.png");
      $price = array("100.000", "60.000", "25.000", "150.000");
      $desc = array("Full Grooming is a service where we will bath your pet, blow dry
                  them, brush-out, nail clipping, ear cleaning, and styling their fur
                  to make your pet to look more beautiful",
        "Wash and Brush Up is a service where we will bath your pet, blow dry
                  them, then we will also brush-out to remove tangles and help prevent
                  matting fur. Then they will look clean and adorable",
        "Nail Clip is a service where we will cut your pet nails that already
                  overgrown",
        "Daycare is where you can leave your pet with us for one day and let
                  them play with other pets to have fun and socialize. A daycare also
                  good to train your pets so tehy can adept with situation where there
                  will be alot of other pets so they wont act too aggresive"
      );

      $img_count = count($img1);
      for ($i = 0; $i < $img_count; $i++) {
        echo '
      <div class="card1">
        <p class="card-title">' . $card_title1[$i] . '</p>
        <img src="./img/' . $img1[$i] . '" alt="" srcset="" />
        <p class="Price">' . $price[$i] . '</p>
        <p class="desc">
          ' . $desc[$i] . '
        </p>
      </div>';
      }
      ?>
    </div>

    <!-- Card Product -->
    <p class="Title2">Our Best Selling Product</p>
    <div class="product-content">
      <?php
      $img2 = array("food.png", "snack.png", "toys.png", "health.png", "bath.png", "grooming.png", "acc.png", "act.png");
      $card_title2 = array("Food", "Snack", "Toys", "Health", "Wash", "Grooming", "Accessories", "Other");
      $img_count = count($img2);
      for ($i = 0; $i < $img_count; $i++) {
        echo '
      <div class="card2">
        <img src="./img/' . $img2[$i] . '" alt="" srcset="" />
        <p class="card2-title">' . $card_title2[$i] . '</p>
      </div>';
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
</body>

</html>