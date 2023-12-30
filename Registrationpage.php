<?php
session_start();
$showAlert = false; 
$showError = false; 
$exists=false;
$warning=false;
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
     
            <center><h2 class="mb-4"><b>Registration Form</b></h2></center> 

            <?php
            // $date = date('m/d/Y h:i:s a', time());
             if(isset($_POST['submit'])){
              include 'dbcon.php';
              // $ename = mysqli_real_escape_string($con, ucwords($_POST ['ename']) );
              // $eemail = mysqli_real_escape_string($con, $_POST['eemail']) ;
              // $ephone = mysqli_real_escape_string($con, $_POST['ephone']);
              // $registerdate = mysqli_real_escape_string($con, date('y/m/d'));

              $cname = mysqli_real_escape_string($con, ucwords($_POST ['cname']) );
              $caddress = mysqli_real_escape_string($con, $_POST['caddress']) ;
              $cemail = mysqli_real_escape_string($con, $_POST['cemail']);
              $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
              $confirmpass = mysqli_real_escape_string($con, $_POST['confirmpass']);
              $gstno = mysqli_real_escape_string($con, $_POST['gstno']);
              $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
              $city = mysqli_real_escape_string($con, ucwords($_POST['city']) );
              // $registerdate = mysqli_real_escape_string($con, $date);
            
              $token =bin2hex(random_bytes(15));
  
              $emailquery = " select * from company_mst where com_email='$cemail' ";
              $query = mysqli_query($con, $emailquery) ;
            
              $emailcount = mysqli_num_rows($query);

              if($emailcount>0){

               $warning= "Email already exists.";
              }
              else{
                if($cpassword === $confirmpass){
                  $_SESSION['cemail']=$cemail; 
                  $insertquery = "insert into company_mst(com_name,com_address,com_email,password,confirm_password,gstin_no,pincode,city,token,status,com_logo) values('$cname','$caddress','$cemail','$cpassword',' $confirmpass','$gstno','$pincode','$city','$token','inactive','IMG-638ec8cd4c1d51.13861055.jpeg')";
                  $iquery = mysqli_query($con,$insertquery);
              
                

                  if($iquery){
                  
              
                      
                       $subject = "Register Validation ";
                       $body = "Hey, there $cname. Click here to activate your account http://localhost/presentation/New%20folder2/ath_validation/jobboard-master/activate.php?token=$token ";
                       $sender_email = "From: arthpatel20@gnu.ac.in";                      
                       if (mail( $cemail, $subject, $body, $sender_email)) {
                        ?>
                        <script>
                        location.replace("sessioncall.php");
                    </script>
                    <?php
                       } else {
                           
                           $showError = "Email sending failed .";
                       
                       }
          
                   }else{
                           $showError = "Fail to register..!! Try again";
                   
                        }
                        }else{
                          
                           $showError = "Passwords do not match."; 
                 
                        }

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

 if($warning) {
  echo ' <div class="alert alert-warning" 
      alert-dismissible fade show" role="alert">

  <strong>Oops!</strong> '. $warning.'
  <button type="button" class="close" 
            data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
       </button> 
 </div> '; 
}

?>
        



        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="p-4 border rounded">

        <h4 class="mb-4">Company Detail :</h4>
        <br>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Company Name</label>
                  <input type="text" name="cname" class="form-control" placeholder="abc pvt ltd." required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 *--md-0">
                  <label class="text-black" for="fname">Company Address</label>
                  <input type="text" name="caddress" class="form-control" placeholder="Company Address" required>
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Company Email ID</label>
                  <input type="email" name="cemail" class="form-control" placeholder="you@yourdomain.com" required>
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0"> 
                  <label class="text-black" for="fname">Password</label>
                  <input type="password" name="cpassword" id="pwd" class="form-control" placeholder="Enter password (More then 8 characters)" required>
              <span> 
                <i class="far fa-eye" id="togglePassword" style="cursor: pointer; position: absolute; right: 28px; margin-top:-26px ;"></i>
              </span>
                </div>
              </div>


          



            <div id="pswd_info">

            <h4 id="ps">Password must meet the following requirements:</h4>
            <ul style="list-style: none";>
                <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                <li id="number" class="invalid">At least <strong>one number</strong></li>
                <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
            </ul>

            </div>


              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Confirm Password</label>
                  <input type="password" name="confirmpass" id="cpwd" class="form-control" placeholder="Confirm Password" required>
                 
                </div>
              </div>
              <div id="pass_message" style="color: red; width: 200px; margin-left: 40px; margin-top:5px;"></div>

              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">GST IN Number</label>
                  <input type="text" name="gstno" class="form-control" placeholder="GST IN No Ex : 24AABCU9603R1ZT" required>
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Pincode</label>
                  <input type="text " name="pincode" class="form-control" placeholder="Pincode No Ex: 383001" required>
                </div>
              </div>                             
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">City</label>
                  <input type="text" name="city" class="form-control" placeholder="City Ex: Mehsana" required>
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
  <script>
    $(document).ready(function (){

      $('#pwd').keyup(function() {
        var pswd = $('#pwd').val();
        if ( pswd.length < 8 ) {
    $('#length').removeClass('valid').addClass('invalid');
} else {
    $('#length').removeClass('invalid').addClass('valid');
}
if ( pswd.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pswd.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pswd.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}
}).focus(function() {
    $('#pswd_info').show();
}).blur(function() {
    $('#pswd_info').hide();
});


      $('#cpwd').keyup(function () {
        var pwd = $('#pwd').val();
        var cpwd = $('#cpwd').val();

        if (cpwd != pwd) {
          $('#pass_message').html(' * Password Not matching');
          return false;
        }else{
          $('#pass_message').html('');
          return true;

        }
      })
    });



  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#pwd');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});



</script>
    
    <?php include 'footer.php';?>
   
     
  </body>
</html>