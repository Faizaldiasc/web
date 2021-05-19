<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Halaman Admin</title>

<!-- Fav Icon-->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/halamanUtama/img/core-img/logowbb.png" />
<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/style.css" />
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="<?php echo base_url()?>assets/admin/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 header start-->
 
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="<?php echo base_url()?>Controller_Admin"><img src="<?php echo base_url()?>assets/admin/images/item/logo-wb.png" alt="" ></a>
    <a class="navbar-brand brand-logo-mini" href="<?php echo base_url()?>Controller_Admin"><img src="<?php echo base_url()?>assets/admin/item/images/logo-wb.png" alt=""></a>
  </div>
  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="<?php echo base_url()?>assets/admin/javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
      <div class="search">
        <a class="search-btn not_click" href="<?php echo base_url()?>assets/admin/javascript:void(0);"></a>
        <div class="search-box not-click">
          <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
          <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
        </div>
      </div>
    </li>
  </ul>
  <!-- top bar right -->
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item fullscreen">
      <a id="btnFullscreen" href="#" class="nav-link" ><i class="ti-fullscreen"></i></a>
    </li>
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="<?php echo base_url()?>assets/admin/images/team/admin.jpg" alt="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo base_url()?>Controller_Login_Admin/logout/"><i class="text-danger ti-unlock"></i>Logout</a>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->

 <!--=================================
 Main content -->
 
<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
      <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
          <a href="<?php echo base_url()?>Controller_Admin"><i class ="ti-home"></i><span class="right-nav-text">Halaman Utama</span></a>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#fitur">
            <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">Konfirmasi</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="fitur" class="collapse" data-parent="#sidebarnav">
            <li><a href="<?php echo base_url()?>Controller_Admin/acckelas">Konfirmasi Kelas</a></li>
            <li><a href="<?php echo base_url()?>Controller_Admin/konfirmasi">Konfirmasi Siswa</a></li>
           <!--  <li><a href="<?php echo base_url()?>Controller_Admin/feedback">Lihat feedback kelas</a></li> -->
          </ul>
        </li>
        <li>
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#data-tabel">
            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">Data Tabel</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
          </a>
          <ul id="data-tabel" class="collapse" data-parent="#sidebarnav">
            <li> <a href="<?php echo base_url()?>Controller_Admin/datamentor">Data Mentor</a></li>
            <li><a href="<?php echo base_url()?>Controller_Admin/dataadmin">Data Admin</a></li>
          </ul>
        </li>
  </div> 
</div> 