<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php $this->load->view('template/navbar.php'); ?>
    <?php $this->load->view('template/sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Home</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <?php $this->load->view('template/breadcrumb.php'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-danger">
                        <h3 class="widget-user-username">Selamat Datang</h3>
                        <h5 class="widget-user-desc">Ke Dalam Admin Sistem Pengelolaan Surat</h5>
                    </div>
                    <div class="widget-user-image">
                        <img class="" src="<?php echo base_url() . 'dist/img/pku.png' ?>" alt="User Avatar" style="border: 0px; ">
                    </div>
                    <div class="card-footer">
                        <div class="">
                            <br>
                            <!-- /.col -->
                            <div class="Widget-user-username">
                                <div class="description-block">
                                    <h3 class="description-header">Kel LBB </h3>
                                    <h5 class="description-header">Kelurahan Labuhbaru Barat</h5>
                                    <a class="description">Kota Pekanbaru</a>
                                </div>
                                <!-- /.description-block -->
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- Small boxes (Stat box) -->
                <?php if ( $this->session->userdata('level') == "1") { ?>
               <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?php foreach ($warga as $d) { ?>
                                        <?php echo  $d->count; ?>
                                    <?php } ?> Data Warga</h3>
                                <p>Data-data warga yang sudah dimasukkan</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="<?php echo base_url("admin/smartbook") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>                
                    <div class="col-lg-6 col-6">
                    
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php foreach ($warga_konf as $d) { ?>
                                        <?php echo  $d->count; ?>
                                    <?php } ?> Data Sudah Di Konfirmasi</h3>
                                <p>Data yang sudah dikonfirmasi untuk disposisi ke Lurah</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="<?php echo base_url("admin/peminjaman") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>  
                    <div class="col-lg-12 col-6">
                    
                    <div class="small-box bg-warning">
                        <div class="inner" style="text-align: center;">
                            <h3><?php foreach ($warga_konf_1 as $d) { ?>
                                    <?php echo  $d->count; ?>
                                <?php } ?> Data Sudah Di Verifikasi</h3>
                            <p>Data yang sudah diverifikasi kelurahan</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-archive"></i>
                        </div>
                        <a href="<?php echo base_url("admin/peminjaman") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>                   
                </div> 
                <?php } ?>
                <!-- /.row -->
                  <!-- Small boxes (Stat box) -->
                  <?php if ( $this->session->userdata('level') == "2") { ?>
               <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3><?php foreach ($data_masuk as $d) { ?>
                                        <?php echo  $d->count; ?>
                                    <?php } ?> Data Masuk</h3>
                                <p>Surat Pengantar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="<?php echo base_url("admin/smartbook") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>                
                    <div class="col-lg-6 col-6">
                    
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php foreach ($data_verifikasi as $d) { ?>
                                        <?php echo  $d->count; ?>
                                    <?php } ?> Data Sudah Di Verifikasi</h3>
                                <p>Surat Pengantar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-archive"></i>
                            </div>
                            <a href="<?php echo base_url("admin/peminjaman") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>           
                </div> 
                                <?php } ?>
                <!-- /.row -->
              
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>