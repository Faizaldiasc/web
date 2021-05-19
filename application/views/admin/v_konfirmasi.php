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
                <h5 class="card-title pb-0 border-0">Tabel Konfirmasi</h5>
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
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                     <?php       
                    foreach ($data->result_array() as $row) :
                        $id = $row['id_ambil'];
                        $status = $row['status'];
                        $nama = $row['nama_user'];
                        $kelas = $row['nama_kelas'];  
                        $tanggal =$row['tanggal'];
                    ?>
                  <tr>
                    <td><?php echo $nama;?></td>
                    <td><?php echo $kelas;?></td>
                    <td><?php echo $tanggal;?></td>
                    <td> <?php if ($status==0) : ?>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                      Konfirmasi
                      </button>
                      <?php else :?>
                         <button type="button" class="btn btn-success">
                      Joined
                      </button>
                      <?php endif;?>
                      <?php endforeach; ?> 
                    </td>
                  </tr>
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="modal-title" id="exampleModalLabel">
                       <div class="mb-30">
                        <h2>Konfirmasi Siswa</h2>
                        <div class="card-body">
                        <div>  
                          <p>Apakah anda yakin untuk mengkonfirmasi user ini</p>
                          <a href="<?php echo base_url()?>Controller_Admin/datakonfirmasi/<?php echo $id;?>" class="button">
                            <span>Konfirmasi</span>
                          </a>         
                        </div>
                        </div>
                       </div>
                    </div>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
           </button>
        </div>
        
      </div>
    </div>
  </div>
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