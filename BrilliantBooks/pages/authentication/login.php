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
        <ul class="navbar-nav me-auto mb-2 mb-lg-0r d-flex align-items-center">
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="#">Category</a>
          </li>
          <li class="nav-item d-flex align">
            <a class="nav-link" href="#">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
        </ul>
        <button class="navbar-text bg-dark rounded-5 p-2 text-white">
          Sign up
        </button>
      </div>
    </div>
  </nav>
  <article>
    <div class="container d-flex p-2 mw-100">
      <div class="rightHandSide w-50 p-5">
        <h1 class="bold">WELCOME</h1>
        <form action="authentication.php" method="get" class="d-flex flex-column">
          <!---<button type="submit" class="signInWithGoogle my-2 btn btn-outline-dark" id="signInWithGoogle">Sign up with Google</button> --->
          <script src="https://accounts.google.com/gsi/client" async defer></script>
          <div id="g_id_onload" data-client_id="YOUR_GOOGLE_CLIENT_ID" data-login_uri="https://your.domain/your_login_endpoint" data-auto_prompt="true">
          </div>
          <div class="g_id_signin" data-type="standard" data-size="medium" data-theme="outline" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left">
          </div>
          <input id="userLoginEmailAddress" type="email" name="userLoginEmailAddress" placeholder="Enter email address" class="my-2">
          <input id="userLoginPassword" type="password" name="userLoginPassword" placeholder="Enter Password" class="my-2">
          <div class="buttons d-flex flex-column paddin">
            <button type="submit" class="loginButton btn btn-dark my-2" id="loginButton">Login</button>
            <button type="submit" class="forgetPassword my-2 btn btn-outline-light text-black" id="forgotPassword">Forgot password</button>
          </div>
        </form>
      </div>
      <div class="leftHandSide w-100">
        <img src="./../../images/images/login/login_picture.png" alt="this is a picture for decorating the login page" class="w-auto h-auto">
      </div>
    </div>
  </article>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/authentication/authenication.js"></script>
</body>

</html>