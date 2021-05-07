<?php
//$mysqli = new mysqli("localhost","bxv1106_Bharadwaj","Bharadwaj@97","bxv1106_wp1");

$servername ="localhost";
$username = "bxv1106_Bharadwaj";
$password = "Bharadwaj@97";
$database = "bxv1106_wp1";
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>