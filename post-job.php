<?php 
include 'header.php';
date_default_timezone_set("Asia/Kolkata");
$sucess=false;
$showError = false; 

include 'dbcon.php';
?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>   
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
             
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <!-- <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a> -->
              </div>
              <div class="col-6">
                <!-- <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">

      

<?php
   
   $date = date('m/d/Y h:i:s a', time());
              if (isset($_POST['save']) && (isset($_SESSION['cid']))) {

                include "dbcon.php";
                
              $job_title = mysqli_real_escape_string($con, $_POST['jtitle']);
              $job_workstatus = mysqli_real_escape_string($con, $_POST['jtype']) ;
              $job_about = mysqli_real_escape_string($con, $_POST['jabout']);
              $job_ldate = mysqli_real_escape_string($con, $_POST['jldate']);
              $job_date = mysqli_real_escape_string($con, $date);
              $job_vacancy = mysqli_real_escape_string($con, $_POST['jvacancy']);
              $job_experience = mysqli_real_escape_string($con, $_POST['jexperience']);
              $job_gender = mysqli_real_escape_string($con, $_POST['jgender']);
              $job_responsibilities  = mysqli_real_escape_string($con, $_POST['jresponsibilities']);
              $job_educationDetail = mysqli_real_escape_string($con, $_POST['jedu']);
       
                
              $com_id = $_SESSION['cid'];

              $insertquery = " insert into job_post(com_id,jobp_title,jobp_workstatus,jobp_about,jobp_lastdate,jobp_date,jobp_vacancy,jobp_experience,jobp_gender,jobp_responsibilities,jobp_eduDetail) values('$com_id','$job_title','$job_workstatus','$job_about','$job_ldate','$job_date',' $job_vacancy','$job_experience','$job_gender','$job_responsibilities','$job_educationDetail') ";

                  $iquery = mysqli_query($con,$insertquery);

                  if($iquery){

                    $sucess = "Job Post save ..";
                  }
                  else
                  {
                    $showError = "Data are not save";
                  }
                  } 


                  if($sucess) {
                    echo ' <div class="alert alert-success" role="alert"
                    alert-dismissible fade show">
                    
                    <strong>Success!</strong> '. $sucess.'
                    <button type="button" class="close" 
                    data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button> 
                    </div> '; 
                    }

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
          ?>






            <form class="p-4 p-md-5 border rounded" method="post"  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" >
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
              
              <div class="form-group">
                <label for="email">Company Name</label>
                <input type="text" class="form-control"  value="<?php echo $_SESSION['cname']; ?>"  disabled>
              </div>
              <div class="form-group">
                <label for="job-title">Company Address</label>
                <input type="text" class="form-control"  value="<?php echo $_SESSION['caddress']; ?>" disabled>
              </div>
              <div class="form-group">
                <label for="job-location">City</label>
                <input type="text" class="form-control"  value="<?php echo $_SESSION['city']; ?>" disabled>
              </div>

              <div class="form-group">
                <label for="job-location">Job Title</label>
                <input type="text" class="form-control" name="jtitle"  placeholder=" EX: Product Designer . ." required>
              </div>

              <div class="form-group">
                <label for="job-location">Vacancy</label>
                <input type="text" class="form-control" name="jvacancy"  placeholder=" Write only number . ." required>
              </div>

              <div class="form-group">
                <label for="job-type">Experience</label>
                <select class="selectpicker border rounded" name="jexperience"  data-style="btn-black" data-width="100%" data-live-search="true" title="Select Experience" required>
                  <option>Fresher(s)</option> 
                  <option>1 year(s)</option> 
                  <option>1 to 2 year(s)</option>
                  <option>2 to 3 year(s)</option>
                  <option>3 + year(s)</option>
                </select>
              </div>


              <div class="form-group">
                <label for="job-type">Job Type</label>
                <select class="selectpicker border rounded" name="jtype"  data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type" required>
                  <option>Part Time</option>
                  <option>Full Time</option>
                </select>
              </div>

              <div class="form-group">
                <label for="job-type">Gender</label>
                <select class="selectpicker border rounded" name="jgender"  data-style="btn-black" data-width="100%" data-live-search="true" title="Select Gender" required>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Any of above</option>
                </select>
              </div>

              <div class="form-group">
                <label for="job-description">Job Description</label>
                <textarea name="jabout" class="form-control" placeholder="Write here" required></textarea >
              </div>

              <div class="form-group">
                <label for="job-Responsibilities">Job Responsibilities</label>
                <textarea name="jresponsibilities" class="form-control" placeholder="Write here" required></textarea>
              </div>

              <div class="form-group">
                <label for="job-Education + Experience">Education + Experience</label>
                <textarea name="jedu" class="form-control" placeholder="Write here" required></textarea>
              </div>

              <div class="form-group">
                <label for="job-Validity of job post">Validity of job post</label>
                <input type="date" class="form-control" name="jldate" placeholder="Expired post date" required>
              </div>

          </div>  
        </div>
        <div class="row align-items-center mb-5">
          
        <div class="col-lg-4 ml-auto">
            <div class="row">
              <div class="col-6">
                <a href="preview.php" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
              <input type="submit" name="save" value="Save Job" class="btn btn-block btn-primary btn-md" >
              </div>
              
            </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    
    <?php include 'footer.php';?>
     
  </body>
</html>