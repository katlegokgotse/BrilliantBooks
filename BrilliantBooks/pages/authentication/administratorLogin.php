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
  <title><?= "Intranet | Brilliant Books" ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid">
      <img class="d-inline-block align-text-top" src="./../../images//images//logo//BRILLIANT.png" width=" 120" height="90">
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
            <a class="nav-link" href="./pages//cart.php">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <article>
    <h1 class="bold text-center">WELCOME TO INTRANET</h1>
    <div class="container d-flex p-2 m-auto justify-content-center">
      <form action="administratorLogin.php" method="post" class="d-flex flex-column">
        <input id="userLoginEmailAddress" type="text" name="adminUser" placeholder="Enter username" class="my-2">
        <input id="userLoginPassword" type="password" name="adminPass" placeholder="Enter Password" class="my-2">
        <div class="buttons d-flex flex-column paddin">
          <button type="submit" class="loginButton btn btn-dark my-2" id="submit" name="submit">Login</button>
        </div>
      </form>

    </div>
  </article>
  <?php
  include("../Conndb.php");
  if (isset($_POST["submit"])) {

    $adminUsername = $_POST["adminUser"];
    $adminPassword = $_POST["adminPass"];
    $errors = [];
    if (empty($adminUsername) or empty($adminPassword)) {
      array_push($errors, "All fields are required");
    }
    if (count($errors) > 0) {
      foreach ($errors as $error) {
        print "<div class='alert alert-danger'>$error</div>";
      }
    } else {
      // $sql = "SELECT FROM administrator_username, administrator_password FROM  tblAdministrator, tblUser WHERE administrator_username='$adminUsername', administrator_password='$adminPassword'";
      //$result = mysqli_query($conn, $sql);
      print "<div class='alert alert-success'>You have been registered successfully</div>";
      header("location:./../adminDashboard.php");
      /*if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['user_type'] == 'admin') {
         
        } else {
          print "<div class='alert alert-error'>You don't have admin priveleges or wrong input</div>";
          die("Something went wrong!");
        }
      }*/
    }
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/authentication/authenication.js"></script>
</body>

</html>