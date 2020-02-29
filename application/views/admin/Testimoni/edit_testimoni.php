  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Testimoni</h3>
                </div>
                    <?php 
                        foreach ($data_testimoni as $key => $value) {
                    
                    ?>
                    <form role="form" action="<?= site_url();?>Update/edit_testimoni/<?php echo $value->id_testimoni ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">       
                        <div class="box-body">
                            <div class="row">
                                <label class="col-md-2 control-label">Nama Relawan </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="namarelawan" value="<?php echo $value->nama_rel ?>">
                                </div>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <Label class="col-md-2">Testimoni </label>
                                <!-- <div class="box-body pad"> -->
                                    <div class="col-md-8">
                                        <div>
                                            <textarea id="editor1" rows="10" cols="98" class="form-control" name="testimoni"  value="<?php echo $value->testimoni; ?>"><?php echo $value->testimoni; ?></textarea>
                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="row">
                                <label class="col-md-2 control-label">Foto </label>
                                <div class="col-md-8">
                                    <img src="<?php echo site_url()?>assets/Img/testimoni/<?= $value->foto?>" name="output_image2" id="output_image2" style="height: 210px; width: 200px;border: 1px solid #808080"><br>
                                    <input type="file" name="foto" onchange="preview_image2(event)" id="output2" style="padding-top: 5px" class="form-control" value="<?= $value->foto; ?> ">
                                    <h5> <b>*</b>Maks ukuran 500 KB (jpg/jpeg/png)</h5>
                                    <h5 style="color: red; padding-top: 4px; font-size: 15px;" id="fp2"></h5>
                                </div>
                            </div>
                        </div>
                    
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary pull-right" name="kirim">Edit</button>
                        </div>
                    </form>
                    <?php }?>
            </div>
            <!--/.box box-primary -->
        </div>
        <!--/.col (right) -->
     </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>