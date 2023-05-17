<?php
include('./Conndb.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $released = mysqli_real_escape_string($conn, $_POST["released"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $publisher = mysqli_real_escape_string($conn, $_POST["publisherName"]);
    $price  = mysqli_real_escape_string($conn, $_POST["bookPrice"]);

    $sqlInsert = "INSERT INTO tblbooks(book_name, type,  book_author, book_description, book_year_of_release, publisher_name, book_price) VALUES ('$title','$type','$author','$description', '$released', '$publisher', '$price')";
    if (mysqli_query($conn, $sqlInsert)) {
        session_start();
        $_SESSION["create"] = "Book Added Successfully!";
        header("Location:adminDashboard.php");
    } else {
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $released = mysqli_real_escape_string($conn, $_POST["released"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $publisher = mysqli_real_escape_string($conn, $_POST["publisherName"]);
    $price  = mysqli_real_escape_string($conn, $_POST["bookPrice"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sqlUpdate = "UPDATE tblbooks SET book_name = '$title', type = '$type', book_author = '$author', book_description = '$description', book_price = '$price', publisher_name = '$publisher' book_year_of_release = '$year' WHERE id='$id'";
    if (mysqli_query($conn, $sqlUpdate)) {
        session_start();
        $_SESSION["update"] = "Book Updated Successfully!";
        header("Location:adminDashboard.php");
    } else {
        die("Something went wrong");
    }
}
