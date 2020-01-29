<!DOCTYPE html>
<html>
<head>
    <title>Cetak Biodata Relawan MRI NTB</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .header {text-align:center;margin-top:70px;margin-bottom:20px;}
        .no {width:150px;}
        .na {width:270px;}
        .koma{width:40px;}
        .foto {width:150px;height:188px;border:1px solid black;margin-top:110px;margin-left:80px;}
        .nama {text-align:center;margin-top:80px;}
        .headerr {
            width:750px;
            height: 190px;
            margin-top:100px;
        }
        .box {
            width:144px;
            height: 110px;
            border: 1px solid black;
            margin-left: 100px;
            text-align: right;
            padding-top:70px;
        }
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
        <h3>Biodata Relawan</h3>
    </div>
    <table style='margin-top:30px;' cellspacing='0' cellpadding='0'>
        <thead>
            <tr>
                <th>
                  
                </th> 
                <th style='width:10px; text-align: right;' class="headerr col-sm-2 ">
                   Foto 3x4
                </th>
            </tr>
        </thead>
        <tr>
            <td class='no'></td>
            <td class='na'>1. Nama Peserta Didik (lengkap)</td>
            <td class='koma'>:</td>
            <td><?= $data->nama_lengkap ?></td>
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>2. Tanggal Lahir</td>
            <td class='koma'>:</td>
            <td><?= $data->tanggal_lahir ?></td>
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
            <td class='na'>5. Alamat</td>
            <td class='koma'>:</td>
            <td style='width:360px;'><?= $data->alamat ?></td>
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
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>9. Pekerjaan</td>
            <td class='koma'>:</td>
            <td><?= $data->pekerjaan ?></td>
        </tr>
        <tr>
            <td class='no'></td>
            <td class='na'>10. Nomor Handphone</td>
            <td class='koma'>:</td>
            <td><?= $data->no_hp ?></td>
        </tr>
        
    </table>
 
    
    <!-- <table style='margin-top:30px;' cellspacing='0' cellpadding='0'>
        <tr>
            <td>Nama Lengkap</td>
            <td class='koma'>:</td>
            <td><?php echo $data_rel->nama_lengkap ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td class='koma'>:</td>
            <td><?php echo $data_rel->nama_lengkap ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td class='koma'>:</td>
            <td><?php echo $data_rel->nama_lengkap ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td class='koma'>:</td>
            <td><?php echo $data_rel->nama_lengkap ?></td>
        </tr>
    </table> -->
    <div style="float: right;">
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
