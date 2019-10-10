<div class="banner_bottom proj">
		<div class="wrap_view"><br><br><br>	
		<style type="text/css">
				main {
	              background: #FFF;
	              width: 100%;
	              margin: 1px auto;
	              padding: 20px 10px 20px;
	              box-shadow: 0 3px 5px rgba(0,0,0,0.2);
	              /*border: 1px solid #212020;*/
	            }
		</style>	
			<h3 class="tittle-w3ls">Berita</h3>
			<div class="inner_sec">
				<?php $jumlah = 1; ?>
				<?php foreach ($data_berita as $db){ ?>
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
