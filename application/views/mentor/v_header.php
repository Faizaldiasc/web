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
<title>Halaman Mentor</title>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/halamanUtama/img/core-img/logowbb.png" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/mentor/css/style.css" />
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="<?php echo base_url()?>assets/mentor/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

<!--=================================
 header start-->
 
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="<?php echo base_url()?>Controller_Mentor"><img src="<?php echo base_url()?>assets/admin/images/item/logo-wb.png" alt="" ></a>
    <a class="navbar-brand brand-logo-mini" href="<?php echo base_url()?>Controller_Mentor"><img src="<?php echo base_url()?>assets/admin/item/images/logo-wb.png" alt=""></a>
  </div>

  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
    <li class="nav-item">
      <div class="search">
        <a class="search-btn not_click" href="javascript:void(0);"></a>
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
      <?php
            $id_mentor=$this->session->userdata('id');
            $temp = $this->db->query("SELECT * FROM tbl_mentor WHERE id_mentor='$id_mentor'");
            $temps = $temp->row_array();
      ?>
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="<?php echo base_url().'assets/mentor/img/'.$temps['foto_mentor'];?>" alt="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-right">  
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="<?php echo base_url()?>Controller_Mentor/settingMentor/<?php echo $temps['id_mentor']?>"><i class="text-info ti-settings"></i>Edit Profile</a>
        <a class="dropdown-item" href="<?php echo base_url()?>Controller_Login_Mentor/logout/"><i class="text-danger ti-unlock"></i>Logout</a>
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
          <a href="<?php echo base_url()?>Controller_Mentor">
            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Halaman Mentor</span></div>
            <div class="pull-right"></div><div class="clearfix"></div>
          </a>
        </li>
      </ul>
     </div> 
    </div> 

<!-- Left Sidebar End-->

 