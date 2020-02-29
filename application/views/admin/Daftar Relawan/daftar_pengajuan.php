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
                    <h3 class="box-title">Daftar Pengajuan</h3>
                </div>
                <!-- /.box-header -->
                <div class=" box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="15%">Nama</th>
                                <th width="15%">No HP</th>
                                <th width="15%">Email</th>
                                <th width="20%">Alamat</th>
                                <th width="16%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data_relawan as $key => $value) { 
                                if ($value->status_akun=='0') {
                                ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value->nama_lengkap; ?></td>
                                <td><?php echo $value->no_hp; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td><?php echo $value->alamat; ?></td> 
                                <td>
                                    <center>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#lihat-data<?php echo $value->id_relawan ?>" style="margin: 4px"><i class="fa  fa-eye"></i> Lihat</button>

                                        <a href="<?php echo site_url()?>Update/status_akun/<?php echo $value->id_relawan?>/1" type="button" class="btn btn-success tombol_terima"><i class="fa  fa-check-square-o"></i> Terima</a>
                                    </center>

                                </td>
                            </tr>

                            <div class="modal fade" id="lihat-data<?php echo $value->id_relawan ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Data Relawan</h4>
                                    </div>
                                    <div class="modal-body">
                                    
                                        <div class="box-body">
                                            <div class="row col-md-12">
                                                <label class="col-md-3 control-label">Nama Lengkap   </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama" value="<?= $value->nama_lengkap; ?> " disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Tanggal Lahir  </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="lahir" value="<?= $value->tanggal_lahir; ?> " disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Jenis Kelamin   </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="jenisk" value="<?= $value->jenis_kelamin; ?> " disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Jenis Identitas   </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="jenis" value="<?= $value->jenis_identitas; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Agama   </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="agama" value="<?= $value->no_identitas; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">status    </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="status" value="<?= $value->status; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Pekerjaan    </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="pekerjaan" value="<?= $value->pekerjaan; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">No.Hp  </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="no_hp" value="<?= $value->no_hp; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Email </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="email" value="<?= $value->email; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Password </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="password" value="<?= $value->password; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Alamat Lengkap</label> 
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="alamat" value="<?= $value->alamat; ?> <?= $value->id_desa; ?> <?= $value->id_kec; ?> <?= $value->id_kab; ?> <?= $value->id_provinsi; ?>" disabled><?= $value->alamat; ?>, Desa <?= $value->id_desa; ?>, <?= $value->id_kec; ?>, <?= $value->id_kab; ?>, <?= $value->id_provinsi; ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                            <center>
                                                <img src='<?php echo site_url()?>assets/Img/relawan/<?php echo $value->foto; ?>' style="width: 150px; height:auto; ">
                                            </center>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <?php }} ?>
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