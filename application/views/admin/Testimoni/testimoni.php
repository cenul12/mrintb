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
                    <h3 class="box-title">Testimoni Relawan</h3>
                </div>
                <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash')?>"></div>
                <?php if($this->session->flashdata('flash')) : ?>
                    <!-- <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Data Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.        
                        </div> 
                    </div> -->
                <?php endif; ?>
                <!-- /.box-header -->
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#tambah-testimoni"><i class="glyphicon glyphicon-plus"></i> Tambah Data
                    </button>
                </div>
                <br><br>
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="23%">Nama Relawan</th>
                                <th width="20%">Testimoni</th> 
                                <th width="10%">Foto</th>
                                <th width="7%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach ($data_testimoni as $value) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $value->nama_rel ?></td>
                                <td><?= $value->testimoni ?></td>
                                <td><img src="<?= site_url()?>assets/Img/testimoni/<?= $value->foto;?>" width="75%" height="15%"></td>
                                <td>
                                    <center>
                                        <a href="<?= site_url('');?>Admin/edit_testimoni/<?php echo $value->id_testimoni ?>"><button type="button" class="btn btn-success edit"><i class="fa  fa-edit"></i></button></a>

                                        <a href="<?= site_url('');?>Delete/testimoni/<?php echo $value->id_testimoni ?>" type="button" class="btn btn-danger tombol_hapus" style="margin: 4px"><i class="fa  fa-trash"></i></a>
                                    </center>
                                </td>
                            </tr>      
                            <?php
                             } 
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="modal fade" id="tambah-testimoni">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Tambah Testimoni</h4>
                            </div>
                            <form role="form" action="<?php echo site_url('Create/testimoni') ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                <div class="box-body">

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-md-2 control-label">Nama Relawan </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" placeholder="nama relawan" name="namarelawan" required>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="form-group">
                                        <div class="row">
                                            <Label class="col-md-2">Testimoni </label>
                                                <div class="col-md-8">
                                                    <div>
                                                        <textarea id="editor1" placeholder="Tuliskan testimoni" class="form-control" rows="10" cols="50" name="testimoni" required></textarea>
                                                    </div>
                                                </div>
                                           
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="row col-md-12">
                                            <label class="col-md-2 control-label">Foto </label>
                                            <div class="col-md-6">
                                                <img src="<?php echo site_url("assets/img/pp.png")?>" name="output_image" id="output_image" style="height: 210px; width: 200px"><br>
                                                <input type="file" name="foto" onchange="preview_image(event)" id="output" class="form-control" required>
                                                <h5> <b>*</b>Maks ukuran 500 KB (jpg/jpeg/png)</h5>
                                                <h5 style="color: red; padding-top: 4px; font-size: 15px;" id="fp"></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="box-footer" >
                                        <button type="submit" class="btn btn-primary pull-right" name="kirim" onclick="tambah()">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  

            </div>  <!--/.box -->
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
        var fi = document.getElementById('output');
        if (fi.files.length > 0) {
            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fsize = fi.files.item(i).size;   
                if((fsize/1024) >= 500){
                    document.getElementById("fp").innerHTML ="Ukuran gambar lebih dari 500 KB";
                }else{
                    // document.getElementById('fp').innerHTML = Math.round((fsize / 1024)) + ' KB';
                    reader.onload = function(data)
                    {
                      var output = document.getElementById('output_image');
                      $("[name='output_image']").val('#');
                      output.src = data.target.result;
                      output.style.display ="block";
                    }
                     reader.readAsDataURL(event.target.files[0]);
                     document.getElementById("fp").innerHTML ="";
                }
            }
        }

    }

    function preview_image2(event) 
    {
        var reader = new FileReader();
        var fi = document.getElementById('output2');
        if (fi.files.length > 0) {
            for (var i = 0; i <= fi.files.length - 1; i++) {
                var fsize = fi.files.item(i).size;   
                if((fsize/1024) >= 500){
                    document.getElementById("fp2").innerHTML ="Ukuran gambar lebih dari 500 KB";
                }else{
                    // document.getElementById('fp').innerHTML = Math.round((fsize / 1024)) + ' KB';
                    reader.onload = function(data)
                    {
                      var output = document.getElementById('output_image2');
                      $("[name='output_image2']").val('#');
                      output.src = data.target.result;
                      output.style.display ="block";
                    }
                     reader.readAsDataURL(event.target.files[0]);
                     document.getElementById("fp2").innerHTML ="";
                }
            }
        }
    }

</script>
<script>
        jQuery(document).ready(function($){
            $('.edit').on('click',function(){
               var getLink = $(this).attr('href');
                swal({
                        title: ' Alert',
                        text: 'Edit Data?',
                        html: true,
                        confirmButtonColor: '#d9534f',
                        showCancelButton: true,
                        },function(){
                        window.location.href = 'admin/testimoni'
                    });
                return false;
            });
        });
    </script>