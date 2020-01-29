  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Kirim Notif</h3>
                </div>
                <!-- /.box-header -->
                <?php if($this->session->flashdata('flash')) : ?>
                    <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Email Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                        </div>
                    </div>
                <?php endif; ?>

                <form role="form" action="<?php echo site_url('Email/send') ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="box-body">

                        <div class="form-group">
                            <div class="row">
                                <label for="inputText3" class="col-md-2 control-label">Subjek</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="inputText3" placeholder="Subjek" name="subjek">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                    <Label class="col-md-2">isi pesan </label>
                                    <div class="box-body pad">
                                        <div class="col-md-8">
                                            <form>
                                                <textarea id="editor1"  rows="10" cols="98" placeholder="messages" name="pesan"></textarea>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    

                        <div class="box-footer" >
                            <button type="submit" class="btn btn-primary pull-right" name="kirim" >Kirim</button>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
            <!--/.box box-primary -->
        </div>
        <!--/.col (right) -->
     </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>