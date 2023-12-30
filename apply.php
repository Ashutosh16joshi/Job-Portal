<?php
session_start();
if($_SESSION['jid'] == null){
  header('location:loginpage.php'); 
}
include 'dbcon.php';
$pid=$_GET["pid"];
$sql1="select com_id from job_post where jobpost_id=$pid";
$data=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($data);
$com_id=$row1['com_id'];
$date= date('Y/m/d');
$jid=$_SESSION['jid'];
$sql="select * from jobseeker_education where j_id=$jid";
$result=mysqli_query($con,$sql);
if($result->num_rows>0){
while($row=mysqli_fetch_array($result)){  
if("University" ===  $row['j_schoolUniversity']){
        $query="insert into jobseeker_apply (com_id,j_id,p_id,apply_date) values('$com_id','$jid','$pid','$date')";
        $data1=mysqli_query($con,$query);
        header("Location: job-single.php?pid=$pid");
}
else{
   echo "Please enter at least bachelor degree or above degree";
}
}
}
else{
  echo "Please enter at least bachelor degree";
}

?>