  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <style type="text/css">
        img {
              width: 100%;
              height: auto;
            }
    </style>
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
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
                <!-- /.box-header -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#tambah-berita"><i class="glyphicon glyphicon-plus"></i> Tambah Data
                    </button>
                </div>
                <br><br>
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="23%">Judul Berita</th>
                                <th width="15%">Tanggal</th> 
                                <th width="12%">Foto</th>
                                <th width="7%">Aksi</th>
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
                                <td><img src="<?= site_url()?>assets/Img/berita/<?= $value->foto;?>" width="100%" height="25%"></td>
                                <td>
                                    <center>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihat-berita<?php echo $value->id_berita ?>" style="margin: 4px" ><i class="fa  fa-eye"></i>
                                        </button>

                                        <a href="<?= site_url('');?>Delete/berita/<?php echo $value->id_berita ?>" type="button" class="btn btn-danger tombol_hapus"><i class="fa  fa-trash"></i></a>
                                    </center>

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
                                        <center><img src='<?php echo site_url()?>assets/Img/berita/<?php echo $value->foto; ?>' width="60%" height="40%">
                                            <h5 style="margin-bottom: 5px; padding-top: 10px; color: #a0a0a0"><?php echo $value->keterangan; ?></h5> 
                                        </center> <br/>
                                        <div class="col-md-12" style="color: red">
                                            <div class="col-md-4">
                                                <label>Post : <?php echo date('d F Y', strtotime($value->tanggal)); ?></label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Penulis : <?= $value->penulis ; ?></label>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Editor : <?= $value->editor ; ?></label>
                                            </div><br>
                                        </div>
                                        <div style="text-align: justify;">
                                            <?php echo $value->isi_berita; ?> <br/>
                                        </div>
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
                                        <label for="inputText4" class="col-md-2 control-label">Penulis</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="inputText4" placeholder="Penulis" name="penulis" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputText5" class="col-md-2 control-label">Editor</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="inputText5" placeholder="editor" name="editor" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                            <Label class="col-md-2">Isi Berita</label>
                                            <div class="box-body pad">
                                                <div class="col-md-8">
                                                    <form>
                                                        <textarea  id="editor1" class="form-control" name="isi_berita">
                                                        </textarea>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--/.col -->
                                    </div>
                                    <!--/.row (editor) -->
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-2" for="exampleInputFile">Foto</label>
                                        <div class="col-md-6">
                                            <img src="<?php echo site_url("assets/img/pp.png")?>" name="output_image" id="output_image" style="height: 210px; width: 200px">
                                            <input type="file" name="foto" class="form-control" onchange="preview_image(event)" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                            <Label class="col-md-2">Ket. Foto</label>
                                            <div class="box-body">
                                                <div class="col-md-8">
                                                    <!-- <form> -->
                                                        <textarea rows="5" class="form-control" name="keterangan" required></textarea>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                            <!--/.col -->
                                    </div>
                                    <!--/.row (editor) -->
                                </div><br>

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
<script type="text/javascript">
     function preview_image(event) 
    {
        var reader = new FileReader();
            reader.onload = function(data)
            {
              var output = document.getElementById('output_image');
              $("[name='output_image']").val('#');
              output.src = data.target.result;
              output.style.display ="block";
            }
             reader.readAsDataURL(event.target.files[0]);

    }

</script>