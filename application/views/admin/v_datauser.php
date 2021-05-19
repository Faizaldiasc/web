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
    <!-- Tabel User --> 
    <div class="row">   
      <div class="col-md-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
            <div class="d-block d-md-flex justify-content-between">
              <div class="d-block">
                <h5 class="card-title pb-0 border-0">Tabel User</h5>
              </div>
              
              <!--Seacrh-->
                <div class="widget-search ml-0 clearfix">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control" placeholder="Search....">
                </div>
               </div>
             </div>

             <!--Data User-->
    <div class="table-responsive mt-20">
              <table class="table center-aligned-table">
                <thead>
                  <tr class="text-dark">
                    <th>No.</th>
                    <th>Foto</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>Email </th>
                    <th>Personal Kontak</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                 <?php       
                    $i=0;
                    foreach ($data->result_array() as $row) :
                    $id = $row['id_user'];
                    $foto = $row['foto_user'];  
                    $username=$row['username_user'];
                    $password=$row['password_user'];
                    $nama=$row['nama_user'];
                    $email=$row['email_user'];
                    $cp=$row['cp_user'];
                    $i=$i+1;
                 ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td> <img class="img-fluid avatar-small" src="<?php echo base_url()?>assets/registerUser/images/<?php echo $foto; ?>" alt=""> </td>
                    <td><?php echo $username;?></td>
                    <td><?php echo $password;?></td>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $cp;?></td>
                    <td>
                  <a href="<?php echo base_url()?>Controller_Admin/deleteDataUser/<?php echo $id?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');">Hapus</button></a>
                  </td>
                  </tr>
                <?php endforeach; ?>     
               </tbody>
              </table>
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
</div>


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