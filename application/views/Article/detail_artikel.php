<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" style="width:10px; height:10px;" href="<?php echo base_url() . 'dist/img/pku-logo.png' ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo base_url() . 'assets/css/styles.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url() . 'assets/css/detail.css' ?>" rel="stylesheet" />

    <title>Detail Berita | Sistem Informasi Manajemen Pelayanan</title>
</head>

<body>
    <?php $this->load->view('template/navbar_utama'); ?>
    <div class="container" id="konten">
        <div class="row justify-content-center mt-2 pt-2">
            <div class="col-md-10 mb-5">
                <h1 class="text-center"><?= $post['title']; ?></h1>
                <h6 class="text-muted text-center">Ditulis oleh admin, dipublikasikan pada <?= $post['date']; ?>. Kategori <?= $post['name_kategori']; ?></h6>
                <img id="gambar_berita" src="<?= base_url('upload/article/' . $post['image']); ?>" class="img-fluid" alt="">
                <p> <i> <?= $post['title']; ?></i></p>
                
                <p><?= $post['body']; ?></p>
            </div>
        </div>
    </div>

   <?php $this->load->view('template/footer_utama') ?>
</body>

</html>