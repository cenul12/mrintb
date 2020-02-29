

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section> 

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
                <!-- /.row -->
          <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php foreach ($jumlah_relawan as $jk) {
                  echo $jk->jumlah_relawan;
                } ?></h3>
                <p> Pendaftar Relawan</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-people"></i>
              </div>
              <a href="<?php echo site_url('index.php/admin/daftar_relawan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php foreach ($jumlah_program as $jp) {
                  echo $jp->jumlah_program;
                } ?></h3>
                <p>Program</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
              <a href="<?php echo site_url('index.php/admin/program') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                 <h3><?php foreach ($jumlah_berita as $jb) {
                  echo $jb->jumlah_berita;
                } ?></h3>
                <p>Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-paper"></i>
              </div>
              <a href="<?php echo site_url('index.php/admin/berita') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php foreach ($jumlah_agenda as $ja) {
                  echo $ja->jumlah_agenda;
                } ?></h3>
                <p>Agenda</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-calendar"></i>
              </div>
              <a href="<?php echo site_url('index.php/admin/agenda') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <div class="col-md-6">
            <!-- small box -->
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php foreach ($jumlah_rapat as $jr) {
                  echo $jr->jumlah_rapat;
                } ?></h3>
                <p>Rapat</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-list"></i>
              </div>
              <a href="<?php echo site_url('index.php/admin/rapat') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div> 
      </div>

      <div >
        <img  img src="<?php echo site_url("assets/img/mri1.png")?>" width="100%">
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  