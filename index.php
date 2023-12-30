<?php
session_start();
if($_SESSION['cemail'] == null){
  header('location:loginpage.php');
  date_default_timezone_set("Asia/Kolkata");
include 'dbcon.php';
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Job Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">
<!-- 
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div> -->
    

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
          <div class="site-logo col-6"><a href="index.php"><b>Job Portal</b></a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.php" class="nav-link active">Home</a></li>
              <li><a href="post-job.php">Post a Job</a></li>
              <li><a href="preview.php">Recently posted job(s)</a></li>
              <li><a href="requestdetail.php">Request Details </a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="about.php">About</a></li>
              <!-- <li class="d-lg-none"><a href=""><span class="mr-2">+</span> Post a Job</a></li> -->
            
              <li class="d-lg-none"><a href="logout.php">Log Out</a></li>
            </ul>
          </nav>
          


          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <ul class="d-flex align-items-center">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="myprofile.php">
                <img src="../../../images/<?php echo $_SESSION['clogo']; ?>" alt="Profile" class="rounded-circle" style="height: 45px;">
                <span style="color: white;  margin-left: 5px; " ><?php echo $_SESSION['cname']; ?></span>
              </a><!-- End Profile Iamge Icon -->
    
              

              
              <a href="logout.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log Out</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="home-section section-hero overlay bg-image" style="background-image: url('images/companyProfile.jpg');" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="mb-5 text-center">
              <h1 class="text-white font-weight-bold">Welcome To Home Page</h1>
              <p>Search Jobseeker As Per Your Requirement.  </p>
            </div>
            
            <form action="search.php" method="post" class="search-jobs-form">
              <div class="row mb-5">
                <div class="col-lg-1"></div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                  <input type="text" name="j_specialization" class="form-control form-control-lg" placeholder="Job title, Company...">
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <select class="selectpicker" name="c_city" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select City">
                    <option>Himatnagar</option>
                    <option>Mehsana</option>
                    <option>Gandhinagar</option>
                    <option>Unjha</option>
                    <option>Surat</option>
                    <option>Mumbai</option>
                    <option>Vadodra</option>
                    <option>Jaipur</option>
                    <option>Delhi</option>
                  </select>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                  <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 popular-keywords">
                  <h3>Trending Keywords:</h3>
                  <ul class="keywords list-unstyled m-0 p-0">
                    <li><a href="#" class="">UI Designer</a></li>
                    <li><a href="#" class="">Python</a></li>
                    <li><a href="#" class="">Developer</a></li>
                  </ul>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <a href="#next" class="scroll-button smoothscroll">
        <span class=" icon-keyboard_arrow_down"></span>
      </a>

    </section>
    
    <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/companyProfile.jpg');">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2 text-white">JobPortal Site Stats</h2>
            <p class="lead text-white"></p>
          </div>
        </div>
        <?php
        $con = mysqli_connect("localhost","root","","jobportal");
        $sql = "SELECT * from jobseeker_mst";
        if ($result = mysqli_query($con, $sql)) {
          $rowcount = mysqli_num_rows( $result );
          $_SESSION['jobs'] = $rowcount;
        }

      $con = mysqli_connect("localhost","root","","jobportal");
      $sql = "SELECT * from job_post";
      if ($result = mysqli_query($con, $sql)) {
      $rowcount = mysqli_num_rows( $result );
      $_SESSION['jobpost'] = $rowcount;
    }

    $con = mysqli_connect("localhost","root","","jobportal");
    $sql = "SELECT * from company_mst";
    if ($result = mysqli_query($con, $sql)) {
    $rowcount = mysqli_num_rows( $result );
    $_SESSION['com'] = $rowcount;
  }

      ?>

        <div class="row pb-0 block__19738 section-counter">

          <div class="col-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-3">
              <strong class="number" data-number="<?php echo $_SESSION['jobs']; ?>"> 0</strong>
            </div>
            <span class="caption">Candidates</span>
          </div>

          <div class="col-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-3">
              <strong class="number" data-number="<?php echo $_SESSION['jobpost']; ?>"> 0</strong>
            </div>
            <span class="caption">Jobs Posted</span>
          </div>
        
          <div class="col-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="d-flex align-items-center justify-content-center mb-3">
              <strong class="number" data-number="<?php echo $_SESSION['com']; ?>">0</strong>
            </div>
            <span class="caption">Companies</span>
          </div>

            
        </div>
      </div>
    </section>



    

   



    <section class="bg-light pt-5 testimony-full">
        
        <div class="owl-carousel single-carousel">

        <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;“It's fine to celebrate success, but it is more important to heed the lessons of failure”.&rdquo;</p>
                  <p><cite> &mdash; Bill Gates, @Microsoft</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images\bill-gates.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>
        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Success “As a leader, It is important to not just see your own success, but focus on the success of others.”&rdquo;</p>
                  <p><cite> &mdash;  @sundar pichai</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images\sundar_pichai.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

      </div>

    </section>

    
    <?php include 'footer.php';?>
  </body>
</html>