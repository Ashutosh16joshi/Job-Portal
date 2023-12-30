<?php include 'header.php';?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Feedback</h1>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <a href="feadback.php">Feedback</a> <span class="mx-2 slash"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    if(isset($_POST['submit'])){
      $fname = mysqli_real_escape_string($con, $_POST['fname']);
      $lname = mysqli_real_escape_string($con, $_POST['lname']) ;
      $subject = mysqli_real_escape_string($con, $_POST['subject']);
      $msg = mysqli_real_escape_string($con, $_POST['msg']);
      
      $j_id=$_SESSION['jid'];
      $name= $fname ." ". $lname;
      
        $insertquery = "insert into j_feadback (name,subject,message,j_id) values('$name','$subject','$msg','$j_id')";
        $iquery = mysqli_query($con,$insertquery); 
      
    }
    ?>
    <section class="site-section" id="next-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" name="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" name="lname" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" name="subject"  class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea  name="msg" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" name="submit" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="p-4 mb-3 bg-white">

            </div>
          </div>
        </div>
      </div>
    </section>

    
    
    <?php include 'footer.php';?>
     
  </body>
</html>