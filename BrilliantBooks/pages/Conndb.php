<?php
$hostname = "localhost";
$dbuser = "root";
$password = "";
$dbName = "brilliantbookstore";
$connectDB = mysqli_connect($hostname, $dbuser, $password, $dbName);

if (!$connectDB) {
  die("Couldn't connect");
}
