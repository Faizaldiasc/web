<div class="content-wrapper">
    <div class="page-title">
      <div class="row">
      <div class="card-body"> 
      <div class="row">   
      <div class="col-md-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
            <div class="d-block d-md-flex justify-content-between">
              <div class="d-block">
                <h5 class="card-title pb-0 border-0">Tabel Kelas</h5>
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
                    <th>Nama Kelas</th>
                    <th>Jadwal</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  foreach ($data->result_array() as $row) : 
                  $id = $row['id_kursus'];                  
                  $nama = $row['nama_kelas'];
                  $jadwal = $row['jadwal'];
                  $deskripsi = $row['deskripsi_kelas'];
                  $status = $row['status'];
                ?>
                  <tr>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $jadwal;?></td>
                    <td><?php echo $deskripsi;?></td>
                    <td>
                    <?php if($status==0):?> 
                      <a href="<?php echo base_url()?>Controller_Admin/updatestatus/<?php echo $id?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Konfirmasi</button></a>
                      <?php else:?>
                      <?php endif;?>
                      <a href="<?php echo base_url()?>Controller_Admin/deleteDataKursus/<?php echo $id?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="return confirm('Apakah anda yakin untuk menghapus kelas ini?');">Hapus</button></a>
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