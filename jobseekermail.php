<?php
if(isset($_POST['sendmail'])){
$jemail=$_POST['email'];
$subject ="Register Validation ";
$body ="Hey, ";

$sender_email = "From: arthpatel20@gnu.ac.in";                      
if (mail($jemail, $subject, $body, $sender_email)) {
    header("Location :requestdetail.php");
} else {
    
    echo "Email sending failed.";
       }
    }
?>
