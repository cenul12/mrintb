<!DOCTYPE html>
<html>
<head>
    <title>Cetak Data Relawan MRI NTB</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/Admin/dist/img/mricon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="col-md-12 text-center">
        <div class="row">
                <div class=" col-md-2 col-sm-2">
                    <img src="../assets/Img/act.png" width="105%" height="60%">
                </div>
            <div class="col-md-20 col-sm-7">
                <b>
                    <h2>AKSI CEPAT TANGGAP</h2>
                    <h3>Masyarakat Relawan Indonesia</h3>
                    <h1>Provinsi Nusa Tenggara Barat </h1>
                    <p>Jl. Sriwijaya No. 80J, Kel. Pagesangan Timur, Kec. Mataram, Kota Mataram<br>Email: act.lombok@gmail.com</p>
                </b>
            </div>
            <div class=" col-md-2 col-sm-3">
                <img src="../assets/Img/mri.png" width="150%" height=" 65%">
            </div>
        </div>
    </div>
    <hr>
    <hr>

    <div class="col-md-12 text-center">
        <h3>Data Relawan</h3>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr style="text-align: center">
                <th width="5%">No</th>
                <th width="20%">Nama Lengkap</th>
                <th width="12%">No. Hp</th>
                <th width="10%">Jenis Kelamin</th>
                <th width="22%">Alamat</th>
            </tr>
        </thead>
        <tbody>
           <?php
                $no = 1;
                foreach ($data_relawan as $dr) {
            ?>
            <tr>
                <td style="text-align: center"><?php echo $no++; ?></td>
                <td><?php echo $dr->nama_lengkap; ?></td>
                <td><?php echo $dr->no_hp; ?></td>
                <td><?php echo $dr->jenis_kelamin; ?></td>
                <td><?php echo $dr->alamat; ?></td> 
            </tr>
            <?php
             }
            ?>
        </tbody>
    </table>

    <div style="float: right;">
        <p>Mataram, . . . . . . . . . . . 2019</p>
        <p>Branch Manager,</p>

        <br><br>Ttd.<br><br>

        <p>Lalu Muhammad Alfian</p>
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