<?php
session_start();
include 'dbcon.php';

$cemail = $_SESSION['cemail'];

            $email_search= "select * from company_mst where com_email='$cemail'"; 
            $query = mysqli_query($con, $email_search);
            $email_count = mysqli_num_rows($query);
            $row = mysqli_fetch_assoc($query);

                $_SESSION['cid']=$row['com_id'];
                $_SESSION['cname'] = $row['com_name'];
                $_SESSION['caddress'] = $row['com_address'];
                $_SESSION['cemail'] = $row['com_email'];
                $_SESSION['gstno'] = $row['gstin_no'];
                $_SESSION['pincode'] = $row['pincode'];
                $_SESSION['city'] = $row['city'];
                $_SESSION['clogo'] = $row['com_logo'];
                $_SESSION['moto']=$row['com_moto'];
                $_SESSION['com_type']=$row['com_type'];


                header("Location: myprofile.php");
?>