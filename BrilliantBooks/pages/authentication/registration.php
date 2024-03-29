<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./../../styles//styles.css">
  <link rel="stylesheet" href="./registration.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <title>Registration | Brilliant Books</title>
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
            <a class="nav-link active" aria-current="page" href="./../../index.php">Home</a>
          </li>
          <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="./../category.php">Category</a>
          </li>
          <li class="nav-item d-flex align">
            <a class="nav-link" href="./../about//aboutUs.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./../cart.php">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($errors)) {
    foreach ($errors as $errors) {
      print '<div class="message" onclick="this.remove();">' . $errors . '</div>';
    }
  }
  ?>
  <article>
    <div class="position-relative overflow-hidden py-24 sm:py-32 p-5">
      <div class="d-flex justify-content-center w-100 mx-auto max-w-7xl px-6 lg:px-8 md:d-inline-grid">
        <div class="w-50 max-w-2xl lg:mx-0">
          <h1 class="text-align-center">Welcome to Brilliant Books</h1>

          <div class="form-container">
            <form action="" method="post" class="d-flex flex-column justify-content-center align-items-center p-2">
              <div class="form-group m-2 p-2">
                <input classs="box" id="userRegistrationName" type="text" name="userRegistrationName" placeholder="Enter first name">
              </div>
              <div class="form-group p-2 m-2">
                <input id="userRegistrationSurname" type="text" name="userRegistrationSurname" placeholder="Enter last name">
              </div>
              <div class="form-group p-2 m-2">
                <input id="universityStudentNumber" type="text" name="universityStudentNumber" placeholder="Enter student number">
              </div>
              <div class="form-group p-2 m-2">
                <input id="universityName" type="text" name="universityName" placeholder="Enter your university">
              </div>
              <div class="form-group p-2 m-2">
                <input id="universityEmailAddress" type="email" name="universityEmailAddress" placeholder="Enter student email Address">
              </div>
              <div class="form-group p-2 m-2">
                <input id="password" type="password" name="password" placeholder="Enter password">
              </div>
              <div class="form-group p-2 m-2">
                <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Confirm password">
              </div>
              <div>
              </div>
              <button type="submit" class="loginButton bg-dark rounded-1 m-2 w-100 p-2 text-white" name="submit" id="submit">Register</button>
              <button type="submit" class="forgetPassword btn btn-light w-100 m-2 p-2" name="currentUser" id="alreadyHaveAnAcc" onclick="goToLogin">Already have an account? <a href="./login.php">Login</a></button>
            </form>
          </div>

        </div>
        <div class="w-50 mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
          <img class="w-100" src="./../../images//images//login//login_picture.png" alt="">
        </div>
      </div>
    </div>
  </article>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./../../scripts//authentication//authentication.js"></script>

  <?php
  //Recieving user input
  include('./../Conndb.php');
  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST["userRegistrationName"]);
    $surname = mysqli_real_escape_string($conn, $_POST["userRegistrationSurname"]);
    $studentNumber =  mysqli_real_escape_string($conn, $_POST["universityStudentNumber"]);
    $email = mysqli_real_escape_string($conn, $_POST["universityEmailAddress"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $university = mysqli_real_escape_string($conn, $_POST["universityName"]);
    $user_type = "user";
    $select = mysqli_query($conn, "SELECT * FROM `tbluser` WHERE email = '$email' AND password = '$password'")
      or die('query failed');
    $errors = [];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($name) or empty($surname) or empty($email) or empty($university) or empty($studentNumber) or empty($password)) {
      array_push($errors, "All fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, "Email address isn't valid");
    }
    if (strlen($password) < 8) {
      array_push($errors, "Your password must be more or equal to 8 characters");
    }
    if ($password !== $confirmPassword) {
      array_push($errors, "The passwords do not match");
    }
    if (mysqli_num_rows($select) > 0) {
      array_push($errors, "User already has an account");
    }
    if (count($errors) > 0) {
      foreach ($errors as $error) {
        print "<div class='alert alert-danger'>$error</div>";
      }
    } else {
      //
      $sql = "INSERT INTO tbluser (first_name, last_name, email, student_number, university, password, user_type) 
        VALUES ('$name', '$surname', '$email', $studentNumber,'$university', '$password', '$user_type')";
      array_push($errors, "Registration successful");
      try {
        $result = mysqli_query($conn, $sql);
        session_start();
        if (file_exists(".userData.txt")) {
          $file = "userData.txt";
          $current = file_get_contents($file);
          file_put_contents($file, $name, $surname, $email, $password);
        } else {
          $myFile = fopen("userData.txt", "w");
          header("Refresh:0");
        }
        print "<div class='alert alert-success'>You have been registered successfully</div>";
      } catch (mysqli_sql_exception) {
        print "<div class='alert alert-warning'>Something went wrong!</div>";
      }
    }
  }
  ?>
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
</body>

</html>