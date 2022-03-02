<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php 
include '../connect.php';

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
        icon: 'success',
        title: 'บันทึกสำเร็จ',
        text: 'สามารถตรวจสอบได้ที่ หน้า Dashbord',
        showConfirmButton: false,
        timer: 2500
        }).then((value) => {
        window.location.replace('../home.php');
        })})</script>";
?>
