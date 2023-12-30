<?php
session_start();
   

              if (isset($_POST['save']) && (isset($_SESSION['cid']))) {

                include "dbcon.php";
                
              $j_boardDegree = mysqli_real_escape_string($con, $_POST['j_boardDegree']);
              $j_schoolUniversity = mysqli_real_escape_string($con, $_POST['j_schoolUniversity']) ;
              $j_passingYear = mysqli_real_escape_string($con, $_POST['j_passingYear']);
              $j_percentage = mysqli_real_escape_string($con, $_POST['j_percentage']);
             
                
              $com_id = $_SESSION['cid'];

              $insertquery = " insert into jobseeker_education(com_id,j_boardDegree,j_schoolUniversity,j_passingYear,j_percentage) values('$com_id','$j_boardDegree','$j_schoolUniversity','$j_passingYear','$j_percentage') ";

                  $iquery = mysqli_query($con,$insertquery);

                  if($iquery){

                    echo "record inserted";
                    header("Location: myprofile.php");
                  } 


                }
          ?>



                