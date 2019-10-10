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
	<link href="<?php echo base_url(); ?>assets/User/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>assets/User/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url(); ?>assets/User/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/User/css/font-awesome.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/User/images/mri.png" />
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>


<!-- <div class="log"> -->

	<div class="banner_bottom bg ">
		<div class="container ">
			<style type="text/css">
				main {
	            margin-bottom: 175px;
	            margin-top: 10px;
			    width: auto;
			    background-color: rgb(255, 255, 255);
			    display: block;
			    padding: 20px 0px 80px;
	            }
			</style>
			<div class="col-md-4 col-sm-4 col-xs-12 "></div>
			<div class="col-sm-8 col-md-4  ">
				<main>
					<center>
						<img src="<?php echo base_url(); ?>assets/User/images/mri.png" alt="logo" width=250px>
						<div></div><br>
						<h3 class="tittle-w3ls ">Login</h3>
						<!-- <?php if($this->session->flashdata('flash')) : ?>
			                <div class="signin-form ">
			                    <div style="color: red" >
								  <?= $this->session->flashdata('flash'); ?>
								</div>
			                </div>
			            <?php endif; ?> -->

			            <?php if($this->session->flashdata('flash')) : ?>
		                    <div class="signin-form">
		                        <div style="padding: 10px 10px 10px" class="alert-danger ">
		                            <strong><?= $this->session->flashdata('flash'); ?></strong>.
		                        </div> 
		                    </div>
		                <?php endif; ?>
					
						<div class="signin-form responsive">
							<!-- <div class="login-form-rec"> -->
								<form action="<?= site_url('login/auth'); ?>" method="post" >
										<div class="row">
											<div class="col-md-12 col-xs-12">
												<input type="text" name="email" id="email" placeholder="E-mail" required="">
											</div>
											<div class="col-md-12 col-xs-12">
												<input type="password" name="password" id="password" placeholder="Password" required="">
											</div>
										</div>
										<p>Lupa Password?  Klik<span><a href="<?= site_url('user/lupa_password'); ?>"> Disini</a></span></p>
									

									<div class="login-form-rec">
										<div class="col-md-12 col-xs-12">
											<input type="submit"  value="Masuk">
										</div>
									</div>
								</form>
							<!-- </div> -->
						</div>

					</center>
				</main>
			</div>
			<div class="col-md-4 col-sm-2 col-xs-12"></div>
		
		</div>
	</div>


