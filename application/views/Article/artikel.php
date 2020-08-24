<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Informasi Manajemen Pelayanan</title>
    <link rel="icon" style="width:10px; height:10px;" href="<?php echo base_url() . 'dist/img/pku-logo.png' ?>">

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    
    <link href="<?php echo base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/css/detail.css' ?>" rel="stylesheet" />





</head>

<?php $this->load->view('template/navbar_utama'); ?>


<!-- Header -->
<br><br>
<div class="page-section bg-light">
<form action="<?= base_url('page/artikel_list'); ?>" method="post">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">


    <div class="container">
        <div class="row">
        <div class="col-lg-12 md-12 sm-12">
                        <h1 class="text-center">Kumpulan Berita</h1>
                        <br><br>
                    </div>
            <!-- Search form -->
            <div class="col-6">
                <input name="keyword" class="form-control" type="text" placeholder="Search" aria-label="Search" autocomplete="off">

            </div>
            <div class="col-3">
                <input name="submit" type="submit" value="Cari Berita" class="btn btn-info" >

            </div>
            <div class="col-12">
                <?php if (empty($keyword)) :?>
                    &nbsp;
                <?php else :?>
                <p> &nbsp; yang kamu cari: <?php echo $keyword; ?></p>
                <p style="color: grey;"> <i>*Jika berita tidak muncul, klik kembali tombol cari berita untuk munculkan semua</i>
                </p>
            </div>
                <?php endif; ?>
        </form>
        </div>
    </div>
</div>



</div>
<!-- Page Content -->
<div class="container">

    <!-- category -->

    <!-- end category -->

    <div class="row">
        <div class="col-lg">
            <?php if (empty($post)) : ?>
                <div class="alert alert-danger mb-5 pb-5 mt-5" role="alert">
                    Artikel belum ditemukan!
                </div>
            <?php endif; ?>
            <div class="container mt-4">
                <div class="row">
                 
                    <?php foreach ($post as $po) : ?>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img style="max-height: 180px; width:100%;" src="<?= base_url('upload/article/') . $po['image']; ?>" class="card-img-top" alt="<?= $po['title']; ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $po['title']; ?></h4>
                                    <p class="card-text"><?= word_limiter($po['body'], 30); ?></p>
                                    <a href="<?= base_url('page/detail_artikel/') . $po['slug_post']; ?>" class="btn btn-primary">Detail</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Diperbaharui 3 menit yang lalu</small>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Pager -->
            <div class="clearfix">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>

<!-- end card -->

<?php $this->load->view('template/footer_utama'); ?>

</div>


</html>