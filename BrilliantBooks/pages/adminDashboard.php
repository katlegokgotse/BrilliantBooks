<?php
require_once('./Conndb.php');
$sql = "SELECT * FROM tbluser";
$sql1 = "SELECT * FROM tblbooks";
$result = mysqli_query($conn, $sql);
$results = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles//styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title><?= "Admin | Brilliant Books" ?></title>
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
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row mt-5">
      <div class="col">
        <div class="card mt-5">
          <div class="card-header">
            <h1>Administration</h1>
          </div>
          <div class="card-body">
            <button class="btn btn-green" name="addUser" id="addUser"><a href="./createBook.php">Add book</a></button>
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td>User ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>
              <tr>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <td><?= $row['id'] ?></td>
                  <td><?= $row['first_name'] ?></td>
                  <td><?= $row['last_name'] ?></td>
                  <td><?= $row['email'] ?></td>
                  <td><a href="./edit-user.php" class="btn btn-primary">EDIT</a></td>
                  <td><a href="./delete-user.php" class="btn btn-danger" id="submit">DELETE</a></td>
              </tr>
            <?php } ?>

            </table>
            <button class="btn btn-green" name="addNewBook" id="addNewBook"><a href="./createBook.php">Add book</a></button>
            <table class="table table-bordered text-center">
              <tr class="bg-dark text-white">
                <td>Book ID</td>
                <td>Book Name</td>
                <td>Book Author</td>
                <td>Year of rerlease</td>
                <td>Publisher Name</td>
                <td>Book Price</td>
                <td>EDIT</td>
                <td>Delete</td>
              </tr>
              <tr>
                <?php
                while ($row = mysqli_fetch_assoc($results)) {
                ?>
                  <td><?= $row['book_id'] ?></td>
                  <td><?= $row['book_name'] ?></td>
                  <td><?= $row['book_author'] ?></td>
                  <td><?= $row['book_year_of_release'] ?></td>
                  <td><?= $row['publisher_name'] ?></td>
                  <td><?= $row['book_price'] ?></td>
                  <td><a href="./edit.php" class="btn btn-primary">EDIT</a></td>
                  <td><a href="./delete.php" class="btn btn-danger">DELETE</a></td>
              </tr>
            <?php } ?>

            </table>
          </div>
        </div>
      </div>
    </div>
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
        <li><a href="./pages//careers//careers.php">Get a job</a></li>
      </ul>
    </div>
    <div class="w-20">
      <p></p>
    </div>
    <div class="w-20"></div>
  </footer>
  <?php
  if (isset($_GET['submit'])) {
    include("./Conndb.php");
    $bookName = $_GET['submit'];
    $sql = "DELETE FROM tblbooks WHERE book_name='$bookName'";
    if (mysqli_query($conn, $sql)) {
      session_start();
      $_SESSION["delete"] = "Book Deleted Successfully!";
    } else {
      die("Something went wrong");
    }
  } else {
    echo "Book does not exist";
  }
  ?>

  <script src="./scripts//animations//slideshow_animations.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/animations/lottie_animations.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>