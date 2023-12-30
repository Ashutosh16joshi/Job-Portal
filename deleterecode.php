<?php
include 'dbcon.php';
if(isset($_POST['delete'])){
$id=$_POST['applyid'];
$query="DELETE FROM jobseeker_apply WHERE id=$id";
$data=mysqli_query($con,$query);
if($data){ 
     echo "<script>alert('Are you sure you want to permanently remove this jobseeker details')</script>";
    ?>     
      <meta http-equiv= "refresh" content="0; url = http://localhost/presentation/New%20folder2/ath_validation/jobboard-master/requestdetail.php"/>
   <?php 
    }else{
    echo "Failed to DELETE";
}
}
?>
