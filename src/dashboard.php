<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Votezone_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$ampur = $_GET['ampur'];
$tambon = $_GET['ctambon'];

$conn->query("UPDATE zone SET flag='1' WHERE zonecode='".$_GET['ket']."'");

// optional  
// echo "You chose the following color(s): <br>";
foreach ($ampur as $amp){ 
    // print $amp."<br />";
    $conn->query("UPDATE campur SET zone='".$_GET['ket']."' WHERE ampurcodefull='".$amp."'");
}
foreach ($tambon as $tam){ 
    // print $tam."<br />";
    $conn->query("UPDATE ctambon SET zone='".$_GET['ket']."' WHERE tambonname='".$tam."'");
}
echo "<script language='javascript'>alert('เลือกเขตเสร็จเรียบร้อยแล้ว')</script>";
echo "<meta http-equiv='refresh' content='0;url=../home.php'/>";
?>
