<?php
// $hostname = "localhost";
// $username = "contour2_root";
// $password = "Contour@24";
// $dbname = "contour2_main";

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "contours_ltd";

$con = mysqli_connect($hostname, $username, $password, $dbname);
if (!$con) {
  echo "Database connection error" . mysqli_connect_error();
}
