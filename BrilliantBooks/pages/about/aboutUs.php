<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

  <title><?= "About us | Brilliant Books" ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">
      <img class="d-inline-block align-text-top" src="./../../images//images//logo//BRILLIANT.png" width="120" height="90">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0r justify-content-center">
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="./../../index.php">Home</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="#">Category</a>
          </li>
          <li class="nav-item d-flex align">
            <a class="nav-link active" aria-current="page" href="./pages//about//aboutUs.php">About us</a>
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
    <div class="position-relative overflow-hidden bg-black py-24 sm:py-32 p-5 m-5 rounded-3">
      <div class="d-flex justify-content-center w-100 mx-auto max-w-7xl px-6 lg:px-8">
        <div class="w-50 max-w-2xl lg:mx-0">
          <h2 class="fs-2 font-bold tracking-tight text-white sm:text-6xl text-uppercase text-center">About us</h2>
          <p class="mt-6 text-lg leading-8 text-gray-300 text-center">
            BrilliantBooks founded in 2023 by means of university college students who noticed a want for an on hand,
            low priced online bookstall. We offer new and used textbooks at a fragment of the price of different retailers, and we provide numerous price options to make buying books clean and handy.
            Whether you are a scholar on a price range or a bookseller searching out an easy way to promote your books, we've got you covered.
            We're sure you may locate what you're looking for at Books
          </p>
          <div class="d-flex flex-row justify-content-center align-items-center">
            <a href="#" class="link-underline link-underline-opacity-0 text-white">Company Policy <span aria-hidden="true">&rarr;</span></a>
            <a href="#" class="link-underline link-underline-opacity-0 text-white">Internship program <span aria-hidden="true">&rarr;</span></a>
            <a href="#" class="link-underline link-underline-opacity-0 text-white">Our values <span aria-hidden="true">&rarr;</span></a>
            <a href="#" class="link-underline link-underline-opacity-0 text-white">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
          </div>
        </div>
        <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
          <dl class="mt-16 grid grid-column gap-8">
            <div class="d-flex flex-column-reverse">
              <dt class="fs-3 leading-7 text-gray-300">Open since</dt>
              <dd class="fs-5 font-bold leading-9 tracking-tight text-white">'23</dd>
            </div>
            <div class="d-flex flex-column-reverse">
              <dt class="fs-3 leading-7 text-gray-300">Full-time colleagues</dt>
              <dd class="fs-5 font-bold leading-9 tracking-tight text-white">300+</dd>
            </div>
            <div class="d-flex flex-column-reverse">
              <dt class="fs-3 leading-7 text-gray-300">Hours per week</dt>
              <dd class="fs-5 font-bold leading-9 tracking-tight text-white">40</dd>
            </div>
            <div class="d-flex flex-column-reverse">
              <dt class="fs-3 leading-7 text-gray-300">Paid time off</dt>
              <dd class="fs-5 font-bold leading-9 tracking-tight text-white">Unlimited</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>


  </article>
  <div class="footer-dark bg-dark text-white">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3 class="mt-0 mb-3 fw-bold fs-2">Services</h3>
            <ul class="">
              <li><a href="./../../index.php" class="link-underline link-underline-opacity-0 text-white">Home</a></li>
              <li><a href="./../pages//category.php" class="link-underline link-underline-opacity-0 text-white">Category</a></li>
              <li><a href="./../pages//about//aboutUs.php" class="link-underline link-underline-opacity-0 text-white">About us</a></li>
              <li><a href="./../pages//cart.php" class="link-underline link-underline-opacity-0 text-white">Cart</a></li>
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
              <li><a href="./..//authentication//administratorLogin.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
              <li><a href="./../adminDashboard.php" class="link-underline link-underline-opacity-0 text-white">Intranet</a></li>
              <li><a href="./../careers//careers.php" class="link-underline link-underline-opacity-0 text-white">Get a job</a></li>
            </ul>
          </div>
          <div class=" col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
          </div>
        </div>
        <p class="copyright text-align-center pt-4 fs-4 mb-0">Brilliant Book Store © 2023</p>
      </div>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/animations/lottie_animations.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.11.0/lottie.min.js" integrity="sha512-XCthc/WzPfa+oa49Z3TI6MUK/zlqd67KwyRL9/R19z6uMqBNuv8iEnJ8FWHUFAjC6srr8w3FMZA91Tfn60T/9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>