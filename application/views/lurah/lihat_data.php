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
                        <h1 class="m-0 text-dark"> Halo <?php echo $this->session->userdata('nama_lengkap');  ?></h1>
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
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahbaru"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Data Baru</a> -->
                                <h3 class=""> <mark style="background-color:#dc3545; color: white"> Detail Data
                                        <?php foreach ($warga as $d) { ?>
                                            <?php echo  $d->nama; ?>
                                        <?php } ?> </mark>
                                </h3>
                                <a style="position;" href="<?php echo base_url("import") ?>" class="btn btn-primary float-right"><i class="fas fa-file-print"></i>&nbsp;Print</a>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card-body">
                                    <?php foreach ($warga as $d) { ?>
                                        <div class="form-group">
                                            <h5>No Id</h5>
                                            <input type="text" name="first_name" value="<?php echo  $d->id_warga; ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Nama Lengkap</h5>
                                            <input type="text" name="first_name" value="<?php echo  $d->nama; ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>NIK / No KTP</h5>
                                            <input type="text" name="first_name" value="<?php echo  $d->nik; ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Alamat</h5>
                                            <input type="text" name="first_name" value="<?php echo  $d->alamat; ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Jenis Kelamin</h5>
                                            <input type="text" name="first_name" value="<?php echo  jenis($d->j_kelamin); ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Tempat, Tanggal Lahir</h5>
                                            <input type="text" name="first_name" value="<?php echo  $d->tempat;
                                                                                        echo ", ";
                                                                                        echo date('d-m-Y', strtotime($d->tgl_lahir));  ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Status Perkawinan</h5>
                                            <input type="text" name="first_name" value="<?php echo  status($d->status); ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Agama</h5>
                                            <input type="text" name="first_name" value="<?php echo  agama($d->agama); ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Pekerjaan</h5>
                                            <input type="text" name="first_name" value="<?php echo  $d->pekerjaan; ?>" required class="form-control" disabled="">
                                        </div>
                                        <div class="form-group">
                                            <h5>Kebutuhan</h5>
                                            <input type="text" name="first_name" value="  <?php $this->load->helper('kebutuhan_helper');
                                                                                            if ($d->kebutuhan == "5") {
                                                                                                echo keb($d->kebutuhan);
                                                                                                echo ($d->nama);
                                                                                            } else {
                                                                                                echo keb($d->kebutuhan);
                                                                                            } ?>" required class="form-control" disabled="">
                                        </div>
                                    <?php } ?>
                                    <!-- /.card-body -->
                                    <?php foreach ($gambar as  $d) { ?>
                                        <div class="form-group">
                                            <h5>Gambar Pendukung</h5>
                                            <?php
                                            $show = base_url() . 'upload/data/' . $d->gambar;
                                            $image_properties = array(
                                                'src' => base_url() . 'upload/data/' .  $d->gambar,
                                                'alt' => 'gambar_ktp',
                                                'class' => 'post_images',
                                                'width' => '100',
                                                'rel' => 'lightbox'
                                            ); ?>
                                            <a data-darkbox data-toggle="lightbox" class="imggallery" href="<?php echo $show; ?>"><?php echo img($image_properties); ?></a>
                                        </div>
                                        <!-- /.card-body -->
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous"></script>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $(document).on("click", '[data-toggle="lightbox"]', function(e) {
            e.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    </script>


</body>

</html>