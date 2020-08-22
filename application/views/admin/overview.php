<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url() . 'dist/css/custom.css' ?>">

</head>
<style>
    .upper {
        text-transform: uppercase;
    }

    .lower {
        text-transform: lowercase;
    }

    .cap {
        text-transform: capitalize;
    }
</style>

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
                <?php if ($this->session->userdata('level') == "1") { ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h4><?php foreach ($warga as $d) { ?>
                                            <?php echo  $d->count; ?>
                                        <?php } ?> Data Warga</h4>
                                    <p>Data-data warga yang sudah dimasukkan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-archive"></i>
                                </div>
                                <a href="<?php echo base_url("admin/warga") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h4><?php foreach ($warga_konf as $d) { ?>
                                            <?php echo  $d->count; ?>
                                        <?php } ?> Data Sudah Di Konfirmasi</h4>
                                    <p>Data yang sudah dikonfirmasi untuk disposisi ke Lurah</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-archive"></i>
                                </div>
                                <a href="<?php echo base_url("admin/warga") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">

                            <div class="small-box bg-warning">
                                <div class="inner" style="text-align: center;">
                                    <h4><?php foreach ($warga_konf_1 as $d) { ?>
                                            <?php echo  $d->count; ?>
                                        <?php } ?> Data Sudah Di Verifikasi</h4>
                                    <p>Data yang sudah diverifikasi kelurahan</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-archive"></i>
                                </div>
                                <a href="<?php echo base_url("admin/warga") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- /.row -->
                <!-- Small boxes (Stat box) -->
                <?php if ($this->session->userdata('level') == "2") { ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h4><?php foreach ($data_masuk as $d) { ?>
                                            <?php echo  $d->count; ?>
                                        <?php } ?> Data Masuk</h4>
                                    <p>Surat Pengantar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-archive"></i>
                                </div>
                                <a href="<?php echo base_url("admin/lurah") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h4><?php foreach ($data_verifikasi as $d) { ?>
                                            <?php echo  $d->count; ?>
                                        <?php } ?> Data Sudah Di Verifikasi</h4>
                                    <p>Surat Pengantar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-archive"></i>
                                </div>
                                <a href="<?php echo base_url("admin/lurah") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- /.row -->
                <br><br>
                <!-- <div class="row justify-content-center"> -->


                <!-- Widget: user widget style 1 -->
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-danger">
                        <h3 class="widget-user-username">PERSYARATAN PENGURUSAN DI KANTOR LURAH LABUHBARU BARAT</h3>
                        <small style="color: grey;">*klik tulisan dibawah untuk membuka</small>
                        <!-- <h5 class="widget-user-desc">Ke Dalam Admin Sistem Pengelolaan Surat</h5> -->
                    </div>

                    <div class="card-footer">
                        <div class="container">
                        <div id="accordion">

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            PENGURUSAN AKTE LAHIR
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                                            <li> FC. KK & KTP AYAH / IBU</li>
                                            <li>FC. KTP 2 ORANG SAKSI</li>
                                            <li>FC. SURAT KET. LAHIR DARI BIDAN / RUMAH SAKIT</li>
                                            <li>FC. SURAT NIKAH / AKTE NIKAH CATATAN SIPIL</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            PENGURUSAN AKTE KEMATIAN
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                                            <li>FC. KK & KTP JENAZAH</li>
                                            <li>FC. KTP PELAPOR</li>
                                            <li>FC. KTP 2 ORANG SAKSI</li>
                                            <li>FC. SURAT KET. KEMATIAN DARI RUMAH SAKIT</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            PENGURUSAN AKTE NIKAH CATATAN SIPIL
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                                            <li>FC. KK & KTP SUAMI – ISTRI </li>
                                            <li>FC. AKTE LAHIR / IJAZAH TERAKHIR SUAMI – ISTRI </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            PENGURUSAN PENGANTAR NIKAH – KUA
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>FC. KK & KTP YANG BERSANGKUTAN</li>
                                            <li>FC. KTP KEDUA ORANGTUA / WALI</li>
                                            <li>ASLI & FC. SURAT PENGANTAR DARI RT / RW</li>
                                            <li>PAS PHOTO 3 X 4 ( 3 LEMBAR )</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            SURAT PINDAH
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                                            <li>FC. KK & KTP YANG BERSANGKUTAN</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            PENGURUSAN KARTU KELUARGA ( KK ) BARU
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                                            <li>SURAT PINDAH DARI DAERAH ASAL ( JIKA BERASAL DARI LUAR LABUHBARU BARAT)</li>
                                            <li>FC. KTP & KK SEMULA (INDUK)</li>
                                            <li>FC. SURAT NIKAH / AKTE NIKAH</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            SURAT KETERANGAN USAHA
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>ISI BLANGKO ( DIKETAHUI RT / RW SETEMPAT)</li>
                                            <li> FC. KK & KTP</li>
                                            <li>FOTO TEMPAT USAHA</li>
                                            <li>SURAT IZIN LINGKUNGAN</li>
                                            <li>FC. TANDA LUNAS PBB TAHUN BERJALAN</li>
                                            <li>FC. AKTA NOTARIS (KHUSUS PT / CV)</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingEight">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            SURAT KETERANGAN BELUM MEMILIKI RUMAH , BELUM MENIKAH, PENGHASILAN, TIDAK MAMPU, TIDAK BEKERJA, GAIB, DLL
                                    </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>ISI BLANGKO ( DIKETAHUI RT / RW SETEMPAT)</li>
                                            <li>FC. KK & KTP YANG BERSANGKUTAN</li>
                                            <li>FC. KTP 2 ORANG SAKSI</li>
                                            <li>FC. SURAT KET. LAHIR DARI BIDAN / RUMAH SAKIT</li>
                                            <li>FC. SURAT NIKAH / AKTE NIKAH CATATAN SIPIL</li>

                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingNine">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            SURAT KETERANGAN DOMISILI
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                                            <li> FC. KK & KTP yang BERSANGKUTAN</li>
                                            <li>FC. KK PENJAMIN (JIKA YANG BERSANGKUTAN MEMILIKI KK & KTP LUAR KOTA)</li>
                                            <li>FC. SURAT KET. LAHIR DARI BIDAN / RUMAH SAKIT</li>
                                            <li>FC. SURAT NIKAH / AKTE NIKAH CATATAN SIPIL</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <div id="nilai" class="card">
                                <div class="card-header" id="headingTen">
                                    <h5 class="mb-0">
                                        <button id="tombol-informasi" class="btn collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            SURAT AHLI WARIS
                                    </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                    <div class="card-body">
                                        <ol class="lower">
                                            <li>BUAT SURAT PERNYATAAN AHLI WARIS (CONTOH ADA DI KANTOR LURAH)</li>
                                            <li> FC. AKTA KEMATIAN</li>
                                            <li>FC. SURAT NIKAH ALMARHUM / ALMARHUMAH</li>
                                            <li>FC. KK & KTP SEMUA AHLI WARIS</li>
                                            <li>FC. AKTA LAHIR / IJAZAH / SURAT NIKAH SEMUA AHLI WARIS</li>
                                            <li>FC. KTP 2 ORANG SAKSI</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>


                        </div>
                        </div>
                        <!-- <h3>PENGURUSAN AKTE LAHIR</h3>
                        <ol class="lower">
                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                            <li> FC. KK & KTP AYAH / IBU</li>
                            <li>FC. KTP 2 ORANG SAKSI</li>
                            <li>FC. SURAT KET. LAHIR DARI BIDAN / RUMAH SAKIT</li>
                            <li>FC. SURAT NIKAH / AKTE NIKAH CATATAN SIPIL</li>

                        </ol>


                        <h3>PENGURUSAN AKTE KEMATIAN </h3>
                        <ol class="lower">
                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                            <li>FC. KK & KTP JENAZAH</li>
                            <li>FC. KTP PELAPOR</li>
                            <li>FC. KTP 2 ORANG SAKSI</li>
                            <li>FC. SURAT KET. KEMATIAN DARI RUMAH SAKIT</li>
                        </ol>
                        <h3>PENGURUSAN AKTE NIKAH CATATAN SIPIL</h3>
                        <ol class="lower">
                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                            <li>FC. KK & KTP SUAMI – ISTRI </li>
                            <li>FC. AKTE LAHIR / IJAZAH TERAKHIR SUAMI – ISTRI </li>
                        </ol>
                        <h3>PENGURUSAN PENGANTAR NIKAH – KUA </h3>
                        <ol class="lower">
                            <li>FC. KK & KTP YANG BERSANGKUTAN</li>
                            <li>FC. KTP KEDUA ORANGTUA / WALI</li>
                            <li>ASLI & FC. SURAT PENGANTAR DARI RT / RW</li>
                            <li>PAS PHOTO 3 X 4 ( 3 LEMBAR )</li>

                        </ol>
                        <h3>SURAT PINDAH</h3>
                        <ol class="lower">
                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                            <li>FC. KK & KTP YANG BERSANGKUTAN</li>
                        </ol>
                        <h3>PENGURUSAN KARTU KELUARGA ( KK ) BARU</h3>
                        <ol class="lower">
                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                            <li>SURAT PINDAH DARI DAERAH ASAL ( JIKA BERASAL DARI LUAR LABUHBARU BARAT)</li>
                            <li>FC. KTP & KK SEMULA (INDUK)</li>
                            <li>FC. SURAT NIKAH / AKTE NIKAH</li>

                        </ol>
                        <h3>SURAT KETERANGAN USAHA</h3>
                        <ol class="lower">
                            <li>ISI BLANGKO ( DIKETAHUI RT / RW SETEMPAT)</li>
                            <li> FC. KK & KTP</li>
                            <li>FOTO TEMPAT USAHA</li>
                            <li>SURAT IZIN LINGKUNGAN</li>
                            <li>FC. TANDA LUNAS PBB TAHUN BERJALAN</li>
                            <li>FC. AKTA NOTARIS (KHUSUS PT / CV)</li>


                        </ol>
                        <h3>SURAT KETERANGAN BELUM MEMILIKI RUMAH , BELUM MENIKAH, PENGHASILAN, TIDAK MAMPU, TIDAK BEKERJA, GAIB, DLL</h3>
                        <ol class="lower">
                            <li>ISI BLANGKO ( DIKETAHUI RT / RW SETEMPAT)</li>
                            <li>FC. KK & KTP YANG BERSANGKUTAN</li>
                            <li>FC. KTP 2 ORANG SAKSI</li>
                            <li>FC. SURAT KET. LAHIR DARI BIDAN / RUMAH SAKIT</li>
                            <li>FC. SURAT NIKAH / AKTE NIKAH CATATAN SIPIL</li>

                        </ol>
                        <h3>SURAT KETERANGAN DOMISILI</h3>
                        <ol class="lower">
                            <li>SURAT PENGANTAR RT / RW SETEMPAT</li>
                            <li> FC. KK & KTP yang BERSANGKUTAN</li>
                            <li>FC. KK PENJAMIN (JIKA YANG BERSANGKUTAN MEMILIKI KK & KTP LUAR KOTA)</li>
                            <li>FC. SURAT KET. LAHIR DARI BIDAN / RUMAH SAKIT</li>
                            <li>FC. SURAT NIKAH / AKTE NIKAH CATATAN SIPIL</li>

                        </ol>
                        <h3>SURAT AHLI WARIS</h3>
                        <ol class="lower">
                            <li>BUAT SURAT PERNYATAAN AHLI WARIS (CONTOH ADA DI KANTOR LURAH)</li>
                            <li> FC. AKTA KEMATIAN</li>
                            <li>FC. SURAT NIKAH ALMARHUM / ALMARHUMAH</li>
                            <li>FC. KK & KTP SEMUA AHLI WARIS</li>
                            <li>FC. AKTA LAHIR / IJAZAH / SURAT NIKAH SEMUA AHLI WARIS</li>
                            <li>FC. KTP 2 ORANG SAKSI</li>

                        </ol> -->

                    </div>
                </div>


                <!-- </div> -->

        </section>
        <!-- /.content -->
    </div>



    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
</body>

</html>