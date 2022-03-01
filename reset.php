<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php
  include 'connect.php';

  $conn->query("UPDATE campur SET zone='0'");
  $conn->query("UPDATE ctambon SET zone='0'");
  $conn->query("UPDATE zone SET flag='0'");
  
?>
