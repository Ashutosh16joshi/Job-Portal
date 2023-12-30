<?php

session_start();
$showAlert = false; 
$showError = false; 
$exists=false;
$warning=false;
$sucess=false;

include 'dbcon.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $updatequery = " update company_mst set status='active' where token='$token' ";
    $query = mysqli_query($con,$updatequery);

    if($query){

        if(isset($token)){
            $sucess = "Account updated successfully";
            header('location:loginpage.php');
        }else{
            $showError = "You are logged out.";
            header('location:loginpage.php');
        }
    }else{
        $showError = "Account not updated.";
            header('location:Registrationpage.php');
    }
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
    
    if($exists) {
    echo ' <div class="alert alert-danger 
    alert-dismissible fade show" role="alert">
    
    <strong>Error!</strong> '. $exists.'
    <button type="button" class="close" 
      data-bs-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button> 
    </div> '; 
    }
    
    if($sucess) {
    echo ' <div class="alert alert-success 
    alert-dismissible fade show" role="alert">
    
    <strong>Success!</strong> '. $sucess.'
    <button type="button" class="close" 
    data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button> 
    </div> '; 
    }
    
?>