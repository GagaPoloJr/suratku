<?php $this->load->view('template/header_utama'); ?>
<style>
    .container-img {
        width: 100%;
        height: 300px;
        margin-bottom: 20px;
        position: relative;
    }

    .img {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .galeri-overlay {
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(141, 217, 64, 1) 0%, rgba(255, 233, 84, 1) 78%);
        position: absolute;
        opacity: .3;
    }
    .judul-image{
        color: #000;
        z-index: 1;
        text-decoration: none;
    }
</style>

<body id="page-top">
    <?php $this->load->view('template/navbar_utama'); ?>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="masthead-overlay"></div>
        <div class="container">

            <br><br>
            <div class="col-12">
                <div class="text-center">
                    <br>
                    <br><br>
                    <h1 class="section-heading text-uppercase">Selamat Datang!</h1>
                    <h3>
                        <u>Di Kelurahan Labuhbaru Barat</u>
                    </h3>
                </div>
            </div>

            <div id="pimpinan" class="row text-lg-center text-md-center text-sm-center">
                <div class="col-12">


                    <br><br>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/wali1.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Firdaus , S.T, M.T</h4>
                            <p class="card-text"> <b> Walikota Pekanbaru</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/wawali.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Ayat Cahyadi</h4>
                            <p class="card-text"> <b>Wakil Walikota Pekanbaru</b> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/sekda1.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">M. Jamil, M.Si</h4>
                            <p class="card-text"> <b>Sekretaris Kota Pekanbaru</b> </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/camat-1.jpg' ?>" alt="Camat payung sekaki">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Fauzan, S.STP, M.Si</h4>
                            <p class="card-text"> <b>Camat Payung Sekaki</b> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div id="foto" class="card" style="width: 13rem;">
                        <img class="card-img-top" src="<?php echo base_url() . 'dist/img/lurah-1.jpg' ?>" alt="Lurah labuhbaru barat">
                        <div class="card-body">
                            <h4 style="font-weight: bold;" class="card-text badge badge-danger">Wahyu Nofiyandri, M.Pd</h4>
                            <p class="card-text"> <b> Lurah Labuhbaru Barat</b></p>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <!-- <div class="masthead-subheading">Selamat Datang!</div> -->
            <div class="masthead-heading text-uppercase">Sistem Informasi Manajemen Pelayanan</div>
            <div class="masthead-footer">Kelurahan Labuhbaru Barat</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Lihat</a>
        </div>
    </header>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase badge badge-warning">Visi dan Misi</h2>
                <br>
                <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
            </div>
            <div class="row text-center">
                <div class="col-lg-12 col-sm-6 mb-4">
                    <h2>Visi Kota Pekanbaru</h2>
                    <br>
                    <h3 class="section-subheading text-muted">"TERWUJUDNYA KOTA PEKANBARU SEBAGAI PUSAT PERDAGANGAN DAN JASA, PENDIDIKAN SERTA PUSAT KEBUDAYAAN MELAYU, MENUJU MASYARAKAT SEJAHTERA BERLANDASKAN IMAN DAN TAQWA"</h3>

                </div>
                <div class="col-lg-12 col-sm-6 mb-4">
                    <h2>Misi Kota Pekanbaru</h2>
                    <br>
                    <ol style="text-align:left;">
                        <li>Meningkatkan Sumber Daya Manusia (SDM) yang Bertaqwa, Mandiri, Tangguh dan Berdaya Saing Tinggi</li>
                        <li>Mewujudkan Pembangunan Masyarakat Madani Dalam Lingkup Masyarakat Berbudaya Melayu</li>
                        <li>Mewujudkan Tata Kelola Kota Cerdas dan Penyediaan Infrastruktur yang Baik</li>
                        <li>Mewujudkan Pembangunan Ekonomi Berbasiskan Ekonomi Kerakyatan dan Ekonomi Padat Modal, pada Tiga Sektor Unggulan, yaitu Jasa, Perdagangan dan Industri (olahan dan MICE)</li>
                        <li>Mewujudkan Lingkungan Perkotaan yang Layak Huni (Liveable City) dan Ramah Lingkungan (Green City)</li>



                    </ol>
                </div>

            </div>
        </div>
    </section>

    <!-- halaman informasi -->
    <section class="page-section" id="pelayanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Informasi Pelayanan Surat</h2>
                <hr style="border-width:3px">
                <br><br>

            </div>
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

    </section>

    <!-- Berita-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="col-lg-12 col-sm-6 mb-4">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase badge badge-warning">BERITA terbaru</h2>
                    <br>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
            </div>
            <div class="row text-center">
                <?php foreach ($terbaru as $new) : ?>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img style="max-height: 180px;" src="<?= base_url('upload/article/') . $new->image; ?>" class="card-img-top" alt="<?= $new->title; ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?= $new->title; ?></h4>
                                <p class="card-text"><?= word_limiter($new->body, 50); ?></p>
                                <a href="<?= base_url('page/detail_artikel/') . $new->slug_post; ?>" class="btn btn-primary">Detail</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Diperbaharui 3 menit yang lalu</small>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <br><br><br><br>
                <div class="col-12">
                    <a type="button" class="btn btn-info" href="<?= base_url('page/artikel_list') ?>">Lihat lebih banyak</a>
                </div>

            </div>
        </div>
    </section>
    <!-- galeri -->
    <section class="page-section" id="pelayanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kegiatan Kelurahan Labuhbaru Barat</h2>
                <hr style="border-width:3px">
                <br><br>

            </div>
            <div class="row text-center">
                <?php foreach ($galeri as $galeri) : ?>
                    <div class="col-md-4">
                        <a href="<?php echo $galeri->link_galeri ?>" target="_blank">
                            <div style="background-image: url(<?php echo base_url('upload/gallery/thumbs/') . $galeri->gambar_galeri ?>);" class="container-img  img d-flex justify-content-center align-items-center">
                                <div class="galeri-overlay"></div>
                                <div class="judul-image">
                                    <h4><?php echo $galeri->judul ?></h4>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>

    <?php $this->load->view('template/footer_utama'); ?>



</body>

</html>