<?php

@include './Conndb.php';

if (isset($_POST['order_btn'])) {

  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $method = $_POST['method'];
  $flat = $_POST['flat'];
  $street = $_POST['street'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $pin_code = $_POST['pin_code'];

  $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
  $price_total = 0;
  if (mysqli_num_rows($cart_query) > 0) {
    while ($product_item = mysqli_fetch_assoc($cart_query)) {
      $product_name[] = $product_item['name'] . ' (' . $product_item['quantity'] . ') ';
      $product_price = number_format($product_item['price'] * $product_item['quantity']);
      $price_total += $product_price;
    };
  };

  $total_product = implode(', ', $product_name);
  $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, province, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

  if ($cart_query && $detail_query) {
    echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>" . $total_product . "</span>
            <span class='total'> total : $" . $price_total . "/-  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>" . $name . "</span> </p>
            <p> your number : <span>" . $number . "</span> </p>
            <p> your email : <span>" . $email . "</span> </p>
            <p> your address : <span>" . $flat . ", " . $street . ", " . $city . ", " . $state . ", " . $country . " - " . $pin_code . "</span> </p>
            <p> your payment mode : <span>" . $method . "</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./products.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title><?= "Cart | Brilliant Books" ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">
      <img class="d-inline-block align-text-top" src="./../images//images//logo//BRILLIANT.png" width="120" height="90">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0r justify-content-center">
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link active" aria-current="page" href="./../index.php">Home</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="./pages//category.php">Category</a>
          </li>
          <li class="nav-item d-flex align">
            <a class="nav-link" href="./pages//about//aboutUs.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages//cart.php">Cart</a>
          </li>
        </ul>
        <button id="signUpButton" class="bg-dark rounded-5 p-2 text-white">
          <a href="pages/authentication/registration.php">
            Sign up
          </a>
        </button>
        <button id="signUpButton" class="bg-dark rounded-5 p-2 text-white">
          <a href="pages/authentication/login.php">
            Sign in
          </a>
        </button>
      </div>
    </div>
  </nav>
  <div class="container">

    <section class="checkout-form">

      <h1 class="heading">complete your order</h1>

      <form action="" method="post">

        <div class="display-order">
          <?php
          $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
          $total = 0;
          $grand_total = 0;
          if (mysqli_num_rows($select_cart) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
              $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
              $grand_total = $total += $total_price;
          ?>
              <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
          <?php
            }
          } else {
            echo "<div class='display-order'><span>your cart is empty!</span></div>";
          }
          ?>
          <span class="grand-total"> grand total : $<?= $grand_total; ?>/- </span>
        </div>

        <div class="flex">
          <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
          </div>
          <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" required>
          </div>
          <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
          </div>
          <div class="inputBox">
            <span>payment method</span>
            <select name="method">
              <option value="cash on delivery" selected>cash on devlivery</option>
              <option value="credit cart">credit cart</option>
              <option value="paypal">paypal</option>
            </select>
          </div>
          <div class="inputBox">
            <span>address line 1</span>
            <input type="text" placeholder="e.g. flat no." name="flat" required>
          </div>
          <div class="inputBox">
            <span>address line 2</span>
            <input type="text" placeholder="e.g. street name" name="street" required>
          </div>
          <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. mumbai" name="city" required>
          </div>
          <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. maharashtra" name="state" required>
          </div>
          <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. india" name="country" required>
          </div>
          <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
          </div>
        </div>
        <input type="submit" value="order now" name="order_btn" class="btn">
      </form>

    </section>

  </div>
  <footer class="bg-dark d-flex w-100">
    <div class="w-20">
      <img src="./images//images//logo//Brilliant_white.png" alt="" class="w-100">
    </div>
    <div class="w-20">
      <p>Brilliant Books</p>
      <ul class="">
        <li><a href="" class="link-underline link-underline-opacity-0 text-white">Home</a></li>
        <li><a href="" class="link-underline link-underline-opacity-0 text-white">Category</a></li>
        <li><a href="" class="link-underline link-underline-opacity-0 text-white">About us</a></li>
        <li><a href="" class="link-underline link-underline-opacity-0 text-white">Cart</a></li>
      </ul>
    </div>
    <div class="w-20">
      <p>Careers</p>
      <ul class="">
        <li><a href="./pages//authentication//administratorLogin.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
        <li><a href="./pages//adminDashboard.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
        <li><a href="./pages//careers//careers.php" class="link-underline link-underline-opacity-0 text-white">Get a job</a></li>
      </ul>
    </div>
    <div class="w-20">
      <p></p>
    </div>
    <div class="w-20"></div>
  </footer>
  <script src="./scripts//animations//slideshow_animations.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/animations/lottie_animations.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>