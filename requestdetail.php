
<?php 
include 'header.php';
include 'dbcon.php';
$id=$_SESSION['cid'];
$query1="select * from company_mst a,job_post b,jobseeker_mst c,jobseeker_apply e where a.com_id = e.com_id and b.jobpost_id = e.p_id and c.j_id= e.j_id and a.com_id=$id;";
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
          <h2 class="section-title mb-2">Jobseeker Applied list</h2>
          </div>
        </div>
        <?php
// post job details to display in card format
while($row = mysqli_fetch_array($query)){
  echo"
  <ul class='job-listings mb-5'style='height: 177px;'>
  <li class='job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center'style='height: 177px;'> 
  <a href='view_detail.php?pid=$row[jobpost_id]&jid=$row[j_id]'></a>
  <div class='job-listing-logo'>
    <img src='../../../images/$row[j_photo]' alt='Free Website Template by Free-Template.co' class='img-fluid'>
  </div>
  
  <div class='job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4'>
  <div class='job-listing-position custom-width w-50 mb-4 mb-sm-0'>
    <h2>$row[j_name]</h2>
    <p style='margin:auto;'>$row[j_gender]</p>
    <strong>Request for $row[jobp_title]</strong> 
  </div>
  <div class='job-listing-location mb-4 mb-sm-0 custom-width w-25' >
    <p style='margin:auto;' class='icon-room'>$row[city]</p>
    <p style='margin:auto;'>$row[phone_no]</p>
    <p style='margin:auto;'>$row[j_email]</p>
  </div>
  <div class='job-listing-meta' style='margin-top: auto; margin-bottom: auto;'>
   <input name='viewbtn' value='More detalis'  class='btn px-19 btn-primary text-white' style='width: 60%;' >
  
  </div>
</div>
  </li>
  </ul> ";}}?>
    </section>


    <?php include 'footer.php';?>
  </body>
</html>