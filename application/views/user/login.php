<!DOCTYPE html>
<html>

<head>
	<title>Sistem Informasi Masyarakat Relawan Indonesia - NTB</title>
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
	<link href="<?php echo site_url(); ?>assets/User/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo site_url(); ?>assets/User/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo site_url(); ?>assets/User/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo site_url(); ?>assets/User/dist/sweetalert2.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/User/images/mricon.png" />
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>
<body>
	<div class="banner_bottom bg">
		<div class="container">
			<style type="text/css">
				main {
				    background: #FFF;
		            position: static;
					padding: 25px 10px 110px;
					height: 500px;
					width: 350Px;
					box-shadow: 0 3px 5px rgba(0,0,0,0.2);
					
	            }
                @media(max-width:900px){
                    main{
                        width: auto;
                        height: auto;
                        margin-bottom:150px;
                        margin-top: 70px;
                    }
                }
			</style>
			<div class="col-md-4 col-sm-4 col-xs-12 "></div>
				<div class="col-sm-5 col-md-4 col-xs-12">
					<main>
						<form action="<?= site_url('login/auth'); ?>" method="post" id="tes" >
							<center>
								<img src="<?php echo site_url(); ?>assets/User/images/mri.png" alt="logo" width=200px>
								<div></div><br>
								<h3 class="tittle-w3ls ">Login</h3>
					            <?php if($this->session->flashdata('flash')) : ?>
				                    <div class="alert alert-danger">
				                        <strong style="color: red"><?= $this->session->flashdata('flash'); ?>
				                        </strong>
				                    </div>
				                <?php endif; ?>
				           
								<div class="signin-form responsive">
									<div class="row">
										<div class="col-md-12 col-xs-12">
											<input type="text" name="email" id="email" placeholder="E-mail" autofocus required/>
										</div>
										<div class="col-md-12 col-xs-12">
											<input type="password" name="password" id="password" placeholder="Password" autofocus required/>
										</div>
									</div>
									<p>Lupa Password?  Klik<span><a href="<?= site_url('user/lupa_password'); ?>"> Disini</a></span></p>
									
									<div class="signin-form rec">
										<div class="col-md-12 col-xs-12">
											<input type="submit" id="masuk" value="Masuk">
										</div>
									</div>
								</div>
							</center>
						</form>
					</main>
				</div>
			<div class="col-md-4 col-sm-2 col-xs-12"></div>
		
		</div>
	</div>
</body>

	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/easing.js"></script>	
	<script type="text/javascript" src="<?php echo site_url(); ?>assets/User/js/jquery-1.7.2.js"></script>
	<script src="<?php echo site_url(); ?>assets/User/js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>assets/User/js/script.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>assets/User/js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="<?php echo site_url(); ?>assets/User/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
	<!-- <script src="<?php echo site_url(); ?>assets/User/dist/myscript.js"></script> -->
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
</html>