<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
<?php 
$amper = $conn->query("SELECT cm.ampurname as M ,cm.zone,cm.ampurcodefull as a_code FROM  campur cm  WHERE cm.changwatcode = '30' AND cm.zone = '0' ORDER by cm.ampurcode");
                $num = 0;
                while($row = $amper->fetch_object()){
                    if($num == 0){
                    echo"<div class='row'>";
                    }
                    echo"<div class='col-sm-3'>";
                    echo "<input class='ampurcode' type='checkbox' name='ampur[]' value='".$row->a_code."'>  $row->M  ";
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

<div class="container-fluid mt-3" id='tambon'>
<?php 
// $amper = $conn->query("SELECT *, ct.tambonname as T FROM ctambon ct WHERE ct.changwatcode = '30' AND zone = '0' AND ct.male != '0'");
//                 $num = 0;
//                 while($row = $amper->fetch_object()){
//                     if($num == 0){
//                     echo"<div class='row'>";
//                     }
//                     echo"<div class='col-sm-3'>";
//                     echo "<input type='checkbox' name='ctambon[]' value='".$row->T."'>  $row->T  ";
//                     echo "</div>";
//                     $num++;
//                     if($num == 4){
//                         echo "</div>";
//                         $num = 0;
//                     }
                    
//                 }
            ?>
</div>

<hr>

<br>

<div class="d-grid">
  <button class="btn btn-primary btn-block" type="submit" >ตกลง</button>
</div>

            </from>



    <script>
        var tambonValue = ""; 
        $('.ampurcode').click(function(e){
            var checkedValue = ""; 
            var inputElements = document.getElementsByClassName('ampurcode');
            var num = 0;
            for(var i=0; inputElements[i]; ++i){
                if(inputElements[i].checked){
                    if(num == 0)
                    {
                        checkedValue = checkedValue +" AND ampurcode = '"+ inputElements[i].value+"'";
                        num = 1;
                    }else if(num == 1){
                        checkedValue = checkedValue +" OR ampurcode = '"+ inputElements[i].value+"'";
                    }
                }
            }
            tambonValue = checkedValue;
            var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tambon").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "showtambon.php?ampurcode="+tambonValue, true);
            xhttp.send();

        });


    </script>

   

    