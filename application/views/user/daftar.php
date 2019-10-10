
<div class="banner_bottom bg-dftr">
    <!-- <div class="container"> -->
            <!-- <div class="tittle-w3ls_head"> -->
        <!-- </div> --><br><br>
        <style type="text/css">
                main {
                  background: #FFF;
                  width: 90%;
                  margin: 1px auto;
                  padding: 20px 0px 20px;
                  box-shadow: 0 3px 5px rgba(0,0,0,0.2);
                  /*border: 1px solid #212020;*/
                }
        </style>
        <main>
        <div class="inner_sec_info_wthree_agile ">
            <div class="signin-form" >
                <div class="login-form-rec">
                    
                    <h3 class="tittle-w3ls ">Form Pendaftaran Relawan</h3>
                    <!-- <?php
                        if (isset($_GET["status"])=='sukses') {
                            ?>

                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4><i class="icon fa fa-check"></i> Pendaftaran Berhasil!</h4>
                                    Silahkan Cek Email untuk verifikasi.
                                </div>
                                
                            <?php
                        }else {
                            
                        } 
                    ?> -->
                    <form action="<?= site_url('create/daftar'); ?>" method="post" enctype="multipart/form-data">


                        <div class="row">
                            <div class="col-md-12 col-xs-12 ">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" required="" placeholder="Nama Lengkap Anda">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <label>Tanggal Lahir</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                        <input type="date" name="lahir" class="form-control" required="" placeholder="Tanggal Lahir" >
                                    </div>
                            </div>
                        </div>
                        <br>
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

                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <label>Alamat Lengkap</label>
                                <textarea name="alamat" class="form-control" required="Harus Diisi!" placeholder="Jl. Nama Jalan, Nama Dusun, Nama Desa, Nama Kecamatan, Nama Kabupaten dan Nama Provinsi"></textarea>
                            </div>
                        </div><br>
                        <!-- <div><label style="color: red">Akun</label></div><br> -->
                        <div class="row">
                                <div class=" col-md-6 col-xs-12">
                                    <label>No. Handphone</label>
                                    <input type="text" name="no_hp" class="form-control" required="" placeholder="Ex: 0878747xxx">
                                </div>
                                <div class="  col-md-6 col-xs-12">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required="" placeholder="Email.Anda@gmail.com">
                                </div>
                        </div><br>

                        <div class="row">
                                <div class=" col-md-6 col-xs-12">
                                    <label>Password</label>
                                    <input type="Password" name="password" class="form-control" required="" placeholder="password Anda">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <label>Ulangi Password</label>
                                    <input type="Password" name="U_password" class="form-control" required="" placeholder="Ulangi Password Anda">
                                </div>
                        </div><br>

                        <div class="row">
                            <div class="col-md-2 col-xs-12">
                                <label>Upload Foto</label>
                                <input type="file" name="foto" class="form-control">
                               <h5>Maks ukuran 200 KB (jpg/jpeg/png)</h5>
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
                                 <input type="submit" value="Submit">
                            </div>
                            <div class="col-md-4" ></div>
                        </div><br>

                    </form>
                
                </div>
                   <!--  <p class="reg"><a href="#"> By clicking Signup, I agree to your terms</a></p> -->
            </div>
        </div>
    </main>
    <!-- </div> -->
</div>












                               