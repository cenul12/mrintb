<div class="banner_bottom bg-dftr">
        <!-- </div> --><br><br>
        <div class="inner_sec_info_wthree_agile dftr">
            <div class="signin-form " >
                <div class="login-form-rec ">
	            	<form action="<?= site_url('Lupa_password'); ?>" method="post" >
	                    <!-- <?php if($this->session->flashdata('flash')) : ?>
		                    <div style="text-align: center; padding-top: 30px">
		                        <strong class="alert alert-success" ><?= $this->session->flashdata('flash'); ?>
		                        </strong>
		                    </div>
		                <?php endif; ?> -->
		                <?php if($this->session->flashdata('flash')) : ?>
		                    <div class="alert alert-success" style="text-align: center;">
		                        <strong><?= $this->session->flashdata('flash'); ?>
		                        </strong>
		                    </div>
		                <?php endif; ?>
	                    <h3 class="tittle-w3ls">Lupa Password</h3>
	                    <p>Silahkan Masukkan email anda untuk melakukan reset password!!</p>

						<div class="row">
					        <div class="col-md-9 ">
					            <label>Masukkan Email</label>
					            <input type="email" name="email" class="form-control" required="" placeholder="Email.Anda@gmail.com">
					        </div>
					        <div class="col-md-3">
								<input type="submit" value="Submit">
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    <!-- </div> -->
</div>