<?php include 'connect.php';?>

<form action="src/dashboard.php" method="get">
<div>
<h4 style="color:#0066ff;" href="*">เลือกเขต</h4>
<select class="form-select" name ="ket" id="ket">
  <option>เขต</option>
  <?php $zone=$conn->query("SELECT * FROM zone WHERE flag='0'");

        while ($z = $zone->fetch_object()) {
            echo "<<option value='".$z->zonecode."'>".$z->zonecode."</option>>";

        }
    ?>
<!-- 
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option> -->
</select>
</div>

<hr>

<div>
<h5 style="color:#0066ff;" href="*">เลือกอำเภอเขตเลือกตั้ง</h5>
</div>

<div class="container-fluid mt-3">
<?php $amper = $conn->query("SELECT ch.changwatname,cm.ampurname as M ,cm.zone FROM cchangwat ch LEFT JOIN campur cm ON cm.changwatcode = ch.changwatcode WHERE ch.changwatcode = '30' AND cm.zone = '0' ORDER by cm.ampurcode");
                $num = 0;
                while($row = $amper->fetch_object()){
                    if($num == 0){
                    echo"<div class='row'>";
                    }
                    echo"<div class='col-sm-3'>";
                    echo "<input type='checkbox' name='ampur[]' value='".$row->M."'>  $row->M  ";
                    echo "</div>";
                    $num++;
                    if($num == 4){
                        echo "</div>";
                        $num = 0;
                    }
                    
                }
            ?>
</div>

<hr>

<div>
<h5 style="color:#0066ff;" href="*">เลือกตำบลเขตเลือกตั้ง</h5>
</div>

<div class="container-fluid mt-3">
<?php $amper = $conn->query("SELECT *, ct.tambonname as T FROM ctambon ct WHERE ct.changwatcode = '30' AND zone = '0' AND ct.male != '0'");
                $num = 0;
                while($row = $amper->fetch_object()){
                    if($num == 0){
                    echo"<div class='row'>";
                    }
                    echo"<div class='col-sm-3'>";
                    echo "<input type='checkbox' name='ctambon[]' value='".$row->T."'>  $row->T  ";
                    echo "</div>";
                    $num++;
                    if($num == 4){
                        echo "</div>";
                        $num = 0;
                    }
                    
                }
            ?>
</div>

<hr>

<br>

<div class="d-grid">
  <button class="btn btn-primary btn-block" type="submit" >ตกลง</button>
</div>

            </from>
