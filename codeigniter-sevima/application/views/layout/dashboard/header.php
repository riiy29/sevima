<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; Sevima</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/bootstrap/css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/fontawesome/css/all.min.css')?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/jqvmap/dist/jqvmap.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/jquery-selectric/selectric.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/datatables/datatables.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')?>">
  <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/css/style.css')?>">
  <link rel="stylesheet" href="<?= base_url('assets/dashboard/css/components.css')?>">

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg bg-primary" style="background-color:#00b98e !important;"></div>
      <nav class="navbar navbar-expand-lg main-navbar mt-0 ">
        <form class="form-inline mr-auto " >
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          
          </ul>
          <div class="search-element " >
            <h2 class="text-white mt-2"></h2>
          </div>
        </form>
        <ul class="navbar-nav navbar-right " style="padding-right:30px;">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg nav-link-user">
            
            <div class="d-sm-none d-lg-inline-block"><i class="fas fa-user-alt mr-2 has-icon" style="font-size:14px; "></i> <span style="text-transform:capitalize;">Buchori</span></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">
                <p style="text-transform:uppercase; margin-bottom:0; font-size:11px;">
                Guru - programmer
                </p>
                
              </div>
             
              <div class="dropdown-divider"></div>
              <a href="<?=base_url('auth/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?= base_url('/dashboard')?>">
              
              <img src="<?= base_url('assets/img/logo-icon.png')?>" class="img-fluid" style="width:160px" alt="">
           
            </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?= base_url('/dashboard')?>">MB</a>
          </div>
          <ul class="sidebar-menu mt-4">
            <li class="menu-header">dashboard</li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard') { echo 'active'; } ?>"><a class="nav-link" href="../dashboard"><i class="fas fa-home "></i> <span>Home</span></a></li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard/absen') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/absen')?>"><i class="far fa-calendar-alt"></i><span>Absen</span></a></li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard/buku') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/buku')?>"><i class="fas fa-book"></i> <span>Data Buku</span></a></li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard/pelajaran') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/pelajaran')?>"><i class="fas fa-school"></i><span>Pembelajaran</span></a></li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard/video') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/video')?>"><i class="fas fa-school"></i><span>Materi</span></a></li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard/guru') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/guru')?>"><i class="fas fa-user-graduate"></i> <span>Data Guru</span></a></li>
            <li class="<?php if($this->uri->uri_string() == 'dashboard/jurusan') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/jurusan')?>"><i class="fab fa-pied-piper-alt"></i> <span>Jurusan</span></a></li>
            <!-- <li class="<?php if($this->uri->uri_string() == 'dashboard/komentar') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/komentar')?>"><i class="fas fa-comment-dots "></i> <span>Komentar</span></a></li> -->
            <li class="<?php if($this->uri->uri_string() == 'dashboard/user') { echo 'active'; } ?>"><a class="nav-link" href="<?=  base_url('dashboard/user')?>"><i class="fas fa-users "></i> <span>User</span></a></li>
            
        </ul>

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="/" class="btn btn-lg btn-block btn-icon-split" style="background-color:#00b98e; color:#fff;">
              <span class="fas fa-home mr-1"></span> Home Page
            </a>
          </div>   
        </aside>
      </div>