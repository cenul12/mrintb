  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">Akun</h2>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <h2 class="text-center"> Ganti Password</h2>

            <form role="form" action="<?= site_url('');?>update/buat_password/<?php echo $data_relawan['id_relawan'] ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">

              <div class="box-body">
                <div class="row form-group">
                  <label  class="col-sm-2 ">Password Baru</label>

                  <div class="col-sm-6">
                    <input type="Password" class="form-control" name="passwordbaru" id="passwordbaru" onkeyup="cek_pass()">
                    <p id="notif" name="notif" style="color: red; font-size: 12px;"></p>
                  </div>
                </div>

                <div class="row form-group">
                  <label  class="col-sm-2 ">Ulangi Password</label>

                  <div class="col-sm-6">
                    <input type="Password" class="form-control" name="U_password" id="repassword" onkeyup="cek_repass()">
                    <p id="renotif" name="renotif" style="color: red; font-size: 12px;"></p>
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right ganti">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

      </div>
    </div>
  </section>
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