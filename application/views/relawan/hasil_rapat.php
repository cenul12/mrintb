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
                    <h3 class="box-title">Hasil Rapat</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="30%">Judul</th>
                                <th width="15%">Tanggal</th>
                                <!-- <th width="15%">Foto</th> -->
                                <!-- <th width="35%">Hasil</th> -->
                                <th width="10%">Aksi</th>
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
                               <!--  <td><img src='<?php echo base_url()?>assets/Img/<?php echo $value->foto; ?>' width="100%" height="30%">
                                </td> -->
                               <!--  <td><?php echo $value->hasil_rapat; ?></td> -->

                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#lihat-rapat<?php echo $value->id_rapat ?>">Lihat
                                    </button>

                                    <!-- <button type="button" class="btn btn-danger"><i class="fa  fa-pencil"></i></button> -->
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
                                        <h3>Pembahasan : <?php echo $value->judul; ?> </h3>
                                        <h3>Tanggal Rapat : <?php echo date('d F Y', strtotime($value->tanggal)); ?> </h3><br>
                                        <center>
                                        <img src='<?php echo base_url()?>assets/Img/<?php echo $value->foto; ?>' width="60%" height="40%"></center> <br/>
                                        <h4><b> Hasil Rapat</b></h4>
                                        <?php echo $value->hasil_rapat; ?><br>
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
