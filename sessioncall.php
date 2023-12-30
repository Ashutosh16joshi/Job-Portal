<?php
session_start();

include 'dbcon.php';
$cemail=$_SESSION['cemail'];
    $emailquery = " select * from company_mst where com_email='$cemail' ";
    $query = mysqli_query($con, $emailquery);
    $email_count = mysqli_num_rows($query);
    if($email_count){
        $row = mysqli_fetch_assoc($query);
    $_SESSION['cid']=$row['com_id'];
    ?>
                <script>
                location.replace("employer.php");
            </script>
            <?php


    }
?>