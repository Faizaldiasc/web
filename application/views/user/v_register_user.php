<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

<title>Register User</title>


<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/registerUser/css/stylee.css" />

<!-- Fav Icon-->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/halamanUtama/img/core-img/logowbb.png" />

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


</head>
<body>

 <div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
   <img src="<?php echo base_url()?>assets/registerUser/img/loader.gif" alt="Preloader image">
</div>

<!--=================================
 preloader -->

 
<!--=================================
 register-->

<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url(<?php echo base_url()?>assets/halamanUtama/img/core-img/texture.png);">
  <div class="container">
     <div class="row no-gutters">
       <div class="col-lg-4 offset-lg-1 col-md-6 login-fancy-bg" >
         <div class="login-fancy">
          <h2 class="text-white mb-20">Bergabung Bersama Warung Belajar</h2>
          <ul class="list-unstyled pos-bot pb-30">
          </ul>
         </div> 
       </div>
       <div class="col-lg-4 col-md-6 bg-white">
        <div class="login-fancy pb-40 clearfix">
        <button type="button" class="close" aria-label="Close" onclick="window.location.href='<?php echo base_url()?>'">
        <span aria-hidden="true">&times;</span>
        <link rel="stylesheet" type="text/css" href="">
        </button>
        <h3 class="mb-30">Sign Up</h3>
        <form action="<?php echo base_url()?>Main_Controller/addData" method="post" enctype="multipart/form-data">
            <div class="section-field ">
         <div class="input-group mb-3">
         <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">
            <i class="ion-ios-person-outline"></i>
          </span>
         </div>
          <input type="text" name="username_user"class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
            </div>
           <div class="input-group mb-3">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1">
               <i class="ion-ios-locked-outline"></i>
             </span>
            </div>
              <input type="Password" name="password_user" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1"required>
            </div>
             <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
              <div class="input-group mb-3">
              <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1">
               <i class="ion-ios-checkmark-outline"></i>
             </span>
            </div>
              <input type="Password" name="password_user2" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1"required>
            </div>
             <div class="input-group mb-3">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1">
               <i class="ion-ios-person-outline"></i>
             </span>
            </div>

              <input type="text" name="nama_user" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1"required>
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1">
               <i class="ion-ios-email-outline"></i>
             </span>
            </div>
              <input type="text" name="email_user" class="form-control" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1"required>
            </div>
              <div class="input-group mb-3">
            <div class="input-group-prepend">
             <span class="input-group-text" id="basic-addon1">
               <i class="ion-ios-checkmark-outline"></i>
             </span>
            </div>
              <input type="text" name="cp_user" class="form-control" placeholder="Contact Person" aria-label="Username" aria-describedby="basic-addon1"required>
          <div>
              <input type="file" name="foto_user" class="form-control" placeholder="foto user" required>
            </div>
            <?php
                      $info = $this->session->flashdata('info2');
                      if (!empty($info)){
                        echo $info;
                      }
            ?>  
              <button type="submit" class="button">Continue</button>  
              </a>
            </form>
          </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 register-->
</div>

<!--=================================
 jquery -->
<!-- jquery -->
<script src="<?php echo base_url()?>assets/registerUser/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url()?>assets/registerUser/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url()?>assets/registerUser/js/';</script>

<!-- chart -->
<script src="<?php echo base_url()?>assets/registerUser/js/chart-init.js"></script>

<!-- calendar -->
<script src="<?php echo base_url()?>assets/registerUser/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="<?php echo base_url()?>assets/registerUser/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="<?php echo base_url()?>assets/registerUser/js/morris.init.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/registerUser/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url()?>assets/registerUser/js/sweetalert2.all.js"></script>

<!-- MyScript -->
<script src="<?php echo base_url()?>assets/registerUser/js/myscript.js"></script>

<!-- toastr -->
<script src="<?php echo base_url()?>assets/registerUser/js/toastr.js"></script>

<!-- validation -->
<script src="<?php echo base_url()?>assets/registerUser/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/registerUser/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/registerUser/js/custom.js"></script>
</body>
</html>