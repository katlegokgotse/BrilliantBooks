<?php
include('./../Conndb.php');
//Recieving user input
if (isset($_POST["submit"])) {
  $password = $_POST["userLoginPassword"];
  $email = $_POST["userLoginEmailAddress"];
  $errors = [];
  if (empty($name) or empty($surname) or empty($email)) {
    array_push($errors, "All fields are required");
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Email address isn't valid");
  }
  if (count($errors) > 0) {
    foreach ($errors as $error) {
      print "<div class='alert alert-danger'>$error</div>";
    }
  } else {
    //
    $sql = "SELECT * FROM tbluser WHERE student_email = '$email' && password = '$password'";
    try {
      $result = mysqli_query($conn, $sql);
      print "<div class='alert alert-success'>Welcome $email</div>";
      header("location:./index.php");
    } catch (mysqli_sql_exception) {
      print "<div class='alert alert-error'>Something went wrong!</div>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.js"></script>
  <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.1/firebase-ui-auth.css" />
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <title>Login | Brilliant Books</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">
      <img class="d-inline-block align-text-top" src="./../../images/logo/BRILLIANT.png" width="120" height="90">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav nav-underline me-auto mb-2 mb-lg-0r justify-content-center">
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="./pages//category.php" aria-current="page">Category</a>
          </li>
          <li class="nav-item d-flex align">
            <a class="nav-link" href="./pages//about//aboutUs.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./pages//cart.php">Cart</a>
          </li>
        </ul>
        <button class="navbar-text bg-dark rounded-5 p-2 text-white">
          Sign up
        </button>
      </div>
    </div>
  </nav>
  <article>
    <div class="d-flex p-2 w-100">
      <div class="rightHandSide w-50 p-5">
        <h1 class="bold">WELCOME</h1>
        <form action="login.php" method="get" class="d-flex flex-column">
          <!---<button type="submit" class="signInWithGoogle my-2 btn btn-outline-dark" id="signInWithGoogle">Sign up with Google</button> --->
          <script src="https://accounts.google.com/gsi/client" async defer></script>
          <div id="g_id_onload" data-client_id="YOUR_GOOGLE_CLIENT_ID" data-login_uri="https://your.domain/your_login_endpoint" data-auto_prompt="true">
          </div>
          <div class="g_id_signin" data-type="standard" data-size="medium" data-theme="outline" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left">
          </div>
          <input id="userLoginEmailAddress" type="email" name="userLoginEmailAddress" placeholder="Enter email address" class="my-2">
          <input id="userLoginPassword" type="password" name="userLoginPassword" placeholder="Enter Password" class="my-2">
          <div class="buttons d-flex flex-column paddin">
            <button type="submit" class="loginButton btn btn-dark my-2" id="loginButton" name="submit">Login</button>
            <button type="submit" class="forgetPassword my-2 btn btn-outline-light text-black" id="forgotPassword">Forgot password</button>
          </div>
        </form>
      </div>
      <div class="leftHandSide w-50">
        <img src="./../../images/images/login/login_picture.png" alt="this is a picture for decorating the login page" class="w-max h-auto">
      </div>
    </div>
  </article>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/authentication/authenication.js"></script>
</body>

</html>