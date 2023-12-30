<?php
session_start();
date_default_timezone_set("Asia/Kolkata");
?>


<!doctype html>
<html lang="en">
  <head>
  <?php include 'dbcon.php'; ?>
    <title>Job Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">  

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <style>

#pswd_info {
    position:absolute;
    bottom: -115px\9; /* IE Specific */
    right:10%;
    width:330px;
    padding:15px;
    background:#fefefe;
    font-size:.875em;
    border-radius:5px;
    box-shadow:0 1px 3px #ccc;
    border:1px solid #ddd;
    z-index: 1;
    
}
#ps {
    margin:0 0 10px 0;
    padding:0;
    font-weight:normal;
    font-size:19px;
}

#pswd_info::before {
    content: "\25B2";
    position:absolute;
    top:-12px;
    left:45%;
    font-size:14px;
    line-height:14px;
    color:#ddd;
    text-shadow:none;
    display:block;
 
}

.invalid {
    background:url(images/cross.jpg) no-repeat 0 50%;
    padding-left:22px;
    line-height:24px;
    color:red;
}
.valid {
    background:url(images/tick.jpg) no-repeat 0 50%;
    padding-left:22px;
    line-height:24px;
    color:#3a7d34;
}
#pswd_info {
   display:none;
}



      </style>
  </head>




<body id="top">

    <!-- <div id="overlayer"></div>
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
            <div class="site-logo col-6"><a href="">Job Portal</a></div>
  
            <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <!-- <li class="d-lg-none"><a href=""><span class="mr-2">+</span> Post a Job</a></li> -->
              <li class="d-lg-none"><a href="loginpage.php">Log In</a></li>
            </ul>
          </nav>
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
                <a href="loginpage.php" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
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
     
            <center><h2 class="mb-4"><b>Employer Registration Form</b></h2></center> 

            <?php
            $date = date('m/d/Y h:i:s a', time());
            if(isset($_POST['submit'])){
                include 'dbcon.php'; 
              $ename = mysqli_real_escape_string($con, ucwords($_POST['ename']));
              $eemail = mysqli_real_escape_string($con, $_POST['eemail']) ;
              $ephone = mysqli_real_escape_string($con, $_POST['ephone']);
              $registerdate = mysqli_real_escape_string($con, $date);
              $com_id = $_SESSION['cid'];
               
              $insertquery = "insert into company_employer(com_id,emp_name,emp_email,emp_phone,empCreate_date) values('$com_id','$ename','$eemail','$ephone','$registerdate')";
              $iquery = mysqli_query($con,$insertquery);
              
             if($iquery){ 
                ?>
                <script>
                location.replace("emailmsg.php");
            </script>
            <?php
             }
            }
                  ?>


        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="p-4 border rounded">

        <h4 class="mb-4">Employer Detail :</h4> <br> 
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Employer Name</label>
                  <input type="text" name="ename" class="form-control" placeholder="Name" required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 *--md-0">
                  <label class="text-black" for="fname">Employer Email ID</label>
                  <input type="text" name="eemail" class="form-control" placeholder="you@yourdomain.com" required>
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Employer Phone No.</label>
                  <input type="text" name="ephone" class="form-control" placeholder="Must be 10 digit" required>
                </div>
              </div>

       
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Register!" class="btn px-4 btn-primary text-white" >
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