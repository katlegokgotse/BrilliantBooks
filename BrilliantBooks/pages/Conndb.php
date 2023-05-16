<?php
$hostname = "localhost";
$dbuser = "root";
$password = "";
$dbName = "brilliantbookstore";
$conn = mysqli_connect($hostname, $dbuser, $password, $dbName);

if (!$conn) {
  die("Couldn't connect");
}
