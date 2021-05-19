<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Edit Profile</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/halamanUtama/img/core-img/logowbb.png" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/mentor/css/style.css" />
 
</head>
<body>
	<div class="page-title">
      <div class="row">
      <div class="card-body"> 
          <div class="card-body">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                       <div class="mb-30">
                        <h2>Edit Profile</h2>
                          <?php
                            foreach ($data->result_array() as $row) :
                            $id=$row['id_mentor'];
                            $username=$row['username_mentor'];
                            $pass=$row['password_mentor'];
                            $nama=$row['nama_mentor'];
                            $email=$row['email_mentor'];
                            $cp=$row['cp_mentor'];
                            $foto=$row['foto_mentor'];
                          ?>
                        <div class="card-body">
                        <div>
                        <form action="<?php echo base_url()?>Controller_Mentor/editProfileMentor/" method="post" enctype="multipart/form-data">
                      <section>
                        <label for="uUsername">Username</label>
                        <input type="hidden" name="id_mentor" value="<?php echo $id?>">
                        <input id="uUsername" name="username_mentor" type="text" class="form-control" value="<?php echo $username;?>"><br>
                        <label for="uPassword">Password</label>
                        <input id="uPassword" name="password_mentor" type="password" class="form-control" value="<?php echo $pass;?>"><br>
                        <label for="uNama">Nama</label>
                        <input id="uNama" name="nama_mentor" type="text" class="form-control" value="<?php echo $nama;?>"><br>
                        <label for="uEmail">Email</label>
                        <input id="uEmail" name="email_mentor" type="text" class="form-control" value="<?php echo $email;?>"><br>
                        <label for="uCp">Personal Kontak</label>
                        <input id="uCp" name="cp_mentor" type="text" class="form-control" value="<?php echo $cp;?>"><br>
                          <?php
                            $id_mentor=$this->session->userdata('id');
                            $temp = $this->db->query("SELECT * FROM tbl_mentor WHERE id_mentor='$id_mentor'");
                            $temps = $temp->row_array();
                          ?>
                        <img src="<?php echo base_url().'assets/mentor/img/'.$temps['foto_mentor'];?>" width =200px;> <br> <br>
                        <input id="ufoto" name="foto_mentor" type="file" class="form-control"><br>
                      </section><br>
                       <?php endforeach; ?>
                      <button type="submit"class="button"><span>Perbarui Profile</span> </button>
                    <a href="<?php echo base_url()?>Controller_Mentor" class="button">
                      <span>Cancel</span>
                    </a>
                    </form>
              </div>
            </div>
          </div>
      </div>
        </div>
        </div>
              </div>
          </div>
      </div>
      </div>
    </div>


<!--=================================
 jquery -->

<!-- jquery -->
<script src="<?php echo base_url()?>assets/mentor/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url()?>assets/mentor/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url()?>assets/mentor/js/';</script>

<!-- chart -->
<script src="<?php echo base_url()?>assets/mentor/js/chart-init.js"></script>

<!-- calendar -->
<script src="<?php echo base_url()?>assets/mentor/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="<?php echo base_url()?>assets/mentor/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="<?php echo base_url()?>assets/mentor/js/morris.init.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/mentor/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url()?>assets/mentor/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="<?php echo base_url()?>assets/mentor/js/toastr.js"></script>

<!-- validation -->
<script src="<?php echo base_url()?>assets/mentor/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/mentor/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/mentor/js/custom.js"></script>
 
</body>
</html>