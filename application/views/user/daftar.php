
<div class="banner_bottom bg-dftr">
    <!-- <div class="container"> -->
            <!-- <div class="tittle-w3ls_head"> -->
        <!-- </div> --><br><br>
        <style type="text/css">
                main {
                  background: #FFF;
                  width: 70%;
                  margin: 1px auto;
                  padding: 20px 0px 20px;
                  box-shadow: 0 3px 5px rgba(0,0,0,0.2);
                  /*border: 1px solid #212020;*/
                }
                #output_image
                {
                 max-width: 170px;
                 border: 1px solid #808080;
                 border-radius: 3px;
                 padding: 5px; 
                 max-height: 100%;

                }
        </style>
        <main>
        <div class="inner_sec_info_wthree_agile ">
            <div class="signin-form" >
                <div class="login-form-rec">
                    
                    <h3 class="tittle-w3ls ">Form Pendaftaran Relawan</h3>
                    <form action="<?= site_url('create/daftar'); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 ">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" required="" placeholder="Nama Lengkap Anda">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <label>Tempat</label>
                                <input type="text" name="tempat" class="form-control" required="" placeholder="Tempat Lahir">
                            </div> 
                            <div class="col-md-6 col-xs-12" style="padding-top: 7px;">
                                <label>Tanggal Lahir</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                      </div>
                                    <input type="date" name="lahir" class="form-control" required="" placeholder="Tanggal Lahir" >
                                </div>
                            </div>   
                        </div><br>

                        <div class="row">
                            <div class=" pd col-md-12 col-xs-12">
                                <label>Jenis Kelamin</label>
                                <select name="jenisk" class="form-control" required="">
                                    <option value="tidak ada">Pilih</option>
                                    <option value="Laki - Laki">Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>                                  
                        </div><br>

                        <div class="row">
                            <div class=" pd col-md-6 col-xs-12">
                                <label>Jenis Identitas</label>
                                <select name="jenis" class="form-control" required="">
                                    <option value="0">Pilih</option>
                                    <option value="KTP">KTP</option>
                                    <option value="SIM">SIM</option>
                                    <option value="PASPOR">PASPOR</option>
                                </select>
                            </div> 
                            <div class="col-md-6 col-xs-12">
                                <label>No. Identitas</label>
                                <input type="text" name="noidentitas" class="form-control" required="" placeholder="Ex: 527328xxx">
                            </div>   
                       </div><br>

                        <div class="row">                          
                            <div class=" col-md-4 col-xs-12">
                                <label>Agama</label>
                                <select name="agama" class="form-control" required="">
                                    <option value="0">Pilih</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Catholic">Catholic</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>

                            <div class=" col-md-4 col-xs-12">
                                <label>Status Perkawinan</label>
                                <select name="status" class="form-control" required="">
                                    <option value="0">Pilih</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                    <option value="Menikah">Menikah</option>
                                    <option value="Duda/Janda">Duda/Janda</option>
                                </select>
                            </div>
                            <div class="col-md-4  col-xs-12">
                                <label>Pekerjaan</label>
                                <select name="pekerjaan" class="form-control" required="">
                                    <option value="0">Pilih</option>
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

                        </div><br>

                        <!-- <form action="<?= site_url('User/daftar'); ?>" method="post" enctype="multipart/form-data"> -->
                            <div class="row">
                                <div class=" col-md-6 col-xs-12">
                                    <label>Provinsi</label>
                                        <select name="prov" id="prov" class="form-control" onchange="provinsi()" >
                                            <option disabled selected>Pilih</option>
                                            <?php
                                                foreach ($data_prov as $prov) { 
                                            ?>
                                            <option value="<?php echo $prov->id_provinsi ?>"><?php echo $prov->nama_provinsi ?></option>
                                            <?php } ?>
                                        </select>
                                </div>

                                <div class=" col-md-6 col-xs-12">
                                    <label>Kabupaten</label>
                                    <div id="kabupaten"></div>
                                    <div id="kabupaten1">
                                        <select class="form-control" onchange="kecamatan()">
                                            <option disabled selected>Pilih</option>
                                        </select>
                                    </div>
                                </div> 
                            </div><br>

                            <div class="row">
                                <div class=" col-md-6 col-xs-12">
                                    <label>Kecamatan</label>
                                    <div id="kecamatan"></div>
                                    <div id="kecamatan1">
                                        <select class="form-control" required >
                                            <option disabled selected>Pilih</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6 col-xs-12">
                                    <label>Desa</label>
                                    <div id="desa"></div>
                                    <div id="desa1">
                                        <select  class="form-control" required >
                                            <option disabled selected>Pilih</option>
                                        </select>
                                    </div>
                                </div>   
                            </div><br>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" required placeholder="Jl. Nama Jalan, RT, RW"></textarea>
                            </div>
                        </div><br>
               
                        <div class="row">
                            <div class=" col-md-6 col-xs-12">
                                <label>No. Handphone</label>
                                <input type="text" name="no_hp" class="form-control" required="" placeholder="Ex: 0878747xxx">
                            </div>
                            <div class="  col-md-6 col-xs-12">
                                <label>Email</label>
                                <input type="email" name="email" id="email" class="form-control" required="" placeholder="Email.Anda@gmail.com" onkeyup="checkEmail()">
                                 <p id="cekemail" name="cekemail" style="color: red; font-size: 12px;"></p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class=" col-md-6 col-xs-12">
                                <label>Password</label>
                                <input type="Password" name="password" id="password" class="form-control" required="" placeholder="password Anda" onkeyup="cek_pass()">
                                <p id="notif" name="notif" style="color: red; font-size: 12px;"></p>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <label>Ulangi Password</label>
                                <input type="Password" name="U_password" id="repassword" class="form-control" required="" placeholder="Ulangi Password Anda" onkeyup="cek_repass()">
                                <p id="renotif" name="renotif" style="color: red; font-size: 12px;"></p>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <label>Foto</label><br>
                                <img src="<?php echo site_url("assets/img/pp.png")?>" name="output_image" id="output_image">
                                <input type="file" name="foto" onchange="preview_image(event)" id="output" style="padding-top: 5px" class="form-control">
                               <h5>Maks ukuran 500 KB (jpg/jpeg/png)</h5>
                               <h5 style="color: red; padding-top: 4px; font-size: 15px;" id="fp"></h5>
                            </div>
                        </div><br>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" required=""> Telah Menyetujui syarat & ketentuan sebagai relawan
                          </label>
                        </div>
                        <!-- <p>Silahkan Baca Syarat & Ketentuan Sebelum Klik Tombol <b>Submit</b></p> -->
                        <div class="sy">
                            <p><b>Syarat dan Ketentuan klik <a href="<?= site_url('user/syarat'); ?>">disini!</a></b></p> 
                        </div>

                        <div class="row">
                            <div class="col-md-4 "></div>
                                <div class="col-md-3  col-xs-12">
                                     <input type="submit" value="Daftar">
                                </div>
                            <div class="col-md-4" ></div>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- </div> -->
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

    function cek_pass() {
      var str = $('#password').val();
      var n = str.length;
      if(n >= 8 || n <= 0){
        document.getElementById("notif").innerHTML = "";
      }else{
        document.getElementById("notif").innerHTML = "password tidak boleh kurang dari 8 karakter";
      }
    }

    function cek_repass()
    {
        var pass = $('#password').val();
        var repass = $('#repassword').val();
        if(pass == repass || repass <= 0){
            document.getElementById("renotif").innerHTML = "";
        }else{
            document.getElementById("renotif").innerHTML = "password tidak sama";
        }
    }

    function checkEmail() {

        var email = document.getElementById('email');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (filter.test(email.value) || email.value <= 0) {
            document.getElementById("cekemail").innerHTML = " ";
        }else{
            document.getElementById("cekemail").innerHTML = "Masukkan email yang valid";
            email.focus;
            return false;
        }
    }

    function provinsi()
    {
        var id_provinsi = $('#prov').val();

        $.ajax({
            type : 'POST',
            url  : '<?php echo site_url('Create/kabupaten')?>',
            dataType: 'JSON',
            data : {id_provinsi: id_provinsi},
            success: function (kabupaten){
                var html = '';
                html += '<select name="kab" id="kab" class="form-control" onchange="kecamatan()">';
                html += '<option value="">Pilih</option>';
                var i;
                for (i=0; i<kabupaten.length; i++){
                    html += '<option value="'+kabupaten[i].id_kab+'">'+kabupaten[i].nama_kabupaten+'</option>';
                }
                $('#kabupaten1').hide();
                $('#kabupaten').html(html);
            }
        });
        kecamatan();
        desa();
    }

    function kecamatan()
    {
        var id_kab = $('#kab').val();

        $.ajax({
            type : 'POST',
            url  : '<?php echo site_url('Create/kecamatan')?>',
            dataType: 'JSON',
            data : {id_kab: id_kab},
            success: function (kecamatan){
                var html = '';
                html += '<select name="kec" id="kec" class="form-control" onchange="desa()">';
                html += '<option value="">Pilih</option>';
                var i;
                for (i=0; i<kecamatan.length; i++){
                    html += '<option value="'+kecamatan[i].id_kec+'">'+kecamatan[i].nama_kecamatan+'</option>';
                }
                $('#kecamatan1').hide();
                $('#kecamatan').html(html);
            }
        });
        desa();
    }
    
    function desa()
    {
        var id_kec = $('#kec').val();
        

        $.ajax({
            type : 'POST',
            url  : '<?php echo site_url('Create/desa')?>',
            dataType: 'JSON',
            data : {id_kec: id_kec},
            success: function (desa){
                var html = '';
                html += '<select  class="form-control" >';
                html += '<option value="">Pilih</option>';
                var i;
                for (i=0; i<desa.length; i++){
                    html += '<option value="'+desa[i].id_desa+'">'+desa[i].nama_desa+'</option>';
                }
                $('#desa1').hide();
                $('#desa').html(html);
            }
        });
    }
    

</script>












                               