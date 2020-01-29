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
			<?php foreach ($data_program->result() as $dp){ ?>
			<div class="col-md-4 banner_bottom_left" >
					<div class="banner_bottom_pos main">
						<div class="banner_bottom_pos_grid ">
							<div>
								
								<center>
										<img src="<?php echo site_url(); ?>assets/Img/<?= $dp->foto ?>" class="img-responsive" alt="Gambar" style=" width: 300px; height: 200px;"> 
								</center>
							</div>
							
							<div class=" banner_bottom_grid_right ">
								<h3 style="color: red"><?= $dp->nama_program ?></h3><!-- 
								<img src="<?php echo site_url(); ?>assets/User/images/01.png" alt="logo" width=100%> -->
								<p><?= $dp->deskripsi ?></p>
					        </div>
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