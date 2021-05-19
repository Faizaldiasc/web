    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?php echo base_url() ?>assets/halamanUtama/img/webb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>SMAN 2 Mojokerto</h2>
                        <div class="white typed">
                            <h3>"Menjadi Sekolah
                                Unggul dalam Imtaq, Iptek, Budi Pekerti, Peduli Lingkungan dan
                                Berwawasan Internasional"</h3>
                        </div>
                        <a href="<?php echo base_url() ?>Controller_Login_User" class="btn clever-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url(<?php echo base_url() ?>assets/halamanUtama/img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Fitur</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo base_url() ?>assets/halamanUtama/img/bg-img/bookingkelas.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <a href="<?php echo base_url() ?>Main_Controller/bookingkelas/">
                                <h4> Join Kelas </h4>
                            </a>
                            <p>Siswa dapat memilih kelas sesuai dengan tingkatan</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">

                            </div>
                            <div class="course-fee h-100">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?php echo base_url() ?>assets/halamanUtama/img/bg-img/populer.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <a href="">
                                <h4>Informasi Akademik</h4>
                            </a>

                            <p>Informasi akademik siswa SMAN 2</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">

                            </div>
                            <div class="course-fee h-100">

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="<?php echo base_url() ?>assets/halamanUtama/img/bg-img/kuis.jpg">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Kategori</h4>
                            <p>Lihat Kategori Yang Ada!</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">

                            </div>
                            <div class="course-fee h-100">

                            </div>
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
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/active.js"></script>
    <script src="<?php echo base_url() ?>assets/halamanUtama/js/typewriter.js"></script>
    </body>

    </html>