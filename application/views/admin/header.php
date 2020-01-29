<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Masyarakat Relawan Indonesia-NTB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/dist/js/sweetalert2.min.css">  -->
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/Admin/dist/img/mricon.png" />

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('admin'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ACT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin MRI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="<?php echo site_url(); ?>assets/Img/mri.png" class="user-image" alt="User Image"> -->
              <span class="">Hi, <?php echo $_SESSION['admin']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo site_url(); ?>assets/Img/mri.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['admin']?>
                </p>
              </li>
              <!-- Menu Body -->

              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Akun</a>
                </div>
                <div class="pull-right">
                  <a href="<?= site_url().'login/logout' ?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel"> -->
       <!--  <div class="pull-left image">
          <img src="<?php echo site_url(); ?>assets/Img/mri.png" alt="Image">
        </div> -->
        <!-- <div class="pull-left info">
          <p>Cenul</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div> -->
      <!-- </div>> -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <?php $aktif = $this->uri->segment(2); ?>
        <li <?php if($aktif == ''){echo 'class="active"';} ?>>
          <a href="<?= site_url('admin'); ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <li <?php if($aktif == 'rapat'){echo 'class="active"';} ?>>
          <a href="<?php echo site_url('admin/rapat'); ?>">
            <i class="fa fa-files-o"></i> <span>Hasil Rapat</span>
          </a>
        </li>

        <li <?php if($aktif == 'berita'){echo 'class="active"';} ?>>
          <a href="<?php echo site_url('admin/berita'); ?>">
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
          </a>
        </li>

        <li <?php if($aktif == 'program'){echo 'class="active"';} ?>>
          <a href="<?php echo site_url('admin/program'); ?>">
            <i class="fa fa-table"></i> <span>Program</span>
          </a>
        </li>

       <li <?php if($aktif == 'daftar_pengajuan'){echo 'class="active"';} ?>>
          <a href="<?php echo site_url('admin/daftar_pengajuan'); ?>">
            <i class="fa fa-user"></i> <span>Data Pengajuan</span>
          </a>
        </li>

        <li <?php if($aktif == 'daftar_relawan'){echo 'class="active"';} ?>>
          <a href="<?php echo site_url('admin/daftar_relawan'); ?>">
            <i class="fa fa-users"></i> <span>Data Relawan</span>
          </a>
        </li>

        <li <?php if($aktif == 'agenda'){echo 'class="active"';} ?>>
          <a href="<?php echo site_url('admin/agenda'); ?>">
            <i class="fa fa-calendar"></i> <span>Agenda</span>
          </a>
        </li>
        <li <?php if($aktif == 'kirim_notif'){echo 'class="active"';} ?>>
          <a href="<?= site_url('admin/kirim_notif'); ?>">
            <i class="fa fa-envelope-o"></i> <span>Kirim Notif</span>
          </a>
        </li>

        <li <?php if($aktif == 'laporan'){echo 'class="active"';} ?>>
          <a href="<?= site_url('admin/laporan'); ?>">
            <i class="fa  fa-file-o"></i> <span>Laporan</span>
          </a>
        </li>

       <!--  <li <?php if($aktif == 'tambah_testimoni'){echo 'class="active"';} ?>>
          <a href="<?= site_url('admin/tambah_testimoni'); ?>">
            <i class="fa fa-dashboard"></i> <span>Tambah Testimoni</span>
          </a>
        </li> -->

        <li <?php if($aktif == 'testimoni'){echo 'class="active"';} ?>>
          <a href="<?= site_url('admin/testimoni'); ?>">
            <i class="fa fa-commenting-o"></i> <span>Testimoni</span>
          </a>
        </li>
         
    </section>
    <!-- /.sidebar -->
  </aside>