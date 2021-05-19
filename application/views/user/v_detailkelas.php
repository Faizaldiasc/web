<?php    
     foreach ($data->result_array() as $row) :
                    $id = $row['id_kursus'];
                    $foto = $row['foto_kursus'];
                    $nama = $row['nama_kelas'];
                    $deskripsi = $row['deskripsi_kelas'];
                    $jadwal = $row['jadwal'];
?>
 <div class="single-course-intro d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url()?>assets/kursus/img/<?php echo $foto;?>); background-size: 100% 100%; ">
    </div>
    <!-- ##### Single Course Intro End ##### -->

    <!-- ##### Courses Content Start ##### -->
    <div class="single-course-content section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="course--content">

                        <div class="clever-tabs-content">              
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Deskripsi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">Materi</a>
                                 <li class="nav-item">
                                    <a class="nav-link" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">tugas</a>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <!-- Tab Text -->
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                    <div class="clever-description">

                                        <!-- About Course -->
                                        <div class="about-course mb-30">
                                            <h4><?php echo $nama;?></h4>
                                            <p><?php echo $deskripsi;?>.</p>
                                        </div>
                                        
                                        <!-- All Instructors -->
                                        
                                        <!-- FAQ -->
                                        
                                    </div>
                                </div>
                                <?php endforeach; ?> 
                                
                                
                                <!-- Tab Text -->
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                    <div class="clever-curriculum">

                                        <!-- About Curriculum -->
                                        <?php
                                            $no=0;       
                                            foreach ($data2->result_array() as $row) :
                                            $no++;
                                            $des= $row['deskripsi_file'];
                                            $filee = $row['link_file'];
                                        ?>
                                        <div class="about-curriculum mb-30">
                                            <h4>Pertemuan <?php echo $no;?></h4>
                                            <p style="opacity: 0.4">Deskripsi Singkat</p>
                                            <p style="margin-top: -20px;"><?php echo $des?> </p>
                                            <a href="https://<?php echo $filee;?>">Video Pembelajaran : <?php echo $filee;?></a>
                                        </div>
                                        <?php endforeach; ?> 
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

    <script src="<?php echo base_url()?>assets/halamanUtama/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url()?>assets/halamanUtama/js/active.js"></script>