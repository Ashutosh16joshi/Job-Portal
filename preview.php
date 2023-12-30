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
            <h1 class="text-white font-weight-bold"><?php echo "$_SESSION[cname]";?> Posted Job List</h1>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Posted Job List</strong></span>   
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
include 'dbcon.php';
$query1="select b.jobpost_id,b.com_id,a.com_logo, a.com_name,a.com_address,a.city,b.jobp_title,b.jobp_workstatus,b.jobp_lastdate from company_mst a,job_post b where b.com_id = $_SESSION[cid] and a.com_id=b.com_id";
$query = mysqli_query($con, $query1) ;
$count=mysqli_affected_rows($con);
if($count == 0) // returns how many rows are affected by query
{  echo "Record not found";  }  // returns 0 in case of no row found.
else
{ ?>
<section class="site-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Recently posted job(s)</h2>
          </div>
        </div>
<?php
// post job details to display in card format
while($row = mysqli_fetch_array($query)){
  echo"  
  <ul class='job-listings mb-5'>
  <li class='job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center'>
  <a href='job-single.php?pid=$row[jobpost_id]'></a>
    <div class='job-listing-logo'>
      <img src='../../../images/$row[com_logo]' alt='Free Website Template by Free-Template.co' class='img-fluid'>
    </div>

    <div class='job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4'>
      <div class='job-listing-position custom-width w-50 mb-4 mb-sm-0'>
        <h2>$row[jobp_title]</h2>
        <strong>$row[com_name]</strong>
        <p>$row[jobp_workstatus]</p> 
      </div>
      <div class='job-listing-location mb-4 mb-sm-0 custom-width w-25' style='margin-top: 3%;'>
        <span class='icon-room'>$row[com_address] ,$row[city]</span>
      </div>
      <div class='job-listing-meta' style='margin-top: auto; margin-bottom: auto;'>
     
      <span class='badge badge-success'>$row[jobp_workstatus]</span>
     
      </div>
    </div>
    
  </li>
  </ul>
  ";
}
}
?>
      
</div>
</div>
</div>
</div> 
</div>
    <?php include 'footer.php';?>
     
     </body>
   </html>