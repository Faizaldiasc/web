<!-- ##### Hero Area Start ##### -->
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?php echo base_url() ?>assets/halamanUtama/img/bg-img/bg1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Terimakasih Telah Bergabung</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Popular Courses Start ##### -->
<section class="popular-courses-area section-padding-100-0" style="background-image: url(<?php echo base_url() ?>assets/halamanUtama/img/core-img/texture.png);">
    <h3 align="center"> Daftar Kelas </h3> <br>
    <div class="container">
        <div class="row">
            <!-- Single Popular Course -->
            <?php
            $temp = $this->db->query("SELECT * FROM tbl_kursus WHERE status='1'");
            foreach ($temp->result_array() as $row) :
                $id = $row['id_kursus'];
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
                            <p><?php echo $jadwal; ?></p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-12">
                <div class="load-more text-center wow fadeInUp" data-wow-delay="500ms">
                    <a href="<?php echo base_url() ?>Controller_User/bookingkelas/" class="btn clever-btn btn-2">Load More</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- ##### Popular Courses End ##### -->

    <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Mentor</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <?php
                            foreach ($data->result_array() as $row) :
                                $foto = $row['foto_mentor'];
                                $nama = $row['nama_mentor'];
                            ?>
                                <!-- Tutor Thumbnail -->
                                <div class="tutor-thumbnail">
                                    <td> <img src="<?php echo base_url() ?>assets/mentor/img/<?php echo $foto; ?>" alt=""> </td>
                                </div>
                                <!-- Tutor Information -->
                                <div class="tutor-information text-center">
                                    <h5><?php echo $nama; ?></h5>
                                    <span>Mentor</span>
                                    <div class="social-info">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                        </div>
                        <div class="single-tutors-slides"> <?php endforeach; ?> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- ##### Best Tutors End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="<?php echo base_url() ?>assets/halamanUtama/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?php echo base_url() ?>assets/halamanUtama/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo base_url() ?>assets/halamanUtama/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="<?php echo base_url() ?>assets/halamanUtama/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="<?php echo base_url() ?>assets/halamanUtama/js/active.js"></script>
</body>

</html>