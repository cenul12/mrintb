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
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
                <!-- <?php if($this->session->flashdata('flash')) : ?>
                <div class="box-body">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        Data Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                    </div> 
                </div>
                <?php endif; ?> -->

                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#tambah-agenda"><i class="glyphicon glyphicon-plus"></i> Tambah Data
                    </button>
                </div>
                <br><br>
                <form action="<?= site_url('Admin/agenda'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
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
                            <button type="submit" class="btn btn-primary pull-right" id="lihat"><i class="glyphicon glyphicon-search"></i> Cari</button>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </form>

                <div class="modal fade" id="tambah-agenda">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Tambah Data Agenda</h4>
                        </div>
                        
                        <form action="<?= site_url('create/tambah_agenda'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                            <div class="box-body">
                                <div class="form-group">
                                <div class="row col-md-12">
                                    <label class="col-md-2 control-label">Tanggal </label>
                                    <div class="col-md-8">
                                        <input type="date" class="form-control" name="tanggal_agenda" required>
                                    </div>
                                </div>
                            </div><br><br>

                            <div class="form-group ">
                                <div class="row col-md-12 ">
                                    <label class="col-md-2 ">Waktu </label>
                                    <div class="col-md-8 bootstrap-timepicker">
                                        <input type="time" class="form-control" name="jam" required>
                                    </div>
                                </div>
                            </div><br><br>

                            <div class="form-group ">
                                <div class="row col-md-12 ">
                                    <label class="col-md-2 ">Tempat </label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="tempat" required>
                                    </div>
                                </div>
                            </div><br><br>

                            <div class="form-group">
                                <div class="row col-md-12">
                                    <label class="col-md-2 control-label">Agenda</label>
                                    <div class="col-md-8">
                                        <textarea id="editor1" type="text"   name="agenda" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                                <div class="modal-footer" >
                                    <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </form>
                        </div>
                    </div>
                </div>  
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
                    <h3 class="box-title">Daftar Agenda Tanggal : <?php echo date('d F Y', strtotime($tanggal_agenda)); ?>
                            
                    </h3>
                </div>
                <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="10%">Tanggal</th>
                                    <th width="8%">Waktu</th>
                                    <th width="17%">Tempat</th>
                                    <th width="25%">Agenda</th>
                                    <th width="6%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_agenda as $da){ ?>
                                <tr>
                                    <td><?php echo date('d F Y', strtotime($da->tanggal_agenda)); ?></td>
                                    <td><?= $da->jam ?> Wita</td>
                                    <td><?= $da->tempat ?></td>
                                    <td><?= $da->agenda ?></td>
                                    <td>
                                        <center>
                                            <a href="<?= site_url('');?>Delete/agenda/<?php echo $da->id_agenda ?>" type="button" class="btn btn-danger tombol_hapus" style="margin: 4px"><i class="fa  fa-trash"></i></a>

                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-agenda<?php echo $da->id_agenda ?>" ><i class="fa  fa-edit"></i></button>
                                        </center>
                                    </td>
                                </tr>


                                <!-- edit dengan modal -->   
                                <div class="modal fade" id="edit-agenda<?php echo $da->id_agenda ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit Data Program</h4>
                                        </div>
                                        <div class="modal-body">
                                        <!-- data rapat -->
                                        <form role="form" action="<?= site_url('');?>update/edit_agenda/<?php echo $da->id_agenda ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                            <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Tanggal   </label> 
                                                    <div class="col-md-9">
                                                        <input type="date" class="form-control" name="tanggal_agenda" value="<?php echo $da->tanggal_agenda ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Waktu   </label> 
                                                    <div class="col-md-9 bootstrap-timepicker">
                                                        <input type="time" class="form-control" name="jam" value="<?php echo $da->jam?>">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Waktu   </label> 
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="tempat" value="<?php echo $da->tempat?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Agenda   </label> 
                                                    <div class="col-md-9">
                                                        <textarea id="editor2" type="text" name="agenda_edit" class="form-control" ><?php echo $da->agenda ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- <h3>Nama Program : <?= $value->nama_program; ?> <br/> </h3>
                                        <label>Kategori : <?= $value->keterangan; ?> </label><br>
                                        <label> Deskripsi : </label><br>
                                            <p align='justify'><?= $value->deskripsi; ?></p>
                                        </div> -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary pull-right">Edit</button>
                                            </div>
                                            </form> 
                                        </div>
                                        </div>
                                    </div> 
                                </div>
                                <?php } ?>
                            </tbody>
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