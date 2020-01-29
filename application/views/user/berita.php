<div class="banner_bottom proj">
		<div class="wrap_view"><br><br>	
		<style type="text/css">
				.main {
	              background: #FFF;
	              position: static;
				  padding: 13px 10px 20px;
				  height: 520px;
				  width: 400Px;
				  box-shadow: 0 3px 5px rgba(0,0,0,0.2);
	            }
	            .main:hover {
				  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
				}
		</style>	
			<h3 class="tittle-w3ls">Berita</h3>
			<div class="inner_sec">
				<?php $jumlah = 1; ?>
				<?php foreach ($query->result() as $db){ ?>
				<div class="col-md-4 banner_bottom_left" >
					<div class="banner_bottom_pos main">
						<div class="banner_bottom_pos_grid ">
							<!-- <a href="<?= site_url('user/detail_berita/'.$db->id_berita.''); ?>"> -->
								<div>
									<center>
										<img src="<?php echo site_url(); ?>assets/Img/<?= $db->foto ?>" class="img-responsive" alt="Conceit" style=" width: 370px; height: 250px;"> 
									</center>
								</div>
							<!-- </a> -->
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
							<!-- </a> -->
							<p> <?php $konten=substr($db->isi_berita, 0, 130); echo $konten; ?>....<a href="<?= site_url('user/detail_berita/'.$db->id_berita.''); ?>">Read More</a></p>
						</div>
					</div>
				</div>

				<?php if($jumlah %3 == 0){ echo '<div class="clearfix"></div> <br>';
				$jumlah++;
				}else{
					$jumlah++;
				} ?>
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
				<center>
					<?php 
						echo $this->pagination->create_links();
					?>
				</center>
		</div>

	</div>
