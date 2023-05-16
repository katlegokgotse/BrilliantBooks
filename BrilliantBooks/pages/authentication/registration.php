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
    <div class="container p-5 bg-blue d-flex w-100 h-50 align-items-center justify-content-center">
      <div class="rightHandSide w-50 p-2 m-auto">
        <h1 class="text-align-center">Welcome to Brilliant Books</h1>
        <form action="registration.php" method="post" class="p-2">
          <div class="form-group m-2 p-2">
            <input id="userRegistrationName" type="text" name="userRegistrationName" placeholder="Enter first name">
          </div>
          <div class="form-group p-2 m-2">
            <input id="userRegistrationSurname" type="text" name="userRegistrationSurname" placeholder="Enter last name">
          </div>
          <div class="form-group p-2 m-2">
            <input id="userRegistrationEmailAddress" type="email" name="userRegistrationEmailAddress" placeholder="Enter emailAddress">
          </div>
          <div>
          </div>
          <button type="submit" class="loginButton bg-dark rounded-1 m-2 w-100 p-2 text-white" name="submit" id="submit">Register</button>
          <button type="submit" class="forgetPassword btn btn-light w-100 m-2 p-2" name="currentUser" id="alreadyHaveAnAcc" onclick="goToLogin">Already have an account? Login</button>
        </form>
      </div>
      <div class="leftHandSide">
        <img src="../../images//images//login//login_picture.png" alt="picture of login" class="w-max card-img-right">
      </div>
    </div>
  </article>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./../../scripts//authentication//authentication.js"></script>

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
      $sql = "INSERT INTO tbluser (first_name, last_name, email) VALUES ($name, $surname, $email)";
      $stmt = mysqli_stmt_init($conn);
      $prepareStatement = mysqli_stmt_prepare($stmt, $sql);
      if ($prepareStatement) {
        mysqli_stmt_bind_param($stmt, "sss",);
        mysqli_stmt_execute($stmt);
        print "<div class='alert alert-success'>You have been registered successfully</div>";
        header("studentRegistration.php");
      } else {
        die("Something went wrong!");
      }
    }
    if (isset($_POST["currentUser"])) {
      header("Location: <specialised_registration>studentRegistration.php");
    }
  }
  ?>
  <footer class="bg-dark">

  </footer>
</body>

</html>