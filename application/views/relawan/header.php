<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Relawan - Sistem Informasi MRI NTB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- DataTables -->
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
   <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/Admin/dist/img/mricon.png" />
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?= site_url('relawan'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">MRI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">RELAWAN MRI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="<?php echo site_url()?>assets/Img/<?php echo $data_relawan['foto']?>" class="user-image" alt="User Image"> -->
              <span class="">Hi, <?php echo $data_relawan['nama_lengkap']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo site_url()?>assets/Img/relawan/<?php echo $data_relawan['foto']?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $data_relawan['nama_lengkap']?>
                  <!-- <small>Member since 2019</small> -->
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= site_url().'/relawan/ganti_password' ?>" class="btn btn-default btn-flat">Akun</a>
                </div>
                <div class="pull-right">
                  <a href="<?= site_url().'login/logout'  ?>" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
      <!--     <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <?php $aktif = $this->uri->segment(2); ?>

        <li <?php if($aktif == ''){echo 'class="active"';} ?>>
          <a href="<?= site_url('relawan'); ?>">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>

        <li <?php if($aktif == 'hasil_rapat'){echo 'class="active"';} ?>>
          <a href="<?= site_url('relawan/hasil_rapat'); ?>">
            <i class="fa fa-files-o"></i> <span>Hasil Rapat</span>
          </a>
        </li>
        <li <?php if($aktif == 'agenda'){echo 'class="active"';} ?>>
          <a href="<?= site_url('relawan/agenda'); ?>">
            <i class="fa fa-calendar"></i> <span>Agenda</span>
          </a>
        </li>

      <!--  <li class="treewiew">
          <a href="<?= site_url('relawan'); ?>">
            <i class="fa fa-dashboard"></i> <span>Profile</span>
          </a>
        </li>

        <li class="treewiew" >
          <a href="<?= site_url('relawan/hasil_rapat'); ?>">
            <i class="fa fa-dashboard"></i> <span>Hasil Rapat</span>
          </a>
        </li>

        <li class="treewiew">
          <a href="<?= site_url('relawan/agenda'); ?>">
            <i class="fa fa-dashboard"></i> <span>Agenda</span>
          </a>
        </li> -->
        
    </section>
    <!-- /.sidebar -->
  </aside>
