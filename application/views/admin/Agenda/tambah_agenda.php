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
                    <h3 class="box-title">Tambah Agenda</h3>
                </div>
                <!-- /.box-header -->
               
                <form action="<?= site_url('create/tambah_agenda'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="box-body">
                        <div class="form-group">
                        <div class="row col-md-12">
                            <label class="col-md-2 control-label">Tanggal </label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_agenda">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="form-group ">
                        <div class="row col-md-12 ">
                            <label class="col-md-2 ">Waktu </label>
                            <div class="col-md-8 bootstrap-timepicker">
                                <input type="time" class="form-control" name="jam">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="form-group ">
                        <div class="row col-md-12 ">
                            <label class="col-md-2 ">Tempat </label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="tempat">
                            </div>
                        </div>
                    </div><br><br>

                    <div class="form-group">
                        <div class="row col-md-12">
                            <label class="col-md-2 control-label">Agenda</label>
                            <div class="col-md-8">
                                <form>
                                    <textarea  rows="8" cols="40"  name="agenda" class="form-control"></textarea>
                            </form>
                            </div>
                        </div>
                    </div>
                        <div class="box-footer" >
                            <button type="submit" class="btn btn-primary pull-right">Tambah</button>
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