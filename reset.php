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

$conn->query("UPDATE campur SET zone='0'");
$conn->query("UPDATE ctambon SET zone='0'");
$conn->query("UPDATE zone SET flag='0'");

echo "<script language='javascript'>alert('รีเซตเรียบร้อย')</script>";
echo "<meta http-equiv='refresh' content='0;url=home.php'/>";
?>