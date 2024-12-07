<?php
// $hostname = "localhost";
// $username = "landand7_root";
// $password = "MoneyInTheBank026@";
// $dbname = "landand7_website";

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "contours_ltd";

$con = mysqli_connect($hostname, $username, $password, $dbname);
if (!$con) {
  echo "Database connection error" . mysqli_connect_error();
}
