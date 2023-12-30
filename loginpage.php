<?php

$showAlert = false; 
$showError = false; 
$exists=false;
$warning=false;
$sucess=false;

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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

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

    <!-- HOME -->
    <!-- <section class="section-hero overlay inner-page bg-image" style="background-image: url(images/companyProfile.jpg);" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7"> 
            <h1 class="text-white font-weight-bold">Sign Up/Registration</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Registration Form </strong></span>
            </div>
          </div>
        </div>
      </div>
    </section> -->

<!-- 
    <section class="section-hero overlay inner-page bg-image" style="
    height: 10px; padding-top: 3em; background-color:#1e98d1cb;
     " id="home-section">
       <div class="container">
         <div class="row">
           <div class="col-md-7">
             
           </div>
         </div>
       </div>
     </section> -->
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 mb-5">



        
            <center><h2 class="mb-4"><b>Login Page</b></h2></center> 
              

            <?php

include 'dbcon.php';

 if(isset($_POST['submit'])){

   $cemail = $_POST['cemail'];
   $cpassword = $_POST['cpassword'];
 
 

  $email_search= "select * from company_mst where com_email='$cemail' and status='active' "; 
  $query = mysqli_query($con, $email_search);
  $email_count = mysqli_num_rows($query);
   if($email_count){
  $row = mysqli_fetch_assoc($query);
  $db_pass = $row['password'];
 
 // $_SESSION['cname'] = $row['cname'];
  // $pass_decode = ($cpassword, $db_pass);
  if ($db_pass === $cpassword ){
      $sucess = "Login Successful";
  $_SESSION['cid']=$row['com_id'];
  $_SESSION['crid']=$row['com_id'];
      $_SESSION['cname'] = $row['com_name'];
      $_SESSION['caddress'] = $row['com_address'];
      $_SESSION['cemail'] = $row['com_email'];
      $_SESSION['gstno'] = $row['gstin_no'];
      $_SESSION['pincode'] = $row['pincode'];
      $_SESSION['city'] = $row['city'];
      $_SESSION['clogo'] = $row['com_logo'];
      $_SESSION['about'] = $row['com_type'];
      $_SESSION['moto']=$row['com_moto'];
      $_SESSION['com_type']=$row['com_type'];
      ?>
    <script>
          location.replace("index.php");
      </script>

      <?php
    
  }else{
    $showError = "Password incorrect";

  }
  
}else{
  $showError= "Invalid Email";
}
}
?>


<?php



if($showError) {

echo ' <div class="alert alert-danger 
  alert-dismissible fade show" role="alert"> 
<strong>Error!</strong> '. $showError.'
<button type="button" class="close" 
data-bs-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button> 
</div> '; 
}

if($exists) {
echo ' <div class="alert alert-danger 
alert-dismissible fade show" role="alert">

<strong>Error!</strong> '. $exists.'
<button type="button" class="close" 
  data-bs-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
</button> 
</div> '; 
}

if($sucess) {
echo ' <div class="alert alert-success 
alert-dismissible fade show" role="alert">

<strong>Success!</strong> '. $sucess.'
<button type="button" class="close" 
data-bs-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
</button> 
</div> '; 
}

?>








        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="p-4 border rounded">
 
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname" >Email ID</label>
                  <input type="email" name="cemail" class="form-control" value="">
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
