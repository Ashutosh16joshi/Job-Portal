<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Job Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">  
    
  </head>




<body id="top">
    <div class="site-wrap">
  
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->
      
  
      <!-- NAVBAR -->
      <header class="site-navbar mt-3">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="site-logo col-6"><a href="index.php">Job Portal</a></div>
  
            <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link active">Home</a></li>
              <li><a href="post-job.php">Post a Job</a></li>
              <li><a href="preview.php">Recently posted job(s)</a></li>
              <li><a href="requestdetail.php">Request Details </a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="about.php">About</a></li>
              <li class="d-lg-none"><a href="logout.php">Log Out</a></li>
            </ul>
          </nav>
         
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <ul class="d-flex align-items-center">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="myprofile.php">
                <img src="../../../images/<?php echo $_SESSION['clogo']; ?>" alt="Profile" class="rounded-circle" style="height: 45px;">
                <span style="color: white;  margin-left: 5px; " > <?php echo $_SESSION['cname']; ?></span>
              </a><!-- End Profile Iamge Icon -->

                <a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</a>
              </div>
              <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
</div>
  
</div>
</div>
</header>
  
      <!-- HOME -->
      <section class="section-hero overlay inner-page bg-image" style="
     height: 10px; padding-top: 3em; background-color:#1e98d1cb;
      " id="home-section">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              
</div>
          </div>
        </div>
      </section>

