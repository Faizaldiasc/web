<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>SMAN 2 Mojokerto</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/halamanUtama/img/core-img/logowbb.png">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/halamanUtama/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a><span>Phone:</span> 0321 54675246 </a>
                <a><span>Email:</span> smandamojekerto@gmail.com</a>
                <a><span></span> Ayo Tetap Belajar Di Masa Pandemi</a>
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

            <div class="classy-nav-container breakpoint-off" style="background-image: url(<?php echo base_url() ?>assets/halamanUtama/img/core-img/texture.png);">
                <!-- Menu -->

                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="" alt=""></a>

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

                        <!-- Nav Start -->

                        <div class="classynav">
                            <ul>
                                <li><a href="<?php echo base_url() ?>">Beranda</a></li>
                                <li><a href="<?php echo base_url() ?>Main_Controller/bookingkelas">Booking Kelas</a></li>
                                <li><a href="<?php echo base_url() ?>Main_Controller/tentang">Tentang</a></li>
                                <li><a href="<?php echo base_url() ?>Main_Controller/kontak">Kontak</a></li>
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>

                            <!-- Register / Login -->
                            <div class="register-login-area">

                                <a href="<?php echo base_url()?>Main_Controller/registerUser/" class="btn">Register</a>
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                              </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button"> <a href="<?php echo base_url() ?>Controller_Login_User/"> Login Siswa </a></button>
                                    <button class="dropdown-item" type="button"> <a href="<?php echo base_url() ?>Controller_Login_Mentor/"> Login Guru </a></button>
                                    <button class="dropdown-item" type="button"> <a href="<?php echo base_url() ?>Controller_Login_Admin/"> Login Admin </a></button>
                                </div>
                                </section>
                            </div>
                            <!-- Nav End -->
                        </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->