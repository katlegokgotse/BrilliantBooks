<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./category.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title><?= "Category | Brilliant Books" ?></title>
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
            <a class="nav-link" href="./../index.php">Home</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link active" aria-current="page" href="./category.php">Category</a>
          </li>
          <li class="nav-item d-flex align">
            <a class="nav-link" href="./about//aboutUs.php">About us</a>
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

  <span class="background">
    <h1 class="d-flex justify-content-center align-items-center text-white">CATEGORY</h1>
    <section class="gallery">
      <article class="card">
        <figure>
          <img src="./law.jpg" alt="law" srcset="">
          <div class="d-flex justify-content-center align-items-center">
            <a href="./law.php">Law</a>
          </div>
        </figure>
      </article>
      <article class="card">
        <figure>
          <img src="./technology.jpg" alt="technology" srcset="">
          <div class="d-flex justify-content-center align-items-center">
            <a href="./technology.php">Technology</a>
          </div>
        </figure>
      </article>
      <article class="card">
        <figure>
          <img src="./medicine.jpg" alt="medicine" srcset="">
          <div class="d-flex justify-content-center align-items-center">
            <a href="./medicine.php">Medicine</a>
          </div>
        </figure>
      </article>
      <article class="card">
        <figure>
          <img src="./education.jpg" alt="education" srcset="">
          <div class="d-flex justify-content-center align-items-center">
            <a href="./education.php">Education</a>
          </div>
        </figure>
      </article>
      <article class="card">
        <figure>
          <img src="./philosophy.jpg" alt="philosophy" srcset="">
          <div class="d-flex justify-content-center align-items-center">
            <a href="./philosophy.php">Philosophy</a>
          </div>
        </figure>
      </article>
      <article class="card">
        <figure>
          <img src="./sport.jpg" alt="sports" srcset="">
          <div class="d-flex justify-content-center align-items-center">
            <a href="./sport.php">Sport</a>
          </div>
        </figure>
      </article>
    </section>
  </span>


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
  <script src="./scripts//animations//slideshow_animations.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/animations/lottie_animations.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>