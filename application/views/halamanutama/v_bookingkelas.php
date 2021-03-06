    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Popular Course -->
                <?php
                foreach ($data->result_array() as $row) :
                    $foto = $row['foto_kursus'];
                    $nama = $row['nama_kelas'];
                    $deskripsi = $row['deskripsi_kelas'];
                    $jadwal = $row['jadwal'];
                ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">

                            <img src="<?php echo base_url() ?>assets/kursus/img/<?php echo $foto; ?>" alt="">
                            <!-- Course Content -->
                            <div class="course-content">
                                <a href="#">
                                    <h4><?php echo $nama; ?></h4>
                                </a>
                                <p><?php echo $deskripsi; ?></p>
                            </div>
                            <!-- Seat Rating Fee -->
                            <div class="seat-rating-fee d-flex justify-content-between">
                                <div class="seat-rating h-100 d-flex align-items-center">
                                </div>
                                <div class="course-fee h-150">
                                    <!-- <a><?php echo $nama; ?></a> -->
                                    <a href="<?php echo base_url() ?>Controller_Login_User" class="free">Gabung </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms">
                    <a href="#" class="btn clever-btn btn-2">Load More</a>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ##### Popular Course Area End ##### -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/active.js"></script>
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/dist/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/dist/sweetalert-dev.js"></script>
    </body>

    </html>