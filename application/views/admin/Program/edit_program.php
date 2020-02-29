  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Program</h3>
                </div>
                    <?php 
                        foreach ($data_program as $key => $value) {
                    
                    ?>
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
                                    <textarea id="editor1" rows="5" cols="59" class="form-control" name="deskripsi"><?= $value->deskripsi; ?>
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row col-md-12">
                                <label class="col-md-3 control-label">Foto</label> 
                                      <div class="col-md-9">
                                        <img src='<?php echo site_url()?>assets/Img/program/<?php echo $value->foto; ?>' name="output_image" id="output_image" style="height: 180px; width: 200px;border: 1px solid #808080">
                                        <input type="file" name="foto" class="form-control" onchange="preview_image(event)">
                                      </div>
                               
                            </div>
                        </div><br><br>
            
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary pull-right">Edit</button>
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