	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Bersatu Untuk Kemanusiaan</h3>
						<p>ACT MRI NTB</p>
						<!-- <div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="portfolio.html" class="two scroll ">Portfolio</a>
							</div>
							<div class="clearfix"> </div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Terjun Evakuasi</h3>
						<p>ACT MRI NTB</p>
						<!-- <div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="portfolio.html" class="two scroll ">Portfolio</a>
							</div>
							<div class="clearfix"> </div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Mengabdi untuk Masyarakat</h3>
						<p>ACT MRI NTB</p>
						<!-- <div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="portfolio.html" class="two scroll ">Portfolio</a>
							</div>
							<div class="clearfix"> </div>
						</div> -->

					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

						<h3>Relawan Kemanusiaan</h3>
						<p>ACT MRI NTB</p>
						<!-- <div class="top-buttons">
							<div class="bnr-button">
								<a class="act" href="single.html">Read More</a>
							</div>
							<div class="bnr-button">
								<a href="#portfolio" class="two scroll ">Portfolio</a>
							</div>
							<div class="clearfix"> </div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!--/ab-->
	<div class="banner_bottom proj">
		<div class="wrap_view">
			<style type="text/css">
				main {
	              background: #FFF;
	              width: 100%;
	              margin: 15px auto;
	              padding: 20px 9px 20px;
	              box-shadow: 0 3px 5px rgba(0,0,0,0.2);
	              /*border: 1px solid #212020;*/

	            }
			</style>
			<!-- <div class="row"> -->
				<h3 class="tittle-w3ls">Berita</h3>
				<?php $i = 1; foreach ($data_berita as $db) {
					if ($i <=4 ) { ?>
				<div class="col-md-3 banner_bottom_left">
					<main>
						<div class="banner_bottom_pos">
							<div class="banner_bottom_pos_grid ">
								<a href="<?= site_url('user/detail_berita/'.$db->id_berita.''); ?>">
									<img src="<?php echo base_url(); ?>assets/Img/<?= $db->foto ?>" class="img-responsive" alt="Conceit" width="100%">
								</a>
								<a href="<?= site_url('user/detail_berita/'.$db->id_berita.''); ?>">
								<div class=" banner_bottom_grid_right ">
									<p></p>
									<h3 class="wr"><?=$db->judul_berita?></h3>
									<?php
									      if(substr($db->tanggal,5,2) == '01'){
									        $bulan = 'Januari';
									      }elseif(substr($db->tanggal,5,2) == '02'){
									        $bulan = 'Februari';
									      }elseif(substr($db->tanggal,5,2) == '03'){
									        $bulan = 'Maret';
									      }elseif(substr($db->tanggal,5,2) == '04'){
									        $bulan = 'April';
									      }elseif(substr($db->tanggal,5,2) == '05'){
									        $bulan = 'Mei';
									      }elseif(substr($db->tanggal,5,2) == '06'){
									        $bulan = 'Juni';
									      }elseif(substr($db->tanggal,5,2) == '07'){
									        $bulan = 'Juli';
									      }elseif(substr($db->tanggal,5,2) == '08'){
									        $bulan = 'Agustus';
									      }elseif(substr($db->tanggal,5,2) == '09'){
									        $bulan = 'September';
									      }elseif(substr($db->tanggal,5,2) == '10'){
									        $bulan = 'Oktober';
									      }elseif(substr($db->tanggal,5,2) == '11'){
									        $bulan = 'Nopember';
									      }else{
									        $bulan = 'Desember';
									      }
								    ?>
								    <?php $tahun = substr($db->tanggal,0,4) ?>
								    <?php $tanggal = substr($db->tanggal,8,2) ?>
									<p class="db" style="color: red"><i class="fa fa-user"></i> Redaksi MRI <i class="fa fa-calendar"></i><?php echo ' ', $tanggal,' ', $bulan,' ', $tahun ?></p>
								</div>
								</a>
							</div>
						</div>
					</main>
				</div>
				<?php $i++; }else{}} ?>
				<div class="clearfix"> </div>
			<!-- </div> -->
		</div>
	</div>

		
	<!--//ab-->
	<!--/what-->
	<div class="vd">
		<div class="container">
			<h3 class="tittle-w3ls cen">Yuk, Kenalan dengan MRI </h3>
			<div class="row">
				<div class="col-md-6 ser-first-grid">
					<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" width="504" height="284" src="https://www.youtube.com/embed/azgI7EnQj0s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			
				<div class="col-md-6 ser-first-grid">
					<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" width="504" height="284" src="https://www.youtube.com/embed/Duj0Jmf81y8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//what-->
	<!--/banner_bottom-->
		<div class="banner_bottom proj">
			<div class="wrap_view">	
				<style type="text/css">
						main {
			              background: #FFF;
			              width: 100%;
			              margin: 15px auto;
			              padding: 20px 9px 20px;
			              box-shadow: 0 3px 5px rgba(0,0,0,0.2);
			              /*border: 1px solid #212020;*/
			            }
				</style>	
				<h3 class="tittle-w3ls">Program</h3>
				<div class="banner_bottom_pos">
					<div class="banner_bottom_pos_grid">
						<?php $jumlah = 1; ?>
						<?php foreach ($data_program as $dp){ ?>
						<div class="col-md-3 banner_bottom_grid_right">
							<main>
								<div >
								<center>
									<h2 style="color: red"><?= $dp->nama_program ?></h2>
									<img src="<?php echo base_url(); ?>assets/User/images/01.png" alt="logo" width=100%>
									<h4><?= $dp->deskripsi ?></h4>
								</center>
								</div>
							</main>
						</div>
						<?php if($jumlah %4 == 0){ echo '<div class="clearfix"></div> <br>';
						$jumlah++;
						}else{
							$jumlah++;
						} ?>
						<?php } ?>
						<div class="clearfix"> </div>
					</div>
				</div>	
			</div>
		</div>
	<!--//banner_bottom-->
	<!--/projects-->
	<!-- <div class=""> -->
	<div class="works">
		<div class="container wrap_view">		
			<div class="col-md-3 ser-first-grid text-center">
				<div class="total">
					<h3><?php foreach ($jumlah_relawan as $jk) {
	                  echo $jk->jumlah_relawan;
	                } ?></h3>
					<h3>Total Relawan</h3>
				</div>
			</div>
			
			<div class="col-md-3 ser-first-grid text-center row">
				<div class="total">
					<h3><?php foreach ($jumlah_program as $jp) {
	                  echo $jp->jumlah_program;
	                } ?></h3>
					<h3>Total Program</h3>
				</div>
			</div>

			<div class="row col-md-3 ser-first-grid text-center">
				<div class="total">
					<h3><?php foreach ($jumlah_berita as $jb) {
	                  echo $jb->jumlah_berita;
	                } ?></h3>
					<h3>Total Berita</h3>
				</div>
			</div>

			<div class="row col-md-3 ser-first-grid text-center">
				<div class="total">
					<h3><?php foreach ($jumlah_agenda as $ja) {
	                  echo $ja->jumlah_agenda;
	                } ?></h3>
					<h3>Total Agenda</h3>
				</div>
			</div>
		</div>
	</div><br><br><br><br><br>
	
	<!--/testimonials-->
	<div class="tesimonials">
		<div class="container">
			<h3 class="tittle-w3ls cen">Apa Kata Relawan?</h3>
			<div class="inner_sec">
				<div class="test_grid_sec">
					<div class="col-md-offset-2 col-md-8">
						<div class="carousel slide two" data-ride="carousel" id="quote-carousel">
							<!-- Bottom Carousel Indicators -->
							<ol class="carousel-indicators two">
								<li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
								<li data-target="#quote-carousel" data-slide-to="1"></li>
								<li data-target="#quote-carousel" data-slide-to="2"></li>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">

								<!-- Quote 1 -->
								<div class="item active">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="<?php echo base_url(); ?>assets/Img/t1.jpg?>" class="img-responsive" alt="">

											</div>
											<div class="col-sm-9 test_img_info">
												<p>Dalam jiwa saya, jadi relawan itu "badai"...ada kepuasan tersendiri yang tidak kita peroleh di tempat lain walaupun yang kita berikan bukan milik kita (lebih-lebih jika milik sendiri). Semakin sering kita "action" semakin badai puasnya. Senyum dari ibu-ibu/bapak-bapak yang menerima bantuan menjadi semangat untuk tetap tegar & peduli.</p>
												<h6>Ana Safitri</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 2 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="<?php echo base_url(); ?>assets/Img/t3.jpg?>" class="img-responsive" alt="">
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Suatu kesempatan besar bisa bergabung menjadi relawan MRI. Banyak pengalaman yang tak terlupakan. Banyak juga kenangan kebaikan dan pelajaran-pelajaran terbaik yang tak bisa saya dapatkan di bangku kuliah ataupun ditempat lain. MRI adalah candradimuka. Tempat saya memaksimalkan kebaikan..</p>
												<h6>Wawan Setiawan</h6>
											</div>
										</div>
									</blockquote>
								</div>
								<!-- Quote 3 -->
								<div class="item">
									<blockquote>
										<div class="test_grid">
											<div class="col-sm-3 text-center test_img">
												<img src="<?php echo base_url(); ?>assets/Img/ri.jpg?>" class="img-responsive" alt="" >
											</div>
											<div class="col-sm-9 test_img_info">
												<p>Menjadi relawan itu mengasikkan dan penuh warna kehidupan karena bisa mengenal banyak ragam manusia tanpa sekat suku, ras dan agama atas pasar cinta. Di sini kita mendapatkan nilai persaudaraan tanpa basa basi. Di sini kita berbagi kebahagiaan dan mendapatkan kebahagiaan. Di sini kita menjumpai kepuasan diri.</p>
												<h6>Husnul Ramdani</h6>
											</div>
										</div>
									</blockquote>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//testimonials-->

	<!-- /newsletter-->
	<div class="newsletter_w3ls_agileits">
		<!-- <div class="col-sm-6 newsleft">
			<h3>Sign up for Newsletter !</h3>
		</div> -->
		<!-- <div class="col-sm-6 newsright">
			<form action="#" method="post">
				<input type="email" placeholder="Enter your email..." name="email" required="">
				<input type="submit" value="Submit">
			</form>
		</div> -->

		<div class="clearfix"></div>
	</div>
	<!-- //newsletter-->

