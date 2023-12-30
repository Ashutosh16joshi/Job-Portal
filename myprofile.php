<?php include 'header.php';

include "dbcon.php";

$email_search= "select * from company_employer "; 
$query = mysqli_query($con, $email_search);
$email_count = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);


?>

          

    <!-- HOME -->
    <section  style="height: 10px; padding-top:3em;" id="home-section"  >
    
    </section>
     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    <section class="section profile">
     <div class="row" style="margin-top:12px;margin-bottom:12px;;margin-right: 15px; margin-left: 15px;">
        <div class="col-xl-4" style="    padding-right: 2px; padding-left: 15px;">
      
          <div class="card "style="height: 350px;"> 
            
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="../../../images/<?php echo $_SESSION['clogo']; ?>" style="height:189px;width: 240pxpx;" alt="Profile" class="rounded-circle">
              <h2><?php echo $_SESSION['cname']; ?> </h2>
              <!-- <h3>Web Designer</h3> -->
              <!-- <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div> -->
            </div>
          </div>

        </div>

        <div class="col-xl-8">
          <div class="card" >
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Empoyer Settings</button>
                </li>
<!-- 
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password" >Education Detail</button>
                </li> -->

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                 
                  <h5 class="card-title">Company Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Company Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['cname']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Slogan/Tagline</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['moto']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Company Type</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['com_type']; ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['caddress']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['cemail']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">GST IN Number</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['gstno']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pincode</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['pincode']; ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">City</div>
                    <div class="col-lg-9 col-md-8"><?php echo $_SESSION['city']; ?></div>
                  </div>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!--  company Profile Edit Form -->
                  <form action="update.php" method="post" enctype="multipart/form-data">
                  <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">company Logo</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="../../../images/<?php echo $_SESSION['clogo']; ?>" alt="Profile">
                        <div class="pt-2">
                          <label class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"><input type="file" name="file" id="file" hidden></i></label>
                          <label class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></label>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Company Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="cname" type="text" class="form-control" id="fullName" value="<?php echo $_SESSION['cname']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="moto" class="col-md-4 col-lg-3 col-form-label">Slogan/Tagline</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="moto" class="form-control" id="moto" style="height: 70px" value=" <?php echo $_SESSION['moto']; ?> " ><?php echo $_SESSION['moto']; ?></textarea>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="moto" class="col-md-4 col-lg-3 col-form-label">Company Type</label>
                      <div class="col-md-8 col-lg-9">
                    <select class="selectpicker border rounded" name="com_type"  data-style="btn-black" data-width="100%" data-live-search="true" title="Types Of Business Entities" required>
                    <option>Public Limited Company</option>
                    <option>Private Limited Company</option>
                    <option>Joint-Venture Company</option>
                    <option>Partnership Firm</option>
                    <option>One Person Company</option>
                    <option>Sole Proprietorship</option>
                    <option>Branch Office</option>
                    <option>Non-Government Organization(NGO)</option>
                  </select>
                  </div>
                    </div>
                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Company Address</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="caddress" type="text" class="form-control" id="company" value="<?php echo $_SESSION['caddress']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Company Email</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="cemail" type="text" class="form-control" id="Job" value="<?php echo $_SESSION['cemail']; ?>" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Country" class="col-md-4 col-lg-3 col-form-label">GST IN Number</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="gstno" type="text" class="form-control" id="Country" value="<?php echo $_SESSION['gstno']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Address" class="col-md-4 col-lg-3 col-form-label">Pincode</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="pincode" type="text" class="form-control" id="Address" value="<?php echo $_SESSION['pincode']; ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">city</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="city" type="text" class="form-control" id="Phone" value="<?php echo $_SESSION['city']; ?>">
                      </div>
                    </div>
                  
                    <div class="text-center">
                      <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                    </div>
</form>
                </div>
<?php
$com_id=$_SESSION['cid'];
$email_search= "select * from company_employer where com_id=$com_id"; 
$query = mysqli_query($con, $email_search);
$email_count = mysqli_num_rows($query);
$row = mysqli_fetch_assoc($query);
?>
                <div class="tab-pane fade pt-3" id="profile-settings">

                 <!-- company employer Profile Edit Form -->
                 <form action="" method="post" enctype="multipart/form-data">
                

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Employer Name</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="ename" type="text" class="form-control" id="fullName" value="<?php echo $row['emp_name'];?>">
                      </div>
                    </div>


                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">Employer Email ID </label>
                      <div class="col-md-8 col-lg-9">
                        <input name="eemail" type="text" class="form-control" id="company" value="<?php echo $row['emp_email'];?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Job" class="col-md-4 col-lg-3 col-form-label">Employer Phone No.</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="ephone" type="text" class="form-control" id="Job" value="<?php echo $row['emp_phone'];?>">
                      </div>
                    </div>

                   

                 
                    <div class="text-center">
                      <button type="submit" name="update" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End company employer Profile Edit Form -->
                </div>



                <!-- <div class="tab-pane fade pt-3" id="profile-change-password">
                          
                  <form action="updateEdu.php" method="post"><!-- Change Password Form -->

                    <!-- <div class="form-group">
                <select class="selectpicker border rounded" name="j_boardDegree" data-style="btn-black" data-width="100%" data-live-search="true" title="Board/Degree">
                  <option>10th</option>
                  <option>12th</option>
                  <option>Diploma</option>
                  <option>Masters/Post-Graduation</option>
                </select>
              </div> -->

              <!-- <div class="form-group">
               
                <select class="selectpicker border rounded" name="j_schoolUniversity"  data-style="btn-black" data-width="100%" data-live-search="true" title="School/University">
                  <option>School</option>
                  <option>University</option>    
                </select>
              </div> -->

              <!-- <div class="form-group">
               
               <select class="selectpicker border rounded" name="j_passingYear"  data-style="btn-black" data-width="100%" data-live-search="true" title="Passing Year">
                 <option>2022</option>
                 <option>2021</option>
                 <option>2020</option>
                 <option>2019</option>
                 <option>2018</option>
                 <option>2017</option>
                 <option>2016</option>
                 <option>2015</option>
                 <option>2014</option>
                 <option>2013</option>
                 <option>2012</option>
                 <option>2011</option>
                 <option>2010</option>
                 <option>2009</option>
                 <option>2008</option>
                 <option>2007</option>
                 <option>2006</option>
                 <option>2005</option>
                 <option>2004</option>
                 <option>2003</option>
                 <option>2002</option>
                 <option>2001</option>
                 <option>2000</option>
                  </select>
             </div> -->

                    <!-- <div class="form-group">
                <select class="selectpicker border rounded" name="j_percentage"  data-style="btn-black" data-width="100%" data-live-search="true" title="Percentage">
                  <option value='< 35%'>< 35%</option>
                  <option value='36-50%'>36-50%</option>
                  <option value='51%-60%'>51%-60%</option>
                  <option value='61%-70%'>61%-70%</option>
                  <option value='71%-80%'>71%-80%</option>
                  <option value='81%-90%'>81%-90%</option>
                  <option value='91%-99%'>91%-99%</option>
                  <option value='100%'>100%</option>
                </select>
              </div>                  -->

                    <!-- <div class="text-center">
                      <button type="submit" name="save" class="btn btn-primary">Save Detail</button>
                    </div>
                  </form>

                </div> -->
       
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
  
 <?php include 'footer.php';?>
  </body>
</html>