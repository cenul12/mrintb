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
                    <h3 class="box-title">Daftar Berita</h3>
                </div>
                <?php if($this->session->flashdata('flash')) : ?>
                    <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Data Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.        
                        </div> 
                    </div>
                <?php endif; ?>
                <!-- /.box-header -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#tambah-berita">Tambah Data
                    </button>
                </div>

                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Judul Berita</th>
                                <th width="15%">Tanggal</th>
                                <th width="10%">Foto</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach ($data_berita as $key => $value) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->judul_berita ?></td>
                                <td><?php echo date('d F Y', strtotime($value->tanggal)); ?></td>
                                <td><img src="<?= base_url()?>assets/Img/<?= $value->foto;?>" width="100%" height="25%"></td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#lihat-berita<?php echo $value->id_berita ?>">Lihat
                                    </button>

                                    <a href='<?php echo base_url().'index.php/Delete/berita/'.$value->id_berita?>' > <button type="button" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapusnya?');">Hapus</button></a>

                                    <!-- <button type="button" class="btn btn-danger"><i class="fa  fa-pencil"></i></button> -->
                                </td>
                            </tr>

                             <!-- lihat dengan modal -->
                             <div class="modal fade" id="lihat-berita<?php echo $value->id_berita ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Data Berita</h4>
                                    </div>
                                    <div class="modal-body">
                                    <!-- data rapat -->                                
                                        <center><h1><?php echo $value->judul_berita; ?></h1></center> <br/>
                                        <label>Post : <?php echo date('d F Y', strtotime($value->tanggal)); ?></label> <br/>
                                        <center><img src='<?php echo base_url()?>assets/Img/<?php echo $value->foto; ?>' width="60%" height="40%"></center> <br/>
                                        <?php echo $value->isi_berita; ?> <br/>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
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
                <div class="modal fade" id="tambah-berita">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Tambah Data Berita</h4>
                        </div>
                        <form role="form" action="<?= site_url('create/tambah_berita'); ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputText3" class="col-md-2 control-label">Judul Berita</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="inputText3" placeholder="Judul Berita" name="berita" required>
                                        </div>
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
            <!--/.box -->

        </div>
        <!--/.col (right) -->
     </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>