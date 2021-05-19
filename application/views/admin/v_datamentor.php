<div class="content-wrapper">
    <div class="page-title">
      <div class="row">
      <div class="card-body"> 
          <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Tambah Mentor
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                       <div class="mb-30">
                        <h2>Tambah Mentor</h2>
                         <form action="<?php echo base_url()?>Controller_Admin/addDataMentor" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                        <div>
                      <section>
                        <label for="uUsername">Username*</label>
                        <input id="uUsername" name="username_mentor" type="text" class="form-control"><br>
                        <label for="uPassword">Password*</label>
                        <input id="uPassword" name="password_mentor" type="password" class="form-control"><br>
                        <label for="uNama">Nama*</label>
                        <input id="uNama" name="nama_mentor" type="text" class="form-control"><br>
                        <label for="uEmail">Email*</label>
                        <input id="uEmail" name="email_mentor" type="text" class="form-control"><br>
                        <label for="text-2">Personal Kontak*</label>
                        <input id="uPc" name="cp_mentor" type="text" class="form-control"><br>
                        <input id="uFoto" name="foto_mentor" type="file" class="form-control"><br>
                      </section><br>
                      <button type="submit" class="button">
                      <span>Save</span>
                    </a>
                  </form>
              </div>
            </div>
          </div>
      </div>
        </div>
           <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>

    <!-- Tabel Mentor-->
    <div class="row">   
      <div class="col-md-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
            <div class="d-block d-md-flex justify-content-between">
              <div class="d-block">
                <h5 class="card-title pb-0 border-0">Tabel Mentor</h5>
              </div>
                <div class="widget-search ml-0 clearfix">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control" placeholder="Search....">
                </div>
               </div>
             </div>

             <!--Data Mentor-->
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
                    $id = $row['id_mentor'];
                    $foto = $row['foto_mentor'];  
                    $username=$row['username_mentor'];
                    $password=$row['password_mentor'];
                    $nama=$row['nama_mentor'];
                    $email=$row['email_mentor'];
                    $cp=$row['cp_mentor'];
                    $i=$i+1;
                 ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td> <img class="img-fluid avatar-small" src="<?php echo base_url()?>assets/mentor/img/<?php echo $foto; ?>" alt=""> </td>
                    <td><?php echo $username;?></td>
                    <td><?php echo $password;?></td>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $cp;?></td>
                    <td>
                    <a href="<?php echo base_url()?>Controller_Mentor/deleteDataMentor/<?php echo $id?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');">Hapus</button></a>
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