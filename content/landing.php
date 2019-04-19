<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome User !</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
  </head>

  <body>

    <div>
      <img src="img/nav.jpg" style="width: 100%;">
    </div>
<!--   <header id="header" class="header header-hide">
    <div class="container">
      <div id="logo" class="pull-left">
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="../index.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header> -->

  <div class="hero-container">
    <img src="img/main.jpg" style="width: 100%;" alt="Hero Imgs">
  </div>

<form action="landing.php" method="POST">
  <div class="container-fluid">
    <div class="row bg-secondary p-4">
      <h3 class="display-5 text-light" style="margin-left: 190px;"><b>Drop a comment</b></h3>
   
      <input type="text" name="comment" placeholder="Comment here" autocomplete="off" id="comment" class="form-control" style="width: 500px; border-radius:0px; margin-left: 90px;">
      <button class="btn btn-info" type="submit" style="width: 40px; border-radius:0px;"><i class="fa fa-send"></i></button>
      
    </div>
  </div>
</form>
  
  <section id="get-started" class="padd-section text-center wow fadeInUp">
    <div class="container">

      <?php 

      // import connection
      require_once('../connection.php');
      if(isset($_POST['comment'])){

        $comment = $_POST['comment'];
        $query = "insert into comments (comment) values ('$comment') ";
        if(mysqli_multi_query ($connection,$query)){
          if($result = mysqli_store_result($connection)){
            while($row = mysqli_fetch_array($result)):
    ?>

<ul style="list-style: none;" class="mb-5">
  <li style="font-size: 23px;"> *course : <?php echo $row['courseName']; ?> <br> #Description: <?php echo $row['description']; ?></li>
   <hr class="my-3">
</ul>

<?php 

endwhile;
    }
  }
}

 ?>
<!-- <div class="section-title text-center">
  <h2>SIMPLE XSS INTRO</h2>
</div> -->
</div>
</section>

<div class="wow fadeInUp">
<h2 class="text-center">Comments</h2>
<ul style="list-style: none; margin-left:200px;">
  <?php 
    $query = "select * from comments";
    $data = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($data)):
  ?>
  <li style="font-size: 17px"><?php echo $row['comment'] ?></li> - <small><b>Anonymous</b></small>
  <hr class="my-1"></hr>
<?php endwhile; ?>
</ul>
  
</div>

<div>
  <img src="img/middle.jpg" style="width: 100%;" >
</div>

<div>
  <img src="img/students.jpg" style="width: 100%;" >
</div>

<div>
  <img src="img/footer.jpg" style="width: 100%;" >
</div>

<div>
  <img src="img/footer-last.jpg" style="width: 100%;" >
</div>


<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/modal-video/js/modal-video.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
