
<!doctype html>
<html lang="en">
<?php include 'header.php';?>
<?php 
include 'dbcon.php';

$id=$_SESSION['cid'];

$jid=$_GET['jid'];
$pid=$_GET['pid'];



$query1="select * from company_mst a,job_post b,jobseeker_mst c,jobseeker_apply e,jobseeker_education d where a.com_id = e.com_id and b.jobpost_id = $pid and c.j_id= $jid and a.com_id=$id and e.j_id=$jid and d.j_id=$jid;";
$query = mysqli_query($con, $query1) ;
$count=mysqli_affected_rows($con);
if($count == 0) // returns how many rows are affected by query
{  echo "Record not found";  }  // returns 0 in case of no row found.
else
{ 
$row = mysqli_fetch_array($query);

?>


    <section class="site-section">
      <div >

        <!-- <div class="row align-items-center mb-5">
          
          <div class="col-lg-4">
            <div class="row">
              <div class="col-6"> 
                 <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a> 
               </div>
              
            </div>
          </div>
        </div> -->
        <div class="row">
          
          <div class="col-lg-11">
            
            <div class="bg-light p-3 border rounded mb-4">
              <div class=" border p-2 d-inline-block mr-3 rounded ">
            <?php echo "<img src='../../../images/$row[j_photo]'  alt='Image' style='height: 200px;width: 200px;'>";?>
              </div>
              <div>
                <h2 class="mt-3 h2 pl-3 mb-3 ">  <?php  echo $row['j_name'];  ?></h2>
             
              </div>
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 "><?php echo $row['j_email']; ?></h3>
              <ul class="list-unstyled pl-3 mb-0">
                <div class="row">
                  <div class="col-xl-5">
                <li class="mb-2"><strong class="text-black">Phone No : </strong><?php echo $row['phone_no']; ?></li>
                <li class="mb-2"><strong class="text-black">Job Experience : </strong><?php echo $row['j_work_status']; ?></li>
                <li class="mb-2"><strong class="text-black">City : </strong><?php echo $row['c_city']; ?></li>
                <li class="mb-2"><strong class="text-black">Pincode : </strong><?php echo $row['c_pincode']; ?></li>
</div>
                <div class="col-xl-5">
                <li class="mb-2"><strong class="text-black">About : </strong> <?php echo $row['j_msg']; ?></li>
                
                <li class="mb-2"><strong class="text-black">Gender:</strong><?php echo $row['j_gender']; ?></li>
                <li class="mb-2"><strong class="text-black">Specialization : </strong> <?php echo $row['j_specialization']; ?></li>
</div>
</div>
</br>
<div class="row">
<div class="col-8">
<table class="table">
    <thead class="table-dark">
        <tr>
            
            <th>Board/Degree</th>
            <th>School/University</th>
            <th>Passing Year</th>
            <th>Percentage</th>
           
</tr>
    </thead>

    <tbody>
        
        <?php 
            $query1 = "SELECT * FROM jobseeker_education where j_id=$row[j_id]";
            $select_users = mysqli_query($con, $query1) or die(mysqli_error($con));
            if (mysqli_num_rows($select_users) > 0 ) {
            while ($row1 = mysqli_fetch_array($select_users)) {
                $j_boardDegree = $row1['j_boardDegree'];
                $j_schoolUniversity = $row1['j_schoolUniversity'];
                $j_passingYear = $row1['j_passingYear'];
                $j_percentage = $row1['j_percentage'];
                echo "<tr>";
                echo "<td>$j_boardDegree</td>";
                echo "<td>$j_schoolUniversity</td>";
                echo "<td>$j_passingYear</td>";
                echo "<td>$j_percentage</td>";
                echo "</tr>";
             }}
        ?>

    </tbody> 
 </table>
            </div>
            </div>
            </br>
                <div class="row">
                <div class="col-xl-2">
                <a download="<?php echo $row['j_resume'];?>" href="../../../resume/<?php echo $row['j_resume'];?>" class='btn btn-block btn-primary btn-md'>Download Resume</a>
              </div>

              
              <div class="col-xl-2">

              <form action="jobseekermail.php" method="post">
                            <input type="hidden" name="email" value="<?php echo $row['j_email']; ?>">
                            <input type="submit" name="sendmail" value="Send Email" class='btn btn-block btn-primary btn-md'>
              </form>  
              </div>    
              <div class="col-xl-2">  
              <form action="deleterecode.php" method="post">
                            <input type="hidden" name="applyid" value="<?php echo $row['id']; ?>">
                            <input type="submit" name="delete" value="Delete" class='btn btn-block btn-danger btn-md'>
              </form>  
            </div>
            </div>
              </ul>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php }?>
  <?php include 'footer.php';?>
     
  </body>
</html>