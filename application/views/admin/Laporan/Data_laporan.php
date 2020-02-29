  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
        <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Laporan</h3>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="2%">No</th>
                                    <th width="25%">Data Laporan</th>
                                    <th width="1%" style="text-align: center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Cetak Semua Data Relawan</td>
                                    <td style="text-align: center">
                                        <a href="<?php echo base_url('Laporan/relawan') ?>" target="_blank" class= "btn btn-info"><i class="glyphicon glyphicon-print"></i> Cetak</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cetak Semua Data Program</td>
                                    <td style="text-align: center">
                                        <a href="<?php echo base_url('Laporan/program') ?>" target="_blank" class= "btn btn-info"><i class="glyphicon glyphicon-print"></i> Cetak</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Cetak Semua Data Rapat</td>
                                    <td style="text-align: center">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#cetak_rapat"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Cetak Semua Data Agenda</td>
                                    <td style="text-align: center">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#cetak_agenda"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body --> 
                    <div class="modal fade" id="cetak_rapat">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Cetak Data Rapat</h4>
                                </div>
                            
                                <form action="<?= site_url('Laporan/rapat'); ?>"  method="post" target="_blank" enctype="multipart/form-data" accept-charset="utf-8">
                                    <div class="box-body">
                                        <div class="form-group">
                                        <div class="row col-md-12">
                                            <label class="col-md-3 control-label">Dari Tanggal </label>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control" name="tgl_a" required>
                                            </div>
                                        </div>
                                        </div><br><br>
                                        <div class="form-group">
                                        <div class="row col-md-12">
                                            <label class="col-md-3 control-label">Sampai Tanggal </label>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control" name="tgl_b" required>
                                            </div>
                                        </div>
                                        </div><br><br>
                                    
                                        <div class="modal-footer" >
                                            <button type="submit" class="btn btn-primary pull-right" name="cetak_data"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="cetak_agenda">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Cetak Data Agenda</h4>
                                </div>
                            
                                <form action="<?= site_url('Laporan/agenda'); ?>"  method="post" target="_blank" enctype="multipart/form-data" accept-charset="utf-8">
                                    <div class="box-body">
                                        <div class="form-group">
                                        <div class="row col-md-12">
                                            <label class="col-md-3 control-label">Dari Tanggal </label>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control" name="tgl_c" required>
                                            </div>
                                        </div>
                                        </div><br><br>
                                        <div class="form-group">
                                        <div class="row col-md-12">
                                            <label class="col-md-3 control-label">Sampai Tanggal </label>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control" name="tgl_d" required>
                                            </div>
                                        </div>
                                        </div><br><br>
                                    
                                        <div class="modal-footer" >
                                            <button type="submit" class="btn btn-primary pull-right" name="cetak_agenda"><i class="glyphicon glyphicon-print"></i> Cetak</button>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
