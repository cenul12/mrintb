  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <style type="text/css">
      #output_image
      {
       max-width: 230px;
       border: 1px solid #808080;
       border-radius: 2px;
       padding: 5px;  
       height: 230px;
      
     }
    </style>
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
                <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash');?>"></div>
                <!-- <?php if($this->session->flashdata('flash')) : ?>
                    <div class="box-body">
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            Data Berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>.
                        </div> 
                    </div>
                <?php endif; ?> -->
          
                <form role="form" action="<?= site_url('');?>update/edit_profil/<?php echo $data_relawan['id_relawan'] ?>"  method="post" enctype="multipart/form-data" accept-charset="utf-8">

                  <div class="box-body">
                    <div class="row col-md-12">
                      <label for="inputText3" class="col-md-2 control-label">Nama Lengkap</label>
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="nama" value="<?php echo $data_relawan['nama_lengkap'] ?>">
                      </div>
                      <label class="col-md-2">Jenis Kelamin</label> 
                          <div class="col-md-4">
                            <select class="form-control select2" name="jenisk">
                              <option value="<?php echo $data_relawan['jenis_kelamin']?>"><?php echo $data_relawan['jenis_kelamin']?></option>
                              <option value="Laki - Laki">Laki - Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                          </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="row col-md-12">
                      <label for="inputText3" class="col-md-2 control-label">Tempat</label>
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="tempat" value="<?php echo $data_relawan['tempat'] ?>">
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
                      <label class="col-md-2">Jenis Identitas</label> 
                      <div class="col-md-4">
                        <select class="form-control select2" name="jenis">
                          <option value="<?php echo $data_relawan['jenis_identitas']?>"><?php echo $data_relawan['jenis_identitas']?></option>
                          <option value="KTP">KTP</option>
                          <option value="SIM">SIM</option>
                          <option value="PASPOR">PASPOR</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="row col-md-12">
                      <label class="col-md-2">No. Identitas</label> 
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="inputText3" placeholder="Ex:63362xx" name="noidentitas" value="<?php echo $data_relawan['no_identitas'] ?>">
                      </div>
                      <label class="col-md-2">Status Perkawinan</label> 
                      <div class="col-md-4">
                        <select name="status" class="form-control">
                          <option value="<?php echo $data_relawan['status']?>"><?php echo $data_relawan['status']?></option>
                          <option value="Belum Menikah">Belum Menikah</option>
                          <option value="Menikah">Menikah</option>
                          <option value="Duda/Janda">Duda/Janda</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="row col-md-12">
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
                      <label class="col-md-2">No Handphone</label> 
                      <div class="col-md-4">
                        <input type="text" class="form-control" id="inputText3" placeholder="Ex:087362xx" name="no_hp" value="<?php echo $data_relawan['no_hp'] ?>" >
                      </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class=" row col-md-12">
                      <label class="col-md-2 control-label">Provinsi </label> 
                      <div class="col-md-4 ">
                          <select name="prov" id="prov" class="form-control " onchange="kabupaten()">
                          <option value="<?php echo $data_relawan['id_provinsi'] ?>"><?php echo $data_rel['id_provinsi'] ?></option>
                          <?php
                              foreach ($data_prov as $prov) { 
                          ?>
                            <option value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?></option> 
                          <?php } ?>
                        </select> 
                      </div> 
                      <label class="col-md-2">Kabupaten</label>  
                      <div class="col-md-4">
                        <select name="kab" id="kab" class="form-control" onchange="kecamatan()">
                          <option value="<?php echo $data_relawan['id_kab']?>"><?php echo $data_rel['id_kab'] ?></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class=" row col-md-12">
                      <label class="col-md-2 control-label">Kecamatan </label> 
                      <div class="col-md-4">
                        <select name="kec" id="kec" class="form-control" onchange="desa()">
                            <option value="<?php echo $data_relawan['id_kec']?>"><?php echo $data_rel['id_kec'] ?></option>
                        </select>
                      </div>
                      <label class="col-md-2">Desa</label> 
                      <div class="col-md-4">
                        <select name="des" id="des"  class="form-control">
                           <option value="<?php echo $data_relawan['id_desa']?>"><?php echo $data_rel['id_desa'] ?></option>
                        </select>
                      </div>
                    </div>
                  </div>
                 
                  <div class="box-body">
                    <div class=" row col-md-12">
                      <label class="col-md-2 control-label">Email </label> 
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="email" value="<?php echo $data_relawan['email'] ?>" >
                      </div>
                      <label class="col-md-2">Alamat Lengkap</label> 
                      <div class="col-md-4">
                        <textarea name="alamat" class="form-control"><?php echo $data_relawan['alamat'] ?></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="box-body">
                    <div class="row col-md-12">
                        <label class="col-md-2">Foto</label> 
                          <div class="col-md-3" >
                            <img src="<?php echo site_url()?>assets/Img/relawan/<?php echo $data_relawan['foto']?>" name="output_image" id="output_image" ><br>
                            <input type="file" name="foto" class="form-control"  id="output" onchange="preview_image(event)">
                        </div>
                          <div class="col-md-4">
                           <h5> <b>*</b>Maks ukuran 500 KB (jpg/jpeg/png)</h5>
                           <p id="fp" style="color: red"></p>
                        </div>
                    </div>
                  </div>
                  <br>
                  
                      <div class="box-footer" >
                          <button type="submit" class="btn btn-success pull-right"><i class="fa fa-save"></i> Simpan</button>
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

  function kabupaten()
    {
        var id_provinsi = $('#prov').val();

        $.ajax({
            type : 'POST',
            url  : '<?php echo site_url('User/kabupaten')?>',
            dataType: 'JSON',
            data : {id_provinsi: id_provinsi},
            success: function (data){
                var html = '';
                html += '<option value="value="<?php echo $data_rel['id_kab']?>""><?php echo $data_rel['id_kab'] ?></option>';
                var i;
                for (i=0; i<data.length; i++){
                    html += '<option value="'+data[i].id_kab+'">'+data[i].nama_kabupaten+'</option>';
                }
                $('#kab').html(html);
            }
        });
    }

    function kecamatan()
    {
        var id_kab = $('#kab').val();

        $.ajax({
            type : 'POST',
            url  : '<?php echo site_url('User/kecamatan')?>',
            dataType: 'JSON',
            data : {id_kab: id_kab},
            success: function (data){
                var html = '';
                html += '<option value="value="<?php echo $data_rel['id_kec']?>""><?php echo $data_rel['id_kec'] ?></option>';
                var i;
                for (i=0; i<data.length; i++){
                    html += '<option value="'+data[i].id_kec+'">'+data[i].nama_kecamatan+'</option>';
                }
                $('#kec').html(html);
            }
        });
    }
    
    function desa()
    {
        var id_kec = $('#kec').val();

        $.ajax({
            type : 'POST',
            url  : '<?php echo site_url('User/desa')?>',
            dataType: 'JSON',
            data : {id_kec: id_kec},
            success: function (data){
                var html = '';
                html += '<option value="value="<?php echo $data_rel['id_desa']?>""><?php echo $data_rel['id_desa'] ?></option>';
                var i;
                for (i=0; i<data.length; i++){
                    html += '<option value="'+data[i].id_desa+'">'+data[i].nama_desa+'</option>';
                }
                $('#des').html(html);
            }
        });
    }


</script>