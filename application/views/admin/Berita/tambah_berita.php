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
                    <h3 class="box-title">Tambah Berita</h3>
                </div>
                <!-- /.box-header -->
               
                <form role="form" action="<?= site_url('create/tambah_berita'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="box-body">
                        <div class="form-group">
                            <div class="row">
                                <label for="inputText3" class="col-md-2 control-label">Judul Berita</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="inputText3" placeholder="Judul Berita" name="berita">
                                </div>
                            </div>
                        </div>

                    <!--     <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label">Tanggal</label>
                                    <div class="col-md-8">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" id="datepicker" placeholder="mm/dd/hh" name="tanggal">
                                        </div>
                                    </div> -->
                                    <!-- /.input group -->
                            <!-- </div>
                        </div> -->

                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2" for="exampleInputFile">Foto</label>
                                <div class="col-md-8">
                                    <input type="file" name="foto">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                    <Label class="col-md-2">Isi Berita</label>
                                    <div class="box-body pad">
                                        <div class="col-md-8">
                                            <form>
                                                <textarea  id="editor1" row="20" col="30" name="isi_berita">
                                                </textarea>
                                            </form>
                                        </div>
                                    </div>
                                    <!--/.col -->
                            </div>
                            <!--/.row (editor) -->
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