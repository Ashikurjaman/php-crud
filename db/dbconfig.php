<?php   

$serverName = "localhost";
$userName = "root";
$password = "";
$db = "crud";

$conn = mysqli_connect($serverName, $userName, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }



?>