<!DOCTYPE html>
<html>

<head>
	<title>Sirawan</title>

	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="<?php echo site_url(); ?>assets/User/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- <link href="<?php echo site_url(); ?>assets/User/dist/sweetalert.css" rel="stylesheet" type="text/css" /> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="<?php echo site_url(); ?>assets/User/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo site_url(); ?>assets/User/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url(); ?>assets/User/css/font-awesome.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/User/images/mricon.png" />
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<!-- <div id="loader"></div> -->
	<div class="top_header" id="home">
		<!-- Fixed navbar -->	
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- <div class="logo-w3layouts-agileits">
						<h1> <a class="navbar-brand" href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> Conceit <span class="desc">For your Business</span></a></h1>
					</div> -->
					<div class="logo-w3layouts-agileits log-height">
						<a class="navbar-brand " href="<?= site_url('user'); ?>"><img src="<?php echo site_url(); ?>assets/User/images/mri1.png" alt="logo" width=200px></a>
					</div>
				</div>

				<div id="navbar" class="navbar-collapse collapse">

					<div class="nav_right_top">
						<ul class="nav navbar-nav">
							<?php $aktif = $this->uri->segment(2); ?>
							<li <?php if($aktif == ''){echo 'class="active"';} ?>><a href="<?= site_url('user'); ?>">Home</a></li>
							<li <?php if($aktif == 'berita'){echo 'class="active"';} ?> ><a href="<?= site_url('user/berita'); ?>">Berita</a></li>
							<li <?php if($aktif == 'program'){echo 'class="active"';} ?> ><a href="<?= site_url('user/program'); ?>">Program</a></li>
							<li <?php if($aktif == 'tentang'){echo 'class="active"';} ?>><a href="<?= site_url('user/tentang'); ?>">Tentang</a></li>
							<li <?php if($aktif == 'daftar' || $aktif == 'syarat'){echo 'class="active"';} ?> ><a href="<?= site_url('user/daftar'); ?>">Daftar Relawan</a></li>
							<li><a href="<?= site_url('user/login'); ?>">Login</a></li>
	
								</ul>
							</li> 
						</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>

