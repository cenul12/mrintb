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
                    <input type="Password" class="form-control" name="passwordbaru" >
                  </div>
                </div>

                <div class="row form-group">
                  <label  class="col-sm-2 ">Ulangi Password</label>

                  <div class="col-sm-6">
                    <input type="Password" class="form-control" name="U_password" >
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <!-- <input type="hidden" name="id_relawan" value="<?= $this->uri->segment(4) ?>"> -->
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>

      </div>
    </div>
  </section>
</div>