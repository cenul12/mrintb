<!DOCTYPE html>
<html>
<head>
    <title>Cetak Biodata Relawan MRI NTB</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/Admin/dist/img/mricon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .no {width:150px;}
        .na {width:250px;}
        .koma{width:20px;}
        .foto{width:350px;}
    </style>
</head>
<body>
    <div class="col-md-12 text-center">
        <div class="row">
                <div class=" col-md-2 col-sm-2">
                    <!-- <img src="../assets/Img/act.png" width="105%" height="60%"> -->
                    <img src="<?php echo site_url()?>assets/Img/act.png" width="105%" height="60%">
                </div>
            <div class="col-md-15 col-sm-7">
                <b>
                    <h2>AKSI CEPAT TANGGAP</h2>
                    <h3>Masyarakat Relawan Indonesia</h3>
                    <h1>Provinsi Nusa Tenggara Barat </h1>
                    <p>Jl. Sriwijaya No. 80J, Kel. Pagesangan Timur, Kec. Mataram, Kota Mataram<br>Email: act.lombok@gmail.com</p>
                </b>
            </div>
            <div class=" col-md-2 col-sm-2">
                <img src="<?php echo site_url()?>assets/Img/mri.png" width="150%" height=" 65%">
            </div>
        </div>
    </div>
    <hr>
    <hr>

    <div class="col-md-12 text-center">
        <h3><u>Biodata</u></h3>
    </div>
    <table style='margin-top:50px; ' >
        <thead>
        </thead>
        <tr>
            <td class='no'></td>
            <td class='na'>1. Nama Lengkap</td>
            <td class='koma'>:</td>
            <td class="foto"><?= $data->nama_lengkap ?></td>
            <td rowspan="5" ><img src="<?php echo site_url()?>assets/Img/relawan/<?php echo $data->foto ?>" height="175px" width="140px" ></td>
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>2. Tanggal Lahir</td>
            <td class='koma'>:</td>
            <td><?= $data->tempat ?>, <?php echo date('d F Y', strtotime($data->tanggal_lahir)); ?></td>
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>3. Jenis Kelamin</td>
            <td class='koma'>:</td>
            <td><?= $data->jenis_kelamin ?></td>
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>4. Agama</td>
            <td class='koma'>:</td>
            <td><?= $data->agama ?></td>
            
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na' style="padding-bottom: 27px">5. Alamat</td>
            <td class='koma' style="padding-bottom: 27px">:</td>
            <td><?= $data->alamat ?>, <?= $data->id_desa ?> <?= $data->id_kec ?> <?= $data->id_kab ?> <?= $data->id_provinsi?></td>
            
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>6. Jenis Identitas</td>
            <td class='koma'>:</td>
            <td><?= $data->jenis_identitas ?></td>
           
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>7. Nomor Identitas</td>
            <td class='koma'>:</td>
            <td><?= $data->no_identitas ?></td>
            
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>8. Status</td>
            <td class='koma'>:</td>
            <td><?= $data->status ?></td>
            <td></td>
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>9. Pekerjaan</td>
            <td class='koma'>:</td>
            <td><?= $data->pekerjaan ?></td>
            <td></td>
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>10. Nomor Handphone</td>
            <td class='koma'>:</td>
            <td><?= $data->no_hp ?></td>
            <td></td>
        </tr>
    </table><br><br><br><br>
    <div style="float: right; margin: 100px;">
        <p>Mataram, . . . . . . . . . . . 2019</p>
        <p>Branch Manager,</p>

        <br><br>Ttd.<br><br>

        <p><u>Lalu Muhammad Alfian</u></p>
        <p>NIP. -</p>
    </div>

<script type="text/javascript">
    window.onload = function() { window.print(); }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
