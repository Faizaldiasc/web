<!--=================================
  Main content -->

<!--=================================
wrapper -->

<div class="content-wrapper">
  <div class="page-title">
    <div class="row">
      <div class="col-sm-6">

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>Controller_Mentor" class="default-color">Home</a></li>
        </ol>
      </div>
    </div>
  </div>

  <!-- main body -->
  <div class="row">
    <div class="col-md-12 mb-30">
      <div class="card card-statistics h-100">
        <div class="card-body">
          <!-- Large modal -->
          <div>
            <?php
            foreach ($data->result_array() as $row) {
              $idd = $row['id_kursus'];
            ?>
              <a href="<?php echo base_url() ?>Controller_Mentor/datasiswa/<?php echo $idd ?>">
                <button type="button" class="btn btn-danger">Lihat Siswa</button></a>
              <button type="button" class="btn btn-primary float-right mr-20" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Materi</button>
          </div>


          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body">
                  <div>
                    <h4>&nbsp;</h4>
                    <section>

                      <form action="<?php echo base_url() ?>Controller_Mentor/addMateri/<?php echo $idd ?>" method="post" enctype="multipart/form-data">
                      <?php } ?>
                      <label for="uJudul">Judul*</label>
                      <input id="uJudul" name="nama_file" type="text" class="form-control" required><br>
                      <label for="text-2">Deskripsi Materi*</label>
                      <textarea name="deskripsi_file" id="text-2" rows="5" class="form-control" required></textarea><br>
                      <label for="uLink">Link*</label>
                      <input id="uLink" name="link_file" type="text" class="form-control"><br>
                    </section><br>
                    <button type="submit" class="button">
                      <span>Upload</span>
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


  <!-- materi yang telah di buat-->

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
              <th>Judul</th>
              <th>Deskripsi</th>
              <th>Link</th>
            </tr>
          </thead>

          <tbody>
            <?php
            foreach ($data2->result_array() as $row) :
              $nama = $row['nama_file'];
              $deskripsi = $row['deskripsi_file'];
              $link = $row['link_file'];
            ?>
              <tr>
                <td><?php echo $nama; ?></td>
                <td><?php echo $deskripsi; ?></td>
                <td><?php echo $link; ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

      </div>
    </div>


    <!--=================================
 wrapper -->

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