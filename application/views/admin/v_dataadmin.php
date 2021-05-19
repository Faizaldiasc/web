<div class="content-wrapper">
    <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> </h4>
          </div>
          <div class="card card-statistics mb-30">
    </div>
  </div>
</div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-md-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
            <div class="d-block d-md-flex justify-content-between">
              <div class="d-block">
                <h5 class="card-title pb-0 border-0">Tabel Admin</h5>
              </div>
             
                <div class="widget-search ml-0 clearfix">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control" placeholder="Search....">
                </div>
               </div>
             </div>
    <div class="table-responsive mt-20">
              <table class="table center-aligned-table">
                <thead>
                  <tr class="text-dark">
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>Email </th>
                  </tr>
                </thead>
                <tbody>
                    <?php       
                    foreach ($data->result_array() as $row) :
                    $username=$row['username_admin'];
                    $password=$row['password_admin'];
                    $nama=$row['nama_admin'];
                    $email=$row['email_admin'];
                 ?>
                  <tr>
                    <td><?php echo $username;?></td>
                    <td><?php echo $password;?></td>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $email;?></td>
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
 footer -->

    
    </div><!-- main content wrapper end-->
  </div>
 </div>
</div>

<!--=================================
 footer -->



<!--=================================
 jquery -->

<!-- jquery -->
<script src="<?php echo base_url()?>assets/admin/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="<?php echo base_url()?>assets/admin/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '<?php echo base_url()?>assets/admin/js/';</script>

<!-- chart -->
<script src="<?php echo base_url()?>assets/admin/js/chart-init.js"></script>

<!-- calendar -->
<script src="<?php echo base_url()?>assets/admin/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="<?php echo base_url()?>assets/admin/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="<?php echo base_url()?>assets/admin/js/morris.init.js"></script>

<!-- datepicker -->
<script src="<?php echo base_url()?>assets/admin/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="<?php echo base_url()?>assets/admin/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="<?php echo base_url()?>assets/admin/js/toastr.js"></script>

<!-- validation -->
<script src="<?php echo base_url()?>assets/admin/js/validation.js"></script>

<!-- lobilist -->
<script src="<?php echo base_url()?>assets/admin/js/lobilist.js"></script>
 
<!-- custom -->
<script src="<?php echo base_url()?>assets/admin/js/custom.js"></script>
  
</body>
</html>