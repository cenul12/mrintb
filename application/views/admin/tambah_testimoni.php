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
                    <h3 class="box-title">Kirim Notif</h3>
                </div>
                <!-- /.box-header -->
                <?php if($this->session->flashdata('flash')) : ?>
                    <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Email Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                        </div>
                    </div>
                <?php endif; ?>

               <form role="form" action="<?php echo site_url('Create/testimoni') ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="box-body">

                        <div class="form-group">
                            <div class="row">
                                <label class="col-md-2 control-label">Nama Relawan </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="nama relawan" name="namarelawan">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <Label class="col-md-2">Testimoni </label>
                                
                                    <div class="col-md-8">
                                        <form>
                                            <textarea id="editor1" class="form-control" rows="10" cols="50" name="testimoni"></textarea>
                                        </form>
                                    </div>
                               
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="row col-md-12">
                                <label class="col-md-2 control-label">Foto </label>
                                <div class="col-md-6">
                                    <img src="<?php echo site_url("assets/img/pp.png")?>" name="output_image" id="output_image" style="height: 210px; width: 200px"><br>
                                    <input type="file" name="foto" onchange="preview_image(event)" id="output" class="form-control">
                                    <h5> <b>*</b>Maks ukuran 500 KB (jpg/jpeg/png)</h5>
                                    <h5 style="color: red; padding-top: 4px; font-size: 15px;" id="fp"></h5>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer" >
                            <button type="submit" class="btn btn-primary pull-right" >Tambah</button>
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
    </script>