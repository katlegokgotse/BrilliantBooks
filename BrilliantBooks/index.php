<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, "BrilliantBookstore");
$sql = "SELECT * FROM tblbooks WHERE featured=1";
$featured = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles//styles.css">
  <link rel="stylesheet" href="./pages//products.css">
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
            <a class="nav-link" href="./pages//Products.php">Products</a>
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
  <article>
    <div class="container d-flex justify-content-center">
      <div class="userPrompt bg-dark text-white rounded-1 w-25 p-2 m-2 d-flex justify-content-center">
        Welcome, <?= "user" ?>!
      </div>
    </div>


    <div class="container d-flex justify-content-center p-2 m-auto align-items-center w-100">
      <div class="rightHandSide d-flex align-items-center w-50">
        <p class="fs-1 fw-bold text-break p-5">Find the BOOK you are looking for. Through our platform which allows you to buy, sell and trade books with fellow students</p>
      </div>
      <div class="leftHandSide w-50">
        <img class="w-100 rounded-5" src="./images//images//login//index_bg.png" alt="">
      </div>
  </article>
  <div class="d-flex justify-content-center w-100 p-5">
    <div class="search w-max">
      <form class=" w-max" action="index.php" method="get">
        <input type="text" name="bookSearch" class="bookSearch mw-auto" id="bookSearch" placeholder="Search for the book">
      </form>
    </div>
  </div>
  <div class="wrapper">
    <i class="fa-solid fa-angle-left" id="left"></i>
    <div class="carousel">
      <img class="object-fill-cover" src="./images//images//slideshow//dreams.png" alt="">
      <img class="object-fill-cover" src="./images//images//slideshow//design_fund.png" alt="">
      <img class="object-fill-cover" src="./images//images//slideshow//human_anatomy.png" alt="">
    </div>
    <i class="fa-solid fa-angle-right" id="right"></i>
  </div>
  <div class="d-flex flex-column">
    <h2 class="text-center">Top Books</h2>
    <div class="d-grid">
      <div class="d-flex flex-row mx-5 p-2">
        <?php
        while ($product = mysqli_fetch_assoc($featured)) :
        ?>

          <div class="card mx-2 g-col-4" style="width: 18rem;">
            <img src="<?= $product['image']; ?>" alt="<?= $product['book_name']; ?>">

            <h4 class="price"><?= $product['book_name']; ?></h4>
            <div class="butt d-flex flex-row">
              <button class="btn price  mx-2">R <?= $product['book_price']; ?></button>
              <a href="./pages//details.php">
                <button type="button" class="btn btn-success" data-bs-toggle="modal " data-bs-target="#details-1">More</button>
              </a>
            </div>

          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <div class="footer-dark bg-dark text-white">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3 class="mt-0 mb-3 fw-bold fs-2">Services</h3>
            <ul class="">
              <li><a href="./index.php" class="link-underline link-underline-opacity-0 text-white">Home</a></li>
              <li><a href="./pages//category.php" class="link-underline link-underline-opacity-0 text-white">Category</a></li>
              <li><a href="./pages//about//aboutUs.php" class="link-underline link-underline-opacity-0 text-white">About us</a></li>
              <li><a href="./pages//cart.php" class="link-underline link-underline-opacity-0 text-white">Cart</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3 class="mt-0 mb-3 fw-bold fs-2">About</h3>
            <ul>
              <li><a href=" #" class="link-underline link-underline-opacity-0 text-white">Company</a></li>
              <li><a href="#" class="link-underline link-underline-opacity-0 text-white">Team</a></li>
              <li><a href="#" class="link-underline link-underline-opacity-0 text-white">Careers</a></li>
            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3 class="mt-0 mb-3 fw-bold fs-2">Brilliant Books store</h3>
            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
          </div>
          <div class="col-md-6 item text">
            <h3 class="mt-0 mb-3 fw-bold fs-2">Careers</h3>
            <ul class="">
              <li><a href="./pages//authentication//administratorLogin.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
              <li><a href="./pages//adminDashboard.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
              <li><a href="./pages//careers//careers.php" class="link-underline link-underline-opacity-0 text-white">Get a job</a></li>
            </ul>
          </div>
          <div class=" col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
          </div>
        </div>
        <p class="copyright text-align-center pt-4 fs-4 mb-0">Brilliant Book Store © 2023</p>
      </div>
    </footer>
  </div>
  <script src="./scripts//animations//slideshow_animations.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/animations/lottie_animations.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>