<?php
session_start();
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
            <div class="site-logo col-6"><a href="">Job Portal</a></div>
  
            <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li class="d-lg-none"><a href="signin.php">New Account </a></li>
            </ul>
          </nav>
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
                <a href="registrationpage.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>New Account</a>
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

  

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 mb-5">



          <?php
          include 'dbcon.php';



     

      ?>

            <center><h2 class="mb-4"><b>Login Page</b></h2></center> 
         
            
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hey!</strong> Check your email to activate your account .
</div>
       
        <form action="" method="POST" class="p-4 border rounded">

              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Email ID</label>
                  <input type="email" name="cemail" class="form-control" placeholder="" required>
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" name="cpassword" class="form-control" placeholder="" required>
                </div>
              </div>
             
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="login" class="btn px-4 btn-primary text-white" >
                </div>
              </div>

          </form>
          </div>
        
            </form>
          </div>
      </div>
    </div>
  </section>
    
  
    <?php include 'footer.php';?>
   
     
  </body>
</html>