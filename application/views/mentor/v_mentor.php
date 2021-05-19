<!--=================================
wrapper -->

<div class="content-wrapper">
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6">
        <h4 class="mb-0"> Halaman Guru</h4>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>Controller_Mentor" class="default-color">Home</a></li>
        </ol>
      </div>
    </div>
  </div>

  <!-- widgets -->
  <div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">

    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">

    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">

    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">

    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">

    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 mb-30">

    </div>
  </div>

  <!-- Buka Kelas -->

  <div class="row">
    <div class="col-md-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
          <!-- Large modal -->
          <div>
            <button type="button" class="btn btn-primary float-right mr-20" data-toggle="modal" data-target=".bd-example-modal-lg">Buka Kelas</button>
          </div>


          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body">
                  <div>
                    <h4>&nbsp;</h4>
                    <section>
                      <form action="<?php echo base_url() ?>Controller_Mentor/addDataKursus" method="post" enctype="multipart/form-data">
                        <label for="uName">Nama Kelas*</label>
                        <input id="uName" name="nama_kelas" type="text" class="form-control" required><br>
                        <label for="uKelas">Kelas*</label>
                        <input id="uKelas" name="kelas" type="text" class="form-control"><br>
                        <label for="uJadwal">Jadwal</label>
                        <input id="uJadwal" name="jadwal" type="text" class="form-control"><br>
                        <label for="text-2">Jumlah Siswa*</label>
                        <input name="jumlah_siswa" id="text-1" rows="5" class="form-control" required></input><br>
                        <label for="text-2">Deskripsi*</label>
                        <textarea name="deskripsi_kelas" id="text-2" rows="5" class="form-control" required></textarea><br>
                        <label for="text-2">Upload Gambar Kelas*</label>
                        <input type="file" name="foto_kursus" class="form-control" required>
                        <label for="text-2">Status*</label>
                        <input type="input" name="status" type="text" class="form-control" required>
                    </section><br>
                    <button type="submit" class="button">
                      <span>Tambah Kelas</span>
                      <i class="fa fa-check"></i>
                      </a>
                      </form>
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

  <!-- kelas yang dibuka 1-->

  <div class="row" style="display: block;">
    <div class="card-body">
      <div class="d-block d-md-flex justify-content-between">

        <div class="d-block d-md-flex clearfix sm-mt-20">

        </div>
      </div>
      <div class="table-responsive mt-20">
        <table class="table center-aligned-table">
          <thead>
            <tr class="text-dark">
              <th>Nama Kelas</th>
              <th>Kelas</th>
              <th>Jadwal</th>
              <th>Jumlah Siswa</th>
              <th>Deskripsi</th>
              <th>Enrollment</th>
              <!-- Jumlah pertemuan di hapus -->
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($data->result_array() as $row) :
              $id = $row['id_kursus'];
              $nama = $row['nama_kelas'];
              $kelas = $row['kelas'];
              $jadwal = $row['jadwal'];
              $jumlah_siswa = $row['jumlah_siswa'];
              $deskripsi_kelas = $row['deskripsi_kelas'];
              $enrollment_key = $row['enrollment_key'];
              // $foto_kursus = $row['foto_kursus'];

            ?>
              <tr>
                <td><?php echo $nama; ?></td>
                <td> <?php echo $kelas; ?></td>
                <td> <?php echo $jadwal; ?></td>
                <td> <?php echo $jumlah_siswa; ?></td>
                <td><?php echo $deskripsi_kelas; ?></td>
                <td><?php echo $enrollment_key;?></td>

                <td>
                  <!-- <a href="<?php echo base_url() ?>Controller_Mentor/datasiswa/<?php echo $id ?>">
                    <button type="button" class="btn btn-danger">Lihat Siswa</button></a> -->
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bd-example-modal-lg">Edit Kelas</button></a>
                  <button type="button" class="btn btn-danger">Hapus Kelas</button></a>
                  <a href="<?php echo base_url() ?>Controller_Mentor/uploadmateri/<?php echo $id ?>">
                    <button type="button" class="btn btn-success">Detail</button></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Edit Kelas-->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div>
              <h4>&nbsp;</h4>
              <section>
                <form action="<?php echo base_url() ?>Controller_Mentor/addDataKursus" method="post" enctype="multipart/form-data">
                  <label for="uName">Nama Kelas*</label>
                  <input id="uName" name="nama_kelas" type="text" class="form-control" required><br>
                  <label for="uKelas">Kelas*</label>
                  <input id="uKelas" name="kelas" type="text" class="form-control"><br>
                  <label for="uJadwal">Jadwal</label>
                  <input id="uJadwal" name="jadwal" type="text" class="form-control"><br>
                  <label for="text-2">Jumlah Siswa*</label>
                  <input name="jumlah_siswa" id="text-1" rows="5" class="form-control" required></input><br>
                  <label for="text-2">Deskripsi*</label>
                  <textarea name="deskripsi_kelas" id="text-2" rows="5" class="form-control" required></textarea><br>
                  <label for="text-2">Upload Gambar Kelas*</label>
                  <input type="file" name="foto_kursus" class="form-control" required>
                  <label for="text-2">Status*</label>
                  <input type="input" name="status" type="text" class="form-control" required>
              </section><br>
              <button type="submit" class="button">
                <span>Tambah Kelas</span>
                <i class="fa fa-check"></i>
                </a>
                </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--=================================
 wrapper -->

    <!--=================================
 Main content -->



    <!--=================================
 footer -->



    <!--=================================
 jquery -->

    <!-- jquery -->
    <script src="<?php echo base_url() ?>assets/mentor/js/jquery-3.3.1.min.js"></script>

    <!-- plugins-jquery -->
    <script src="<?php echo base_url() ?>assets/mentor/js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script>
      var plugin_path = '<?php echo base_url() ?>assets/mentor/js/';
    </script>

    <!-- chart -->
    <script src="<?php echo base_url() ?>assets/mentor/js/chart-init.js"></script>

    <!-- calendar -->
    <script src="<?php echo base_url() ?>assets/mentor/js/calendar.init.js"></script>

    <!-- charts sparkline -->
    <script src="<?php echo base_url() ?>assets/mentor/js/sparkline.init.js"></script>

    <!-- charts morris -->
    <script src="<?php echo base_url() ?>assets/mentor/js/morris.init.js"></script>

    <!-- datepicker -->
    <script src="<?php echo base_url() ?>assets/mentor/js/datepicker.js"></script>

    <!-- sweetalert2 -->
    <script src="<?php echo base_url() ?>assets/mentor/js/sweetalert2.js"></script>

    <!-- toastr -->
    <script src="<?php echo base_url() ?>assets/mentor/js/toastr.js"></script>

    <!-- validation -->
    <script src="<?php echo base_url() ?>assets/mentor/js/validation.js"></script>

    <!-- lobilist -->
    <script src="<?php echo base_url() ?>assets/mentor/js/lobilist.js"></script>

    <!-- custom -->
    <script src="<?php echo base_url() ?>assets/mentor/js/custom.js"></script>

    </body>

    </html>