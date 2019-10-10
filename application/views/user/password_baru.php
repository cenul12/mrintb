<div class="banner_bottom bg-dftr">
    <!-- <div class="container"> -->
            <!-- <div class="tittle-w3ls_head"> -->
        <!-- </div> --><br><br>
        <div class="inner_sec_info_wthree_agile dftr">
            <div class="signin-form" >
                <div class="login-form-rec">
                    <form action="<?= site_url('update/ganti_password'); ?>" method="post" enctype="multipart/form-data">
                        <h3 class="tittle-w3ls">Reset Password</h3>
                        <p>Silahkan Masukkan password baru anda!!</p>

    					<div class="row">
                            <div class=" col-md-8">
                                <label>Password Baru</label>
                                <input type="Password" name="passwordbaru" class="form-control" required="" placeholder="password Anda">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 ">
                                <label>Ulangi Password</label>
                                <input type="Password" name="U_password" class="form-control" required="" placeholder="Ulangi Password Anda">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <input type="hidden" name="key" value="<?= $this->uri->segment(3) ?>">
                                <input type="submit" value="Submit">
                            </div>
                        </div>
                    </form>

                </div>
                   <!--  <p class="reg"><a href="#"> By clicking Signup, I agree to your terms</a></p> -->
            </div>
        </div>
    <!-- </div> -->
</div>