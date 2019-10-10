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
                    <h3 class="box-title">Daftar Agenda</h3>
                </div>
                <!-- /.box-header -->
               
                <form action="<?= site_url('Relawan/agenda'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="box-body">
                        <h4 style="text-align: center;">Silahkan Pilih tanggal agenda yang ingin dilihat :</h4>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label">Tanggal</label>
                                    <div class="col-md-8">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" class="form-control"  name="tanggal_agenda">
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                            </div>
                        </div>
                        <div class="box-footer" >
                            <button type="submit" class="btn btn-primary pull-right">Lihat</button>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>
            </div>
            <!--/.box box-primary -->
        </div>
        <!--/.col (right) -->
     </div>

     <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Agenda Tanggal : <?php echo date('d F Y', strtotime($tanggal_agenda)); ?></h3>
                </div>
                <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Tempat</th>
                                <th>Agenda</th>
                                
                            </tr>
                            <?php foreach ($data_agenda as $da){ ?>
                            <tr>

                                <td><?php echo date('d F Y', strtotime($da->tanggal_agenda)); ?></td>
                                <td><?= $da->jam ?> Wita</td>
                                <td><?= $da->tempat ?></td>
                                <td><?= $da->agenda ?></td>
                            </tr>

                        <?php } ?>
                        </table>
                    </div>                                 
            </div>
            <!--/.box box-primary -->
        </div>
        <!--/.col (right) -->
     </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
</div>