<div class="banner_bottom ">
		<div class="container">
			<br><br><br>
			<style type="text/css">
				/*main {
	              background: #FFF;
	              width: 100%;
	              margin: 50px auto;
	              padding: 10px 8px 80px;
	              box-shadow: 0 3px 5px rgba(0,0,0,0.2);
	              
	            }*/

			</style>
			<main><br>
			<h4 class="row col-md-10" style="font-size: 27px"><b><?= $detail_berita['judul_berita'] ?></b></h4><br>
			<div class="inner_sec_info_wthree_agile ">
				<div class="help_full">
					<div class="row col-md-10">
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

						<div class="banner_bottom_grid help ">
							<a class="img-responsive"><img  src="<?= site_url() ;?>assets/Img/berita/<?= $detail_berita['foto'] ?>" alt="image"></a>
							<center>
								<h5 style="margin-bottom: 5px; padding-top: 10px; color: #a0a0a0"><?php echo $detail_berita['keterangan'] ?></h5>
							</center>
						</div>
						<div class="banner_bottom_left">				    
							<div style="text-align: justify; color: black;font-family: sans-serif;">
								<p><?= $detail_berita['isi_berita'] ?></p>
							</div>
						</div>
					</div>
					<center>
						<div class="col-md-2" style="padding-left: 30px; ">
							<p class="db" style="color: black"><b><?php echo ' ', $tanggal,' ', $bulan,' ', $tahun ?></b></p>
							<hr style="border: 1px solid green; width: 100px;">
							<p class="db" style="color: black;"></i>Penulis<br><b><?= $detail_berita['penulis']?></b></p>	
							<hr style="border: 1px solid green;width: 100px;">
							<p class="db" style="color: black;"></i>Editor<br><b><?= $detail_berita['editor']?></b></p>	
						</div>
					</center>
					<div class="clearfix"></div>
				</div>
			</div>
			
		</main>
		<hr>
		</div>
	</div>

