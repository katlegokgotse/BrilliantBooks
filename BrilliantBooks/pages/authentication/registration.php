<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <title>Registration | Brilliant Books</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">
      <img class="d-inline-block align-text-top" src="images/logo/BRILLIANT.png" width="120" height="90">
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
    <div class="container p-5 bg-blue">
      <div class="rightHandSide">
        <form action="registration.php" method="post">
          <div class="form-group">
            <input id="userRegistrationName" type="text" name="userRegistrationName" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <input id="userRegistrationSurname" type="text" name="userRegistrationSurname" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <input id="userRegistrationEmailAddress" type="email" name="userRegistrationEmailAddress" placeholder="Enter emailAddress">
          </div>
          <div>
          </div>
          <button type="submit" class="loginButton bg-dark rounded-5 p-2 text-white" name="submit" id="submit">Login</button>
          <button type="submit" class="forgetPassword" id="forgotPassword">Forgot password</button>
        </form>
      </div>
      <div class="leftHandSide">
        <img src="" alt="">
      </div>
    </div>
  </article>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <?php
  //Recieving user input
  if (isset($_POST["submit"])) {
    $name = $_POST["userRegistrationName"];
    $surname = $_POST["userRegistrationSurname"];
    $email = $_POST["userRegistrationEmailAddress"];
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
      require_once "../Conndb.php";
    }
  }
  ?>
</body>

</html>