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
                <a href="<?php echo site_url('Laporan') ?>" target="_blank" class="btn btn-default" style="margin-left: 45px"><i class="fa fa-print"></i> Print</a>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="20%">Nama Lengkap</th>
                                <th width="12%">No. Hp</th>
                                <th width="10%">Jenis Kelamin</th>
                                <th width="22%">Alamat</th>
                                <th width="14%">Foto</th>
                                <th width="28%">Aksi</th>
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
                                <td><img src='<?php echo base_url()?>assets/Img/<?php echo $value->foto; ?>' width="100%" height="15%"></td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#lihat-data<?php echo $value->id_relawan ?>">Lihat</button>
                                    
                                    <!-- <a href='<?php echo base_url().'index.php/Delete/daftar_relawan/'.$value->id_relawan?>'> <button type="button" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapusnya?');">Hapus</button></a> -->

                                     <div class="input-group ">
                                        <div class="">
                                          <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                                            <span class="fa fa-caret-down"></span></button>
                                          <ul class="dropdown-menu">
                                            <li><a href='<?php echo base_url().'index.php/Delete/daftar_relawan/'.$value->id_relawan?>'><p  onclick="return confirm('apakah anda yakin ingin menghapusnya?');">Hapus</p></a></li>
                                            <li><a href="<?php echo base_url().'index.php/Update/status_akun/'.$value->id_relawan?>/0"><p>Blok</p></a></li>
                                            <li><a href="#">Aktif</a></li>
                                          </ul>
                                        </div>
                                    </div>
                                     <!-- <a href="<?php echo base_url()?>Update/status_akun/<?php echo $value->id_relawan?>/0"><button type="button" class="btn btn-danger">Blok</button></a> -->

                                    <!-- <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#edit-data<?php echo $value->id_relawan ?>"><i class="fa  fa-pencil"></i></button> -->
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
                                                    <input type="text" class="form-control" name="alamat" value="<?= $value->alamat; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                            <center>
                                                <img src='<?php echo base_url()?>assets/Img/<?php echo $value->foto; ?>' width="40%">
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

                            
                            <!-- <div class="modal fade" id="edit-data<?php echo $value->id_relawan ?>">
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
                                                    <input type="text" class="form-control" name="nama" value="<?= $value->nama_lengkap; ?> ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Tanggal Lahir  </label> 
                                                <div class="col-md-9">
                                                    <div class="input-group date">
                                                        <div class="input-group-addon">
                                                          <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control" placeholder="mm/dd/hh" name="lahir" value="<?= $value->tanggal_lahir; ?>">
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Jenis Kelamin   </label> 
                                                <div class="col-md-9">
                                                    <select class="form-control select2" name="jenisk" >
                                                        <option value="<?= $value->jenis_kelamin; ?>">
                                                            <?= $value->jenis_kelamin; ?>    
                                                        </option>
                                                        <option value="Laki - Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Jenis Identitas   </label> 
                                                <div class="col-md-9">
                                                    <select class="form-control select2" name="jenis">
                                                      <option value="<?= $value->jenis_identitas; ?>"><?= $value->jenis_identitas; ?></option>
                                                      <option value="KTP">KTP</option>
                                                      <option value="SIM">SIM</option>
                                                      <option value="PASPOR">PASPOR</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Agama   </label> 
                                                <div class="col-md-9">
                                                    <select class="form-control select2" name="agama">
                                                      <option value="<?= $value->no_identitas; ?>"><?= $value->no_identitas; ?></option>
                                                      <option value="Islam">Islam</option>
                                                      <option value="Kristen">Kristen</option>
                                                      <option value="Hindu">Hindu</option>
                                                      <option value="Budha">Budha</option>
                                                      <option value="Catholic">Catholic</option>
                                                      <option value="Konghuchu">Konghuchu</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">status    </label> 
                                                <div class="col-md-9">
                                                    <select name="status" class="form-control">
                                                      <option value="<?= $value->status; ?>"><?= $value->status; ?></option>
                                                      <option value="Belum Menikah">Belum Menikah</option>
                                                      <option value="Menikah">Menikah</option>
                                                      <option value="Duda/Janda">Duda/Janda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Pekerjaan    </label> 
                                                <div class="col-md-9">
                                                    <select name="pekerjaan" class="form-control" >
                                                      <option value="<?= $value->pekerjaan; ?>"><?= $value->pekerjaan; ?></option>
                                                      <option value="PNS">PNS</option>
                                                      <option value="Pelajar">Pelajar</option>
                                                      <option value="Mahasiswa">Mahasiswa</option>
                                                      <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                      <option value="Professional">Professional</option>
                                                      <option value="Wirausaha">Wirausaha</option>
                                                      <option value="TNI">TNI</option>
                                                      <option value="Polri">Polri</option>
                                                      <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">No.Hp  </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama" value="<?= $value->no_hp; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Email </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama" value="<?= $value->email; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                                <label class="col-md-3 control-label">Alamat  </label> 
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nama" value="<?= $value->alamat; ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <div class=" row col-md-12">
                                            <center>
                                                <img src='<?php echo base_url()?>assets/Img/<?php echo $value->foto; ?>' width="40%">
                                            </center>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                </div>
                            </div> -->
                             
                            <?php }} ?>
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