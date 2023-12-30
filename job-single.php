
<!doctype html>
<html lang="en">
<?php include 'header.php';?>
<?php 
include 'dbcon.php';
$id=$_GET["pid"];
$query1="select * from company_mst a,job_post b where a.com_id=b.com_id and b.jobpost_id=$id";
$query = mysqli_query($con, $query1) ;
$count=mysqli_affected_rows($con);
if($count == 0) // returns how many rows are affected by query
{  echo "Record not found";  }  // returns 0 in case of no row found.
else
{ 
$row = mysqli_fetch_array($query);?>
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
               <?php echo "<img src='../../../images/$row[com_logo]'  alt='Image' style='height: 120px;width: 120px;'>";?>
              </div>
              <div>
                <h2><?php echo $row['jobp_title']; ?></h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo $row['com_name']; ?></span>
                  <span class="m-2"><span class="icon-room mr-2"></span><?php echo $row['com_address']; ?></span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-success"><?php echo $row['jobp_workstatus']; ?></span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <!-- <figure class="mb-5"><img src="images/job_single_img_1.jpg" alt="Image" class="img-fluid rounded"></figure> -->
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
              <p><?php echo $row['jobp_about']; ?></p>
              
            </div>
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $row['jobp_responsibilities']; ?></span></li>
              </ul>
            </div>

           <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
              <ul class="list-unstyled m-0 p-0">
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo $row['jobp_eduDetail']; ?></span></li>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo "Minmum experience ".$row['jobp_experience']; ?></span></li>
              </ul>
            </div>
            <div class="row mb-5">
              <div class="col-6">
              <a href='post-job.php' class='btn btn-block btn-primary btn-md'>Back</a>
              </div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong><?php echo $row['jobp_date']; ?></li>
                <li class="mb-2"><strong class="text-black">Vacancy:</strong><?php echo $row['jobp_vacancy']; ?></li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong><?php echo $row['jobp_workstatus']; ?></li>
                <li class="mb-2"><strong class="text-black">Experience:</strong><?php echo $row['jobp_experience']; ?></li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php echo $row['city']; ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong><?php echo $row['jobp_gender']; ?></li>
                <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?php echo $row['jobp_lastdate']; ?></li>
              </ul>
            </div>

           

          </div>
        </div>
      </div>
    </section>
  </div>
  <?php }?>
  <?php include 'footer.php';?>
     
  </body>
</html>