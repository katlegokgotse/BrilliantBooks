<?php
$hostname = "localhost";
$dbuser = "root";
$password = "";
$dbName = "brilliantbookstore";
$conn = mysqli_connect($hostname, $dbuser, $password, $dbName);

if ($conn->connect_error) {
  die("Couldn't connect");
}
