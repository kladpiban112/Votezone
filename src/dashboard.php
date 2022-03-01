<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
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
    $conn->query("UPDATE campur SET zone='".$_GET['ket']."' WHERE ampurcodefull = '".$amp."'");
}
foreach ($tambon as $tam){ 
    // print $tam."<br />";
    $conn->query("UPDATE ctambon SET zone='".$_GET['ket']."' WHERE tamboncodefull = '".$tam."'");
}
echo "<script language='javascript'>
      $(document).ready(function(){
        Swal.fire({
        position: 'top',
        icon: 'success',
        title: 'บันทึกสำเร็จ',
        showConfirmButton: false,
        timer: 1500
        }).then((value) => {
        window.location.replace('../home.php');
        })})</script>";
?>
