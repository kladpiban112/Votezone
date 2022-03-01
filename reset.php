<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "votezone_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->query("SET NAMES 'utf8'");
$conn->query("UPDATE campur SET zone='0'");
$conn->query("UPDATE ctambon SET zone='0'");
$conn->query("UPDATE zone SET flag='0'");

// echo "<script language='javascript'>alert('รีเซตเรียบร้อย')</script>";
// echo "<meta http-equiv='refresh' content='0;url=home.php'/>";
echo "<script language='javascript'>
      $(document).ready(function(){
        Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'รีเซตเรียบร้อย',
        showConfirmButton: false,
        timer: 1500
      }).then((value) => {
        //liff.closeWindow();
        window.location.replace('home.php');
    })})</script>";
?>
