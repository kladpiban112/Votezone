<?php
$servername = "localhost";
$username = "thaiakitec_demo1";
$password = "demo12022**";
$dbname = "thaiakitec_demo1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>