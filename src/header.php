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
</select>
</div>

<hr>

<div>
<h5 style="color:#0066ff;" href="*">เลือกอำเภอเขตเลือกตั้ง</h5>
</div>

<div class="container-fluid mt-3">
<?php $amper = $conn->query("SELECT cm.ampurname as M ,cm.zone,cm.ampurcodefull FROM  campur cm  WHERE cm.changwatcode = '30' AND cm.zone = '0' ORDER by cm.ampurcode");
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
