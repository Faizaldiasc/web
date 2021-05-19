    
    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Popular Course -->
                <?php       
                     foreach ($data->result_array() as $row) :
                    $id = $row['id_kursus'];
                    $foto = $row['foto_kursus'];
                    $nama = $row['nama_kelas'];
                    $deskripsi = $row['deskripsi_kelas'];
                    $jadwal = $row['jadwal'];
                ?>                
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo base_url()?>assets/kursus/img/<?php echo $foto;?>" alt="">
                            <!-- Course Content -->
                            <div class="course-content">
                                <a href="<?php echo base_url()?>Controller_User/detailkelas/<?php echo $id;?>"><h4><?php echo $nama;?></h4> </a><br>
                                <li style="opacity: 0.2;">Deskripsi</li>
                                <p><?php echo $deskripsi;?></p>
                            </div>
                            </div>
                    </div>
                    
                <?php endforeach; ?> 
            </div>
    </section>
    <!-- ##### Popular Course Area End ##### -->
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/active.js"></script>
</body>

</html>