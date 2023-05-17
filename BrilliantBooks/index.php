<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles//styles.css">
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="#">Category</a>
          </li>
          <li class="nav-item d-flex align">
            <a class="nav-link" href="./pages//about//aboutUs.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
        </ul>
        <button id="signUpButton" class="bg-dark rounded-5 p-2 text-white">
          <a href="pages/authentication/registration.php">
            Sign up
          </a>
        </button>
        <button id="signUpButton" class="bg-dark rounded-5 p-2 text-white">
          <a href="pages/authentication/registration.php">
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
        <img src="./images//images//login//index_bg.png" alt="">
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
  <footer class="bg-dark d-flex w-100">
    <div class="w-20">
      <img src="./images//images//logo//Brilliant_white.png" alt="" class="w-100">
    </div>
    <div class="w-20">
      <p>Brilliant Books</p>
      <ul class="">
        <li><a href="">Home</a></li>
        <li><a href="">Category</a></li>
        <li><a href="">About us</a></li>
        <li><a href="">Cart</a></li>
      </ul>
    </div>
    <div class="w-20">
      <p>Careers</p>
      <ul class="">
        <li><a href="./pages//authentication//administratorLogin.php">Intranet</a></li>
        <li><a href="./pages//adminDashboard.php">Intranet</a></li>
        <li><a href="./pages//careers//careers.php">Get a job</a></li>
      </ul>
    </div>
    <div class="w-20">
      <p></p>
    </div>
    <div class="w-20"></div>
  </footer>
  <?php

  ?>
  <script src="./scripts//animations//slideshow_animations.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/animations/lottie_animations.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>