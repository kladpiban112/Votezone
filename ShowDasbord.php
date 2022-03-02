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

  <!-- Sweet Alert -->
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">

  <meta name="Description" content="HomePage">

  <title>Votezone Nakhonratchasima organization</title>

  <link rel="shortcut icon" href="image"/>

  <link rel="stylesheet" href="src/style.css">
  <style>
    a{
      text-decoration: none;
      color:black;
      }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* html {
      scroll-behavior: smooth;
    } */

    section {
      width: 100%;
      height: 70vh;
    }

    section:nth-child(odd) {
      background: #d12525;
    }

    .btnToTop svg {
      width: 44px;
      height: 44px;
      padding: 9px;
      border-radius: 7px;
      background: #6e6e6e;
      fill: #c2c2c2;
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      transition: all .1s ease-in-out;
      cursor: pointer;
    }

    .btnToTop svg:hover {
      background: #222222;
      fill: #d1d1d1;
    }
  </style> 

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

</div>
<div class="container">
<div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="text-center" ><a href="#ket1" >เขต 1</a></th>
                <th class="text-center" ><a href="#ket2" >เขต 2</a></th>
                <th class="text-center" ><a href="#ket3" >เขต 3</a></th>
                <th class="text-center" ><a href="#ket4" >เขต 4</a></th>
                <th class="text-center" ><a href="#ket5" >เขต 5</a></th>
                <th class="text-center" ><a href="#ket6" >เขต 6</a></th>
                <th class="text-center" ><a href="#ket7" >เขต 7</a></th>
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
          <br>
      <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th class="text-center" ><a href="#ket8" >เขต 8</a></th>
                <th class="text-center" ><a href="#ket9" >เขต 9</a></th>
                <th class="text-center" ><a href="#ket10" >เขต 10</a></th>
                <th class="text-center" ><a href="#ket11" >เขต 11</a></th>
                <th class="text-center" ><a href="#ket12" >เขต 12</a></th>
                <th class="text-center" ><a href="#ket13" >เขต 13</a></th>
                <th class="text-center" ><a href="#ket14" >เขต 14</a></th>
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


  <div class="card border-0 shadow my-5" id="ket1">
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
  <div class="card border-0 shadow my-5" id="ket2">
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
  <div class="card border-0 shadow my-5" id="ket3">
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
  <div class="card border-0 shadow my-5" id="ket4">
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
  <div class="card border-0 shadow my-5" id="ket5">
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
  <div class="card border-0 shadow my-5" id="ket6">
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
  <div class="card border-0 shadow my-5" id="ket7">
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
  <div class="card border-0 shadow my-5" id="ket8">
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
  <div class="card border-0 shadow my-5" id="ket9">
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
  <div class="card border-0 shadow my-5" id="ket10">
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
  <div class="card border-0 shadow my-5" id="ket11">
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
  <div class="card border-0 shadow my-5" id="ket12">
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
  <div class="card border-0 shadow my-5" id="ket13">
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
  <div class="card border-0 shadow my-5" id="ket14">
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
  <div class="btnToTop">
    <button>
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 284.929 284.929" style="enable-background:new 0 0 284.929 284.929;" xml:space="preserve"> <g> <path d="M282.082,195.285L149.028,62.24c-1.901-1.903-4.088-2.856-6.562-2.856s-4.665,0.953-6.567,2.856L2.856,195.285 C0.95,197.191,0,199.378,0,201.853c0,2.474,0.953,4.664,2.856,6.566l14.272,14.271c1.903,1.903,4.093,2.854,6.567,2.854 c2.474,0,4.664-0.951,6.567-2.854l112.204-112.202l112.208,112.209c1.902,1.903,4.093,2.848,6.563,2.848 c2.478,0,4.668-0.951,6.57-2.848l14.274-14.277c1.902-1.902,2.847-4.093,2.847-6.566 C284.929,199.378,283.984,197.188,282.082,195.285z"/> </g> </svg>
    </button>
  </div>
 </body>
</html>
<!-- back to scrollTop -->
<script>
    const btnToTop = document.querySelector('.btnToTop');

    // 1. window.scrollTo()
    // btnToTop.addEventListener('click', () => {
    //   window.scrollTo(0, 0);
    // })

    // 2. window.scroll()
    // btnToTop.addEventListener('click', () => {
    //   window.scroll({
    //     top: 0,
    //     behavior: 'smooth'
    //   })
    // })

    // 3. document.documentElement.scrollTop()
    // btnToTop.addEventListener('click', () => {
    //   document.documentElement.scrollTop = 0;
    // })

    // 4. document.documentElement.scrollIntoView()
    btnToTop.addEventListener('click', () => {
      document.documentElement.scrollIntoView({
        behavior: 'smooth'
      })
    })
</script>