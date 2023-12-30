<?php
session_start();

if (isset($_POST['update']) && (isset($_SESSION['cid']))) {

    include "dbcon.php";

    $id = $_SESSION['cid'];
    $cname = $_POST['cname'];
    $moto = $_POST['moto'];
    $caddress = $_POST['caddress'];
    $cemail = $_POST['cemail'];
    $gstno = $_POST['gstno'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $com_type = $_POST['com_type'];
    
    $sql = "UPDATE company_mst
                SET com_name ='$cname',
                    com_moto='$moto',
                    com_type='$com_type',
                    com_address='$caddress',
                    com_email='$cemail',
                    gstin_no='$gstno',
                    pincode='$pincode',
                    city='$city'
                WHERE com_id='$id'";
    mysqli_query($con, $sql);
    header("Location: redirect.php");

}


if (isset($_POST['update']) && (isset($_FILES['file']))) {

    include "dbcon.php";

    $id = $_SESSION['cid'];
    $img_name = $_FILES['file']['name'];
    $img_size = $_FILES['file']['size'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if ($error === 0) {
        if ($img_size > 525000) {
            $em = "Sorry, your file is too large.";
            header("Location: myprofile.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../../../images/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "UPDATE company_mst
                SET com_logo = ('$new_img_name')
                WHERE com_id='$id' ";
                mysqli_query($con, $sql);
                header("Location: redirect.php");
            }
        }
    }
}


?>