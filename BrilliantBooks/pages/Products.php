<?php
$conn = mysqli_connect('localhost', 'root');
mysqli_select_db($conn, 'BrilliantBookstore');
$sql = "SELECT * FROM tblbooks";
$featured = $conn->query($sql);
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
  <title><?= "Home | Brilliant Books" ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">
      <img class="d-inline-block align-text-top" src="./images//images//logo//BRILLIANT.png" width="120" height="90">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0r justify-content-center">
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
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
    <section class="products">
      <h1 class="heading">Latest products</h1>
      <div class="box-container">
        <?php
        while ($product = mysqli_fetch_assoc($featured)) :
        ?>
          <form action="" method="post">
            <div class="box">
              <img src="<?= $product['image'] ?>" alt="" srcset="">
              <h3><?= $product['book_name'] ?></h3>
              <div class="price">R<?= $product['book_price']; ?></div>
              <input type="hidden" name="product_name" value="<?php echo $product['book_name']; ?>">
              <input type="hidden" name="product_price" value="<?php echo $product['book_price']; ?>">
              <input type="hidden" name="product_image" value="<?php echo $product['image']; ?>">
              <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>
          </form>
        <?php endwhile; ?>
      </div>
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