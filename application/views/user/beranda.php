	<!-- banner -->
	<div id="myCarousel" class="carousel slide " data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox" >
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Bersatu Untuk Kemanusiaan</h3>
						<p>ACT MRI NTB</p>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption"> 
						<h3>Terjun Evakuasi</h3>
						<p>ACT MRI NTB</p>
					</div>
				</div>  
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Mengabdi untuk Masyarakat</h3>
						<p>ACT MRI NTB</p>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<h3>Relawan Kemanusiaan</h3>
						<p>ACT MRI NTB</p>
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
	<div class=" banner_bottom proj">
		<div class="wrap_view">
			<style type="text/css">
				.main {
	              background: #FFF;
	              position: static;
				  padding: 13px 10px 20px;
				  height: 580px;
				  width: 380Px;
				  box-shadow: 0 3px 5px rgba(0,0,0,0.2);
	            }
	            .main:hover {
				  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
				}
				@media(max-width:1080px){
					.main{
						width: 310px;
						height: 370px;
					}
				}
				@media(max-width:900px){
					.main{
						width: auto;
						height: auto;
					}
				}

			</style>
			<!-- <div class="row"> -->
				<h3 class="tittle-w3ls">Berita</h3>
				<?php $i = 1; foreach ($data_berita as $db) {
					if ($i <=3 ) { ?>
				<div class="col-md-4 banner_bottom_left">
						<div class="banner_bottom_pos main">
							<div class="banner_bottom_pos_grid">
								<a href="<?= site_url('user/detail_berita/'.$db->id_berita.'/'.$db->slug_judul.''); ?>"> 
									<div>
										<center>
											<img src="<?php echo site_url(); ?>assets/Img/berita/<?= $db->foto ?>" class="img-responsive" alt="Conceit" style=" width: 360px; height: 230px;">
										</center>
									</div>
								</a>
									<div class=" banner_bottom_grid_right ">
										<a href="<?= site_url('user/detail_berita/'.$db->id_berita.'/'.$db->slug_judul.''); ?>"> 
											<center>
												<h4 class="wr"><?=$db->judul_berita?></h4>
											</center>
										</a>
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
										<p  style="color: rgb(251, 140, 1)"><i class="fa fa-user"></i> <?= $db->penulis ?>  <i class="fa fa-calendar"></i><?php echo ' ', $tanggal,' ', $bulan,' ', $tahun ?></p>
									</div>
									<div style="text-align: justify; color: black;font-family: sans-serif;">
										<p> <?php $konten=substr($db->isi_berita, 0, 130); echo $konten; ?>....<a href="<?= site_url('user/detail_berita/'.$db->id_berita.'/'.$db->slug_judul.''); ?>">Read More</a>
										</p>
									</div>
							</div>
						</div>
				</div>
				<?php $i++; }else{}} ?>
				<div class="clearfix"> </div>
		</div>
	</div>

	<div class="vd">
		<div class="container">
			<h3 class="tittle-w3ls cen ">Yuk, Kenalan dengan MRI </h3>
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
	
	<div class=" banner_bottom proj">
		<div class="wrap_view">
			<h3 class="tittle-w3ls">Program</h3>
			<?php $i = 1; foreach ($data_program as $dp) {
				if ($i <=3 ) { ?>
			<div class="col-md-4 banner_bottom_left">
					<div class="banner_bottom_pos main">
						<div class="banner_bottom_pos_grid ">
							<center>
								<img src="<?php echo site_url(); ?>assets/Img/program/<?= $dp->foto ?>" class="img-responsive" alt="Gambar" style=" width: 300px; height: 200px;"> 
							</center>
							<div class=" banner_bottom_grid_right ">
								<h3 style="color: red"><?= $dp->nama_program ?></h3>
								<!-- <img src="<?php echo site_url(); ?>assets/User/images/01.png" alt="logo" width=100%> -->
								<p><?= $dp->deskripsi ?></p>
							</div>
						</div>
					</div>
			</div>
			<?php $i++; }else{}} ?>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//banner_bottom-->
	<!--/projects-->
	<!-- <div class=""> -->
	<div class=" works">
		<div class="container">

			<div class="col-md-3 ser-first-grid text-center row">
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

			<div class="row col-md-3 ser-first-grid text-center row">
				<div class="total">
					<h3><?php foreach ($jumlah_berita as $jb) {
	                  echo $jb->jumlah_berita;
	                } ?></h3>
					<h3>Total Berita</h3>
				</div>
			</div>

			<div class="row col-md-3 ser-first-grid text-center row">
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
								<?php 
									$i = 1;
									foreach ($data_testimoni as $key => $value) {
										if ($i <=3 ) { 
											$active = ($key == 0) ? 'active' : '';
											echo '<li data-target="#quote-carousel" data-slide-to=" '.$key.' " class=" '.$active.' "></li>';
								?>
								<?php $i++; }else{}}?>
							</ol>

							<!-- Carousel Slides / Quotes -->
							<div class="carousel-inner">
								<?php 
									foreach ($data_testimoni as $key => $value) {
										$active = ($key == 0) ? 'active' : '';

										echo '<div class="item ' . $active . '">
	                                            <div class="test_grid">	
	                                            	<div class="col-sm-3 text-center">
													<img src="' .site_url('assets/Img/testimoni/').$value->foto.' " style=" width:105px; height: 110px; padding-top:0px; border: 4px solid rgba(255, 255, 255, 0.07);" class="img-responsive">
													</div>
													<div class="col-sm-9 test_img_info">
														<p style="color: white"><b><blockquote> '.$value->testimoni.'</b></blockquote></p>
														<h6>'.$value->nama_rel.'</h6>
													</div>
	                                            </div>
	                                        </div>';
									}
								?>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="newsletter_w3ls_agileits">
		<div class="clearfix"></div>
	</div>

