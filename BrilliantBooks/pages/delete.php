<?php
if (isset($_GET['book_id'])) {
  include("./Conndb.php");
  $id = $_GET['book_id'];
  $sql = "DELETE FROM tblbooks WHERE book_id='$id'";
  if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION["delete"] = "Book Deleted Successfully!";
    header("Location:index.php");
  } else {
    die("Something went wrong");
  }
} else {
  echo "Book does not exist";
}
