	<!-- <div class="news-main">
		<br><br><br>
		<h3 class="tittle-w3ls we">Program</h3> -->
<div class="banner_bottom proj">
	<div class="wrap_view"><br><br><br>	
		<style type="text/css">
				main {
	              background: #FFF;
	              width: 100%;
	              margin: 15px auto;
	              padding: 20px 2px 20px;
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

