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
                    <h3 class="box-title">Daftar Nama Relawan</h3>
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

                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Nama Lengkap</th>
                                <th width="12%">No. Hp</th>
                                <th width="12%">Jenis Kelamin</th>
                                <th width="20%">Alamat</th>
                                <th width="14%">Foto</th>
                                <th width="8%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($data_relawan as $key => $value) { 
                                if ($value->status_akun=='1') {
                                ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value->nama_lengkap; ?></td>
                                <td><?php echo $value->no_hp; ?></td>
                                <td><?php echo $value->jenis_kelamin; ?></td>
                                <td><?php echo $value->alamat; ?></td> 
                                <td><img src='<?php echo site_url()?>assets/Img/<?php echo $value->foto; ?>' width="100%" height="15%"></td>
                                <td>
                                    <button type="button" class="btn btn-danger jarak" data-toggle="modal" data-target="#lihat-data<?php echo $value->id_relawan ?>"><i class="fa  fa-eye"></i>Lihat</button>
                                    <a href="<?php echo site_url().'index.php/Update/status_akun/'.$value->id_relawan?>/0"><button type="button" class="btn btn-danger jarak" ><i class="fa  fa-close"></i> Blok</button></a>

                                    <a href="<?= site_url('');?>Delete/relawan/<?php echo $value->id_relawan ?>"><button type="button" class="btn btn-danger jarak"  onclick="return confirm('apakah anda yakin ingin menghapusnya?');"><i class="fa  fa-trash"></i>Hapus</button></a>

                                    <a href="<?= site_url('');?>Laporan/cetak_bio/<?php echo $value->id_relawan ?>" target="_blank"><button type="button" class="btn btn-danger jarak" ><i class="glyphicon glyphicon-print"></i>Cetak</button> </a>

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
                                                <label class="col-md-3 control-label">Alamat  </label> 
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="alamat" value="<?= $value->alamat; ?> <?= $value->desa; ?> <?= $value->kecamatan; ?> <?= $value->kabupaten; ?> <?= $value->provinsi; ?>" disabled><?= $value->alamat; ?>, <?= $value->desa; ?> <?= $value->kecamatan; ?> <?= $value->kabupaten; ?> <?= $value->provinsi; ?>
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                            <center>
                                                <img src='<?php echo site_url()?>assets/Img/<?php echo $value->foto; ?>' width="40%">
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
               <!--           <form action="<?= site_url('Admin/daftar_relawan');?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">
                            <div class="box-body">
                               
                                <div class="form-group">
                                    <div class="row col-md-6">
                                            <div class="col-md-6">
                                                <div class="">
                                                    <input type="text" class="form-control" name="nama_lengkap" id="nama">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary " name="submit" ><i class="fa fa-search"></i> Search
                                            </button>
                                    </div>
                                </div>
                                <div class="box-footer" ></div>
                            </div>
                        </form> -->
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