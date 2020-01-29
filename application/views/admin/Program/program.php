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
                    <h3 class="box-title">Daftar Program</h3>
                </div>
                <!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div> -->
                <?php if($this->session->flashdata('flash')) : ?>
                    <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Data Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#tambah-program">Tambah Data
                    </button>
                <!-- /.box-header -->
                </div>
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Nama Program</th>
                                <th width="18%">Deskripsi</th>
                                <th width="12%">Keterangan</th>
                                <th width="10%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($data_program as $key => $value) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->nama_program ?></td>
                                <td><?= $value->deskripsi ?></td>
                                <td><?= $value->keterangan ?></td>
                                <td><img src="<?= site_url()?>assets/Img/<?= $value->foto;?>" width="100%" height="25%"></td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#lihat-program<?php echo $value->id_program ?>"><i class="fa  fa-eye"></i>
                                    </button>

                                    <a href="<?= site_url('');?>Delete/program/<?php echo $value->id_program ?>"> <button type="button" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapusnya?');"><i class="fa  fa-trash"></i></button></a>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit-program<?php echo $value->id_program ?>"><i class="fa  fa-edit"></i></button>
                                </td>
                            </tr>

                            <!-- lihat dengan modal -->
                            <div class="modal fade" id="lihat-program<?php echo $value->id_program ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Data Program</h4>
                                    </div>
                                    <div class="modal-body">
                                    <!-- data rapat -->

                                    <center><img src="<?= site_url()?>assets/Img/<?= $value->foto;?>" width="60%" height="20%"></center>
                                    <h3>Nama Program : <?= $value->nama_program; ?> <br/> </h3>
                                    <label>Kategori : <?= $value->keterangan; ?> </label><br>
                                    <label> Deskripsi : </label><br>
                                        <p align='justify'><?= $value->deskripsi; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>  

                            <!-- edit dengan modal -->   
                            <div class="modal fade" id="edit-program<?php echo $value->id_program ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Edit Data Program</h4>
                                        </div>
                                    <div class="modal-body">
                                    <!-- data rapat -->
                                        <form role="form" action="<?= site_url('');?>update/edit_program/<?php echo $value->id_program ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                            <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Nama Program   </label> 
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="program" value="<?= $value->nama_program; ?> ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Keterangan   </label> 
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="keterangan" value="<?= $value->keterangan; ?> ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Deskripsi   </label> 
                                                    <div class="col-md-9">
                                                        <textarea rows="5" cols="59" class="form-control" name="deskripsi" value="<?= $value->deskripsi; ?> "><?= $value->deskripsi; ?>
                                                            
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <div class="row col-md-12">
                                                    <label class="col-md-3 control-label">Foto</label> 
                                                          <div class="col-md-9">
                                                            <input type="file" name="foto" class="form-control"  value="<?= $value->foto; ?> ">
                                                          </div>
                                                    <center>
                                                        <img src='<?php echo site_url()?>assets/Img/<?php echo $value->foto; ?>' width="60%" height="40%"><br/><?= $value->foto; ?>
                                                    </center> <br/>
                                                </div>
                                            </div><br><br>
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
                        <?php
                         }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                 <div class="modal fade" id="tambah-program">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Tambah Data Program</h4>
                        </div>
                        <form role="form" action="<?= site_url('create/tambah_program'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputText3" class="col-md-2 control-label">Nama Program</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="inputText3" placeholder="Nama Program" name="program" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                            <Label class="col-md-2">Deskripsi </label>
                                            <div class="box-body pad">
                                                <div class="col-md-8">
                                                    <form>
                                                        <textarea  rows="5" cols="59" placeholder="Deskripsi" name="deskripsi"></textarea>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--/.col -->
                                    </div>
                                    <!--/.row (editor) -->
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputText3" class="col-md-2 control-label">Keterangan</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="inputText3" placeholder="Ex: Program Bulanan" name="keterangan" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <div class="row">
                                        <label class="col-md-2" for="exampleInputFile">Foto</label>
                                        <div class="col-md-8">
                                            <input type="file" name="foto" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer" >
                                    <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                                </div>
                            </div>
                        </form>
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
