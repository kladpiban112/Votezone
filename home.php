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
  <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <meta name="Description" content="HomePage">

  <title>Votezone Nakhonratchasima organization</title>

  <link rel="shortcut icon" href="image"/>

  <link rel="stylesheet" href="src/style.css">
  <!-- Sweetalert2-->
  <!-- <script src="https://npmcdn.com/sweetalert2@4.0.15/dist/sweetalert2.min.js"></script> -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- ajax-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 </head>
 <!--end::Head-->

 <!--begin::Body-->
 <body>
  
 <!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
  <div class="container">
    <a class="navbar-brand " href="index.php">Votezone Nakhonratchasima</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
          <a class="text-body nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="text-primary nav-link" href="ShowDasbord.php">Dashboard</a>
        </li>
        <li class="nav-item active">
          <a class="text-danger nav-link" type="btn btn-danger" href="#" onclick="reset()" >Reset</a>
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
      <?php include("src/header.php");
      ?>
      </div>
      <div style="height: 50px"></div>
    </div>
  </div>
</div>
<!-- end card-body -->


<div style="height: 50px"></div>
<!-- endcard -->

<!-- footer -->
<?php
//include("src/footer.php");
?>
<!-- endfooter -->
   
 </body>
</html>


<script>
  function reset() {
    Swal.fire({
      title: 'Are you sure?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Reset it !'
      }).then((result) => {
        if (result.isConfirmed) {
          jQuery.ajax({
            type: "POST",
            url: 'reset.php',
            data: {}, 
            success:function(data) { 
              Swal.fire(
              'Reset!',
              'Your file has been Reset.',
              'success'
            ).then((value) => {
                    window.location.replace("home.php");
                }); 
            }
          })
      }
    })
  }    
</script>