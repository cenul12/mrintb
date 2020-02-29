<div class="banner_bottom bg-dftr">
    <!-- <div class="container"> -->
            <!-- <div class="tittle-w3ls_head"> -->
        <!-- </div> --><br><br>
        <div class="inner_sec_info_wthree_agile dftr">
            <div class="signin-form" >
                <div class="login-form-rec">
                    <form action="<?= site_url('update/ganti_password'); ?>" method="post" enctype="multipart/form-data">
                        <?php if($this->session->flashdata('flash')) : ?>
                            <div class="alert alert-success" style="text-align: center;">
                                <strong><?= $this->session->flashdata('flash'); ?>
                                </strong>
                            </div>
                        <?php endif; ?>
                        <h3 class="tittle-w3ls">Reset Password</h3>
                        <p>Silahkan Masukkan password baru anda!!</p>
    					<div class="row">
                            <div class=" col-md-8">
                                <label>Password Baru</label>
                                <input type="Password" name="passwordbaru" id="passwordbaru" class="form-control" required placeholder="password Anda" onkeyup="cek_pass()">
                                <p id="notif" name="notif" style="color: red; font-size: 12px;"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 ">
                                <label>Ulangi Password</label>
                                <input type="Password" name="U_password" id="repassword" class="form-control" required placeholder="Ulangi Password Anda" onkeyup="cek_repass()">
                                <p id="renotif" name="renotif" style="color: red; font-size: 12px;"></p>
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
            </div>
        </div>
    <!-- </div> -->
</div>
<script type="text/javascript">
    function cek_pass() {
      var str = $('#passwordbaru').val();
      var n = str.length;
      if(n >= 8 || n <= 0){
        document.getElementById("notif").innerHTML = "";
      }else{
        document.getElementById("notif").innerHTML = "password tidak boleh kurang dari 8 karakter";
      }
    }
    function cek_repass()
    {
        var pass = $('#passwordbaru').val();
        var repass = $('#repassword').val();
        if(pass == repass || repass <= 0){
            document.getElementById("renotif").innerHTML = "";
        }else{
            document.getElementById("renotif").innerHTML = "password tidak sama";
        }
    }
</script>