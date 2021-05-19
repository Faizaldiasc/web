<!--=================================
 Main content -->


 <!--=================================
wrapper -->
  <div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Data Siswa </h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>Controller_Mentor" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div>
        </div>
    </div>

    <!-- main body --> 
    <div class="row">   
      <div class="col-md-12 mb-30">     
        <div class="card card-statistics"> 
          <div class="card-body">
            <div class="d-block d-md-flex justify-content-between">
              
              <div class="d-block d-md-flex clearfix sm-mt-20">
               </div>
             </div>
              <div class="table-responsive mt-20">
              <table class="table center-aligned-table">
                <thead>
                  <tr class="text-dark">
                    <th>No.</th>
                    <th>Foto</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone </th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $i=0;
                  foreach ($data->result_array() as $row) :    
                  $id = $row['id_user'];
                  $foto = $row['foto_user'];          
                  $nama = $row['username_user'];                  
                  $email = $row['email_user'];
                  $hp = $row['cp_user'];
                  $i=$i+1;
                ?>
                  <tr>
                    <td><?php echo $i?>
                    <td> <img class="img-fluid avatar-small" src="<?php echo base_url()?>assets/registerUser/images/<?php echo $foto; ?>" alt=""> </td>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $hp;?></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            </div>
        </div>   
      </div> 
  </div>

 <!--=================================
 wrapper -->
      
 
 
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