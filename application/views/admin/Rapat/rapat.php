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
                    <h3 class="box-title">Daftar Hasil Rapat</h3>
                </div>
                <?php if($this->session->flashdata('flash')) : ?>
                    <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Data Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                        </div> 
                    </div>
                <?php endif; ?>
                <!-- <a href="<?php echo site_url('Laporan/rapat') ?>" target="_blank" class="btn btn-default" style="margin-left: 45px"><i class="fa fa-print"></i> Print</a> -->
                <!-- /.box-header -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#tambah-rapat">Tambah Data
                    </button>
                </div>
                
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="23%">Judul</th>
                                <th width="15%">Tanggal</th>
                                <th width="15%">Foto</th>
                                <th width="7%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($data_rapat as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $value->judul; ?></td>
                                <td><?php echo date('d F Y', strtotime($value->tanggal)); ?></td>
                                <td><img src='<?php echo site_url()?>assets/Img/<?php echo $value->foto; ?>' width="100%" height="40%"></td>
                                <td>
                                    <center>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#lihat-rapat<?php echo $value->id_rapat ?>"><i class="fa  fa-eye"></i>
                                    </button>

                                    <a href="<?= site_url('');?>Delete/rapat/<?php echo $value->id_rapat ?>" > <button type="button" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapusnya?');"><i class="fa  fa-trash"></i></button></a>
                                    </center>
                                    <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit-rapat<?php echo $value->id_rapat ?>"><i class="fa  fa-pencil"></i>
                                    </button> -->
                                </td>
                            </tr>

                            <!-- lihat dengan modal -->
                            <div class="modal fade" id="lihat-rapat<?php echo $value->id_rapat ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Data Rapat</h4>
                                    </div>
                                    <div class="modal-body">
                                    <!-- data rapat -->                                
                                        <h2>Pembahasan : <?php echo $value->judul; ?></h2> 
                                        <h3>Tanggal : <?php echo date('d F Y', strtotime($value->tanggal)); ?></h3> 
                                        <img src='<?php echo site_url()?>assets/Img/<?php echo $value->foto; ?>' width="60%" height="40%">
                                        <p>Hasil Rapat : </p>
                                        <?php echo $value->hasil_rapat; ?> <br/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <?php    
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="modal fade" id="tambah-rapat">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tambah Data Rapat</h4>
                            </div>
                            <!-- <div> -->
                            <form action="<?= site_url('create/tambah_rapat'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputText3" class="col-md-2 control-label">Judul</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="inputText3" placeholder="Judul" name="judul" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-2 control-label">Tanggal</label>
                                                <div class="col-md-8">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control"  name="tanggal" required>
                                                    </div>
                                                </div>
                                                <!-- /.input group -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-2" for="exampleInputFile">Foto</label>
                                            <div class="col-md-8">
                                                <input type="file" name="foto" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                                <Label class="col-md-2">Hasil Rapat</label>
                                                <div class="box-body pad">
                                                    <div class="col-md-8">
                                                        <form>
                                                            <textarea  id="editor1" row="20" col="30" name="hasil_rapat" required>
                                                            </textarea>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!--/.col -->
                                        </div> 
                                        <!--/.row (editor) -->
                                    </div>
                                    <div class="modal-footer" >
                                        <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </form>
                            <!-- </div> -->

                        </div>
                    </div>
                </div>
            </div>
            <!--/.box -->

        </div>
        <!--/.col (right) -->
     </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- <script language="JavaScript" type="text/javascript">
function delete(){
    return confirm('apakah anda yakin ingin hapus ini?');
}
</script> -->
