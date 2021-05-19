<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Halaman User</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url()?>assets/halamanUtama/img/core-img/logowbb.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/halamanUtama/style.css">
    
</head>

<body>
    <!-- Preloader -->
   
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> 0811 7199 210</a>
                <a href="#"><span>Email:</span> admin@digitalcreative.web.id</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
          
                <div class="classy-nav-container breakpoint-off"  style="background-image: url(<?php echo base_url()?>assets/halamanUtama/img/core-img/texture.png);">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                     <a></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <?php
                                    $id_user=$this->session->userdata('id');
                                    $temp = $this->db->query("SELECT * FROM tbl_user WHERE id_user='$id_user'");
                                    $temps = $temp->row_array();
                            ?>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="<?php echo base_url()?>Controller_User">Beranda</a></li>
                                <li><a href="#">Halaman</a>
                                    <ul class="dropdown">
                                        <li><a href="<?php echo base_url()?>Controller_User/bookingkelas">Booking Kelas</a></li>
                                        <li><a href="<?php echo base_url()?>Controller_User/mykelas/<?php echo $temps['id_user']?>">Kelas Saya</a></li>                         
                                        
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url()?>Controller_User/tentang">Tentang</a></li>
                                <li><a href="<?php echo base_url()?>Controller_User/kontak">Kontak</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                             
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $temps['nama_user']?></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="<?php echo base_url()?>Controller_User/accountsetting/<?php echo $temps['id_user']?>">Account Settings</a>
                                            <a class="dropdown-item" href="<?php echo base_url()?>Controller_Login_User/logout/">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="userthumb">
                                    <img src="<?php echo base_url().'assets/registerUser/images/'.$temps['foto_user'];?>" alt="avatar">
                                </div>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
