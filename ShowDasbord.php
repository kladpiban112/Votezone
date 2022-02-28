<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->
 <head>
  <meta charset="UTF-8">

  <!-- metaview -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="Generator" content="">
  <meta name="Author" content="">
  <meta name="Keywords" content="">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <meta name="Description" content="HomePage">

  <title>Votezone Nakhonratchasima organization</title>

  <link rel="shortcut icon" href="image"/>

  <link rel="stylesheet" href="src/style.css">

 </head>
 <!--end::Head-->

 <!--begin::Body-->
 <body>
  
 <!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">Votezone Nakhonratchasima</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="text-primary nav-link" href="index.php">กลับหน้าหลัก</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- nav -->
<!-- cardbody -->
<div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <center>
        <h5>
          รายชื่อเขตที่เลือก
        </h5>
      </center>
      <?php 
            include('connect.php');
      ?>
      </div>
    </div>
  </div>
<!-- end card-body -->
<?php
      $zone1 = 0;
      $zone2 = 0;
      $zone3 = 0;
      $zone4 = 0;
      $zone5 = 0;
      $zone6 = 0;
      $zone7 = 0;
      $zone8 = 0;
      $zone9 = 0;
      $zone10 = 0;
      $zone11 = 0;
      $zone12 = 0;
      $zone13 = 0;
      $zone14 = 0;

      $zone = $conn->query("SELECT zone,sum(male)+sum(female) as T FROM `ctambon` WHERE zone != '0' GROUP BY zone");
      while($z = $zone->fetch_object()){
        if($z->zone == '1' ){ $zone1 = $z->T; }
        if($z->zone == '2' ){ $zone2 = $z->T; }
        if($z->zone == '3' ){ $zone3 = $z->T; }
        if($z->zone == '4' ){ $zone4 = $z->T; }
        if($z->zone == '5' ){ $zone5 = $z->T; }
        if($z->zone == '6' ){ $zone6 = $z->T; }
        if($z->zone == '7' ){ $zone7 = $z->T; }
        if($z->zone == '8' ){ $zone8 = $z->T; }
        if($z->zone == '9' ){ $zone9 = $z->T; }
        if($z->zone == '10' ){ $zone10 = $z->T; }
        if($z->zone == '11' ){ $zone11 = $z->T; }
        if($z->zone == '12' ){ $zone12 = $z->T; }
        if($z->zone == '13' ){ $zone13 = $z->T; }
        if($z->zone == '14' ){ $zone14 = $z->T; }
      }
   ?>

<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <table class="table">
            <thead>
              <tr>
                <th>เขต 1</th>
                <th>เขต 2</th>
                <th>เขต 3</th>
                <th>เขต 4</th>
                <th>เขต 5</th>
                <th>เขต 6</th>
                <th>เขต 7</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $zone1; ?></td>
                <td><?php echo $zone2; ?></td>
                <td><?php echo $zone3; ?></td>
                <td><?php echo $zone4; ?></td>
                <td><?php echo $zone5; ?></td>
                <td><?php echo $zone6; ?></td>
                <td><?php echo $zone7; ?></td>
              </tr>
            </tbody>
          </table>
      <table class="table">
            <thead>
              <tr>

                <th>เขต 8</th>
                <th>เขต 9</th>
                <th>เขต 10</th>
                <th>เขต 11</th>
                <th>เขต 12</th>
                <th>เขต 13</th>
                <th>เขต 14</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $zone8; ?></td>
                <td><?php echo $zone9; ?></td>
                <td><?php echo $zone10; ?></td>
                <td><?php echo $zone11; ?></td>
                <td><?php echo $zone12; ?></td>
                <td><?php echo $zone13; ?></td>
                <td><?php echo $zone14; ?></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 1</h5>
      <br>

      <p>อำเภอที่เลือก : <?php $sqlamp1 = $conn->query("select ampurname from campur where zone = '1'");
        while($reamp1 = $sqlamp1->fetch_object()){echo $reamp1->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam1 = $conn->query("select tambonname from ctambon where zone = '1'AND changwatcode='30'");
        while($retam1 = $sqltam1->fetch_object()){echo $retam1->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex1 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '1'");
        while($resex1 = $sqlsex1->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex1->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex1->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex1->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 2</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp2 = $conn->query("select ampurname from campur where zone = '2'");
        while($reamp2 = $sqlamp2->fetch_object()){echo $reamp2->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam2 = $conn->query("select tambonname from ctambon where zone = '2'AND changwatcode='30'");
        while($retam2 = $sqltam2->fetch_object()){echo $retam2->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex2 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '2'");
        while($resex2 = $sqlsex2->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex2->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex2->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex2->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 3</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp3 = $conn->query("select ampurname from campur where zone = '3'");
        while($reamp3 = $sqlamp3->fetch_object()){echo $reamp3->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam3 = $conn->query("select tambonname from ctambon where zone = '3'AND changwatcode='30'");
        while($retam3 = $sqltam3->fetch_object()){echo $retam3->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex3 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '3'");
        while($resex3 = $sqlsex3->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex3->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex3->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex3->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 4</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp4 = $conn->query("select ampurname from campur where zone = '4'");
        while($reamp4 = $sqlamp4->fetch_object()){echo $reamp4->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam4 = $conn->query("select tambonname from ctambon where zone = '4'AND changwatcode='30'");
        while($retam4 = $sqltam4->fetch_object()){echo $retam4->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex4 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '4'");
        while($resex4 = $sqlsex4->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex4->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex4->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex4->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 5</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp5 = $conn->query("select ampurname from campur where zone = '5'");
        while($reamp5 = $sqlamp5->fetch_object()){echo $reamp5->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam5 = $conn->query("select tambonname from ctambon where zone = '5'AND changwatcode='30'");
        while($retam5 = $sqltam5->fetch_object()){echo $retam5->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex5 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '5'");
        while($resex5 = $sqlsex5->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex5->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex5->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex5->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 6</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp6 = $conn->query("select ampurname from campur where zone = '6'");
        while($reamp6 = $sqlamp6->fetch_object()){echo $reamp6->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam6 = $conn->query("select tambonname from ctambon where zone = '6'AND changwatcode='30'");
        while($retam6 = $sqltam6->fetch_object()){echo $retam6->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex6 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '6'");
        while($resex6 = $sqlsex6->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex6->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex6->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex6->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 7</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp7 = $conn->query("select ampurname from campur where zone = '7'");
        while($reamp7 = $sqlamp7->fetch_object()){echo $reamp7->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam7 = $conn->query("select tambonname from ctambon where zone = '7'AND changwatcode='30'");
        while($retam7 = $sqltam7->fetch_object()){echo $retam7->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex7 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '7'");
        while($resex7 = $sqlsex7->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex7->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex7->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex7->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 8</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp8 = $conn->query("select ampurname from campur where zone = '8'");
        while($reamp8 = $sqlamp8->fetch_object()){echo $reamp8->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam8 = $conn->query("select tambonname from ctambon where zone = '8'AND changwatcode='30'");
        while($retam8 = $sqltam8->fetch_object()){echo $retam8->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex8 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '8'");
        while($resex8 = $sqlsex8->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex8->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex8->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex8->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 9</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp9 = $conn->query("select ampurname from campur where zone = '9'");
        while($reamp9 = $sqlamp9->fetch_object()){echo $reamp9->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam9 = $conn->query("select tambonname from ctambon where zone = '9'AND changwatcode='30'");
        while($retam9 = $sqltam9->fetch_object()){echo $retam9->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex9 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '9'");
        while($resex9 = $sqlsex9->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex9->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex9->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex9->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 10</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp10 = $conn->query("select ampurname from campur where zone = '10'");
        while($reamp10 = $sqlamp10->fetch_object()){echo $reamp10->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam10 = $conn->query("select tambonname from ctambon where zone = '10'AND changwatcode='30'");
        while($retam10 = $sqltam10->fetch_object()){echo $retam10->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex10 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '10'");
        while($resex10 = $sqlsex10->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex10->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex10->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex10->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 11</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp11 = $conn->query("select ampurname from campur where zone = '11'");
        while($reamp11 = $sqlamp11->fetch_object()){echo $reamp11->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam11 = $conn->query("select tambonname from ctambon where zone = '11'AND changwatcode='30'");
        while($retam11 = $sqltam11->fetch_object()){echo $retam11->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex11 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '11'");
        while($resex11 = $sqlsex11->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex11->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex11->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex11->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 12</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp12 = $conn->query("select ampurname from campur where zone = '12'");
        while($reamp12 = $sqlamp12->fetch_object()){echo $reamp12->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam12 = $conn->query("select tambonname from ctambon where zone = '12'AND changwatcode='30'");
        while($retam12 = $sqltam12->fetch_object()){echo $retam12->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex12 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '12'");
        while($resex12 = $sqlsex12->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex12->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex12->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex12->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 13</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp13 = $conn->query("select ampurname from campur where zone = '13'");
        while($reamp13 = $sqlamp13->fetch_object()){echo $reamp13->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam13 = $conn->query("select tambonname from ctambon where zone = '13'AND changwatcode='30'");
        while($retam13 = $sqltam13->fetch_object()){echo $retam13->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex13 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '13'");
        while($resex13 = $sqlsex13->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex13->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex13->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex13->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

  <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h5>เขตที่ 14</h5>
      <br>
      <p>อำเภอที่เลือก : <?php $sqlamp14 = $conn->query("select ampurname from campur where zone = '14'");
        while($reamp14 = $sqlamp14->fetch_object()){echo $reamp14->ampurname ; echo " ";} ?> 
      </p>
      <p>ตำบลที่เลือก : <?php $sqltam14 = $conn->query("select tambonname from ctambon where zone = '14'AND changwatcode='30'");
        while($retam14 = $sqltam14->fetch_object()){echo $retam14->tambonname ; echo " ";} ?>
      
      <p>
      <?php $sqlsex14 = $conn->query("select sum(male) as m,sum(female) as f ,sum(male)+sum(female) as sum from ctambon where zone = '14'");
        while($resex14 = $sqlsex14->fetch_object()){
          
          echo "<p>จำนวนประชากรชาย : ".$resex14->m." คน</p>";
          echo "<p>จำนวนประชากรหญิง : ".$resex14->f." คน</p>";
          echo "<p>รวมเป็น : ".$resex14->sum." คน</p>";
          } ?> 
      </div>
    </div>
  </div>

<!-- endcard -->  


 </body>
</html>
