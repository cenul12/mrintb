<div class="banner_bottom">
		<div class="container">
			<br><br><br>
			<style type="text/css">
				main {
	              background: #FFF;
	              width: 100%;
	              margin: 50px auto;
	              padding: 10px 8px 80px;
	              box-shadow: 0 3px 5px rgba(0,0,0,0.2);
	              /*border: 1px solid #212020;*/
	            }
			</style>
			<main><br>
			<h3 class="tittle-w3ls"><?= $detail_berita['judul_berita'] ?></h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6 banner_bottom_grid help ">
							<a class="img-responsive"><img  src="<?= site_url() ;?>assets/Img/<?= $detail_berita['foto'] ?>" alt="image" ></a>
						</div>
						<div class="col-md-3"></div>
					</div>
					<div class="col-md-12 banner_bottom_left">
				        <?php
							      if(substr($detail_berita['tanggal'],5,2) == '01'){
							        $bulan = 'Januari';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '02'){
							        $bulan = 'Februari';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '03'){
							        $bulan = 'Maret';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '04'){
							        $bulan = 'April';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '05'){
							        $bulan = 'Mei';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '06'){
							        $bulan = 'Juni';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '07'){
							        $bulan = 'Juli';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '08'){
							        $bulan = 'Agustus';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '09'){
							        $bulan = 'September';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '10'){
							        $bulan = 'Oktober';
							      }elseif(substr($detail_berita['tanggal'],5,2) == '11'){
							        $bulan = 'Nopember';
							      }else{
							        $bulan = 'Desember';
							      }
					    ?>
					    <?php $tahun = substr($detail_berita['tanggal'],0,4) ?>
					    <?php $tanggal = substr($detail_berita['tanggal'],8,2) ?>
						<p class="db" style="color: red"><i class="fa fa-user"></i> Redaksi MRI <i class="fa fa-calendar"></i><?php echo ' ', $tanggal,' ', $bulan,' ', $tahun ?></p>
						<p class="db"><?= $detail_berita['isi_berita'] ?></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</main>
		</div>
	</div>

