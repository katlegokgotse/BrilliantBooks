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
      <img class="d-inline-block align-text-top" src="./../../images//logo//BRILLIANT.png" width="120" height="90">
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

    <div class="container">
      <div class="d-flex justify-content-center w-100 p-2 h-20 m-auto align-items-center">
        <div class="w-50 h-50 align-items-center">
          <h1 class="text-center">Join our alumni</h1>
          <form action="./registration.php" method="post" class="d-flex flex-column justify-content-center align-items-center p-2">
            <div class="form-group">
              <input id="universityStudentNumber" type="text" name="universityStudentNumber" placeholder="Enter Student number">
            </div>



            <div>
            </div>
            <button type="submit" class="loginButton bg-dark rounded-2 w-auto p-2 text-white" name="submit" id="submit">Register</button>
          </form>
        </div>
        <div class="w-50 h-50">
          <img src="./../../images//images//login//login_picture.png" alt="" class="w-auto h-auto object-fit-fill">
        </div>
      </div>
    </div>
  </article>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

  <?php
  //Recieving user input
  if (isset($_POST["submit"])) {
    include("./../Conndb.php");

    $studentNumber = mysqli_real_escape_string($conn, $_POST["universityStudentNumber"]);
    $email = mysqli_real_escape_string($conn, $_POST["universityEmailAddress"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST["confirmPassword"]);
    $university = mysqli_real_escape_string($conn, $_POST["universityName"]);

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = [];
    if (empty($studentNumber) or empty($email) or empty($password)) {
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
    if (count($errors) > 0) {
      foreach ($errors as $error) {
        print "<div class='alert alert-danger'>$error</div>";
      }
    } else {
      $sql = "INSERT INTO tblstudent (user_id, student_number, student_email, university, password) VALUES ('$studentNumber', '$email', '$university', '$password')";
      try {
        $result = mysqli_query($conn, $sql);
        $_SESSION["create"] = "user Added Successfully!";
        print "<div class='alert alert-success'>You have been registered successfully</div>";
        header("location:./login.php");
      } catch (mysqli_sql_exception) {
        die("something went wrong");
        print "<div alert alert-error>Something went wrong!</div>";
      }
    }
  }
  ?>
</body>

</html>