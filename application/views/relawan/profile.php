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
                    <h3 class="box-title">Profile</h3>
                </div>
                <!-- /.box-header -->
                <?php if($this->session->flashdata('flash')) : ?>
                    <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Data Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                        </div> 
                    </div>
                <?php endif; ?>
          
                <form role="form" action="<?= site_url('');?>update/edit_profil/<?php echo $data_relawan['id_relawan'] ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">

                  <div class="box-body">
                    <div class="row col-md-12">
                      <label for="inputText3" class="col-md-2 control-label">Nama Lengkap</label>
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="nama" value="<?php echo $data_relawan['nama_lengkap'] ?>">
                      </div>
                      <label class="col-md-2 control-label">Tanggal Lahir</label>
                      <div class="col-md-4">
                          <div class="input-group date">
                              <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                              </div>
                              <input type="date" class="form-control" placeholder="mm/dd/hh" name="lahir" value="<?php echo $data_relawan['tanggal_lahir'] ?>">
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="row col-md-12">
                        <label class="col-md-2">Jenis Kelamin</label> 
                          <div class="col-md-4">
                            <select class="form-control select2" name="jenisk">
                              <option value="<?php echo $data_relawan['jenis_kelamin']?>"><?php echo $data_relawan['jenis_kelamin']?></option>
                              <option value="Laki - Laki">Laki - Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                        <label class="col-md-2">Agama</label> 
                          <div class="col-md-4">
                            <select class="form-control select2" name="agama">
                              <option value="<?php echo $data_relawan['agama']?>"><?php echo $data_relawan['agama']?></option>
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
                    <div class="row col-md-12">
                        <label class="col-md-2">Jenis Identitas</label> 
                          <div class="col-md-4">
                            <select class="form-control select2" name="jenis">
                              <option value="<?php echo $data_relawan['jenis_identitas']?>"><?php echo $data_relawan['jenis_identitas']?></option>
                              <option value="KTP">KTP</option>
                              <option value="SIM">SIM</option>
                              <option value="PASPOR">PASPOR</option>
                            </select>
                          </div>
                        <label class="col-md-2">No. Identitas</label> 
                          <div class="col-md-4">
                            <input type="text" class="form-control" id="inputText3" placeholder="Ex:63362xx" name="noidentitas" value="<?php echo $data_relawan['no_identitas'] ?>">
                          </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="row col-md-12">
                        <label class="col-md-2">Status Perkawinan</label> 
                          <div class="col-md-4">
                            <select name="status" class="form-control">
                              <option value="<?php echo $data_relawan['status']?>"><?php echo $data_relawan['status']?></option>
                              <option value="Belum Menikah">Belum Menikah</option>
                              <option value="Menikah">Menikah</option>
                              <option value="Duda/Janda">Duda/Janda</option>
                            </select>
                          </div>
                        <label class="col-md-2">Pekerjaan</label> 
                          <div class="col-md-4">
                            <select name="pekerjaan" class="form-control" >
                              <option value="<?php echo $data_relawan['pekerjaan'] ?>"><?php echo $data_relawan['pekerjaan'] ?></option>
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
                    <div class="row col-md-12">
                        <label class="col-md-2">No Handphone</label> 
                          <div class="col-md-4">
                            <input type="text" class="form-control" id="inputText3" placeholder="Ex:087362xx" name="no_hp" value="<?php echo $data_relawan['no_hp'] ?>" >
                          </div>
                          <label class="col-md-2 control-label">Email </label> 
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="email" value="<?php echo $data_relawan['email'] ?>" >
                        </div>
                        
                    </div>
                  </div>

                  <div class="box-body">
                    <div class=" row col-md-12">
                        <label class="col-md-2">Alamat Lengkap</label> 
                          <div class="col-md-4">
                            <textarea name="alamat" class="form-control"><?php echo $data_relawan['alamat'] ?></textarea>
                          </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="row col-md-12">
                        <label class="col-md-2"></label> 
                          <div class="col-md-6">
                            <div class="card" style="width: 18rem;">
                            <img src="<?php echo base_url()?>assets/Img/<?php echo $data_relawan['foto']?>" class="img-thumbnail">
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="row col-md-12">
                        <label class="col-md-2">Foto</label> 
                          <div class="col-md-4">
                            <input type="file" name="foto" class="form-control"  id="lihat_gambar">
                          </div>
                    </div>
                  </div><br><br>
                  
                      <div class="box-footer" >
                          <button type="submit" class="btn btn-primary pull-right">Simpan</button>
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