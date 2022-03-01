<?php
  include('connect.php');

  $sql = "SELECT *  FROM ctambon  WHERE changwatcode = '30' AND zone = '0' AND male != '0'".$_GET['ampurcode'];

  if($_GET['ampurcode'] != ""){
    $amper = $conn->query($sql);
    $num = 0;
    while($row = $amper->fetch_object()){
        if($num == 0){
        echo"<div class='row'>";
        }
        echo"<div class='col-sm-3'>";
        echo "<input class='tambon' type='checkbox' name='ctambon[]' value='".$row->tamboncodefull."'>  $row->tambonname  ";
        echo "</div>";
        $num++;
        if($num == 4){
            echo "</div>";
            $num = 0;
        }
        
    }
  }
?>