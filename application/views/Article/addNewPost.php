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
                        <h1 class="m-0 text-dark">Tambah Postingan Baru</h1>
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

                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?php echo base_url("admin/warga") ?>" class="btn btn-primary"><i class="fas fa-arrow-left fa-fw"></i>&nbsp;Kembali</a>
                                <br>
                                <small style="color:grey">*Jika tidak ingin mengubah data, tekan tombol kembali</small>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('form_error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('form_error'); ?>
                                    </div>
                                <?php endif; ?>
                                <form id="myForm" action="<?php echo site_url('article/addNewPost') ?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id') ?>" />
                                    <div class="form-group">
                                        <label for="tittle">Judul Postingan*</label>
                                        <input class="form-control <?php echo form_error('title') ? 'is-invalid' : '' ?>" type="text" name="title" placeholder="Masukkan Judul Postingan" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('title') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="image">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="image">Choose file Image</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control" name="id_kategori" id="id_kategori">
                                            <?php foreach ($kategori as $ka) : ?>
                                                <option value="<?= $ka['id_kategori']; ?>"><?= $ka['name_kategori']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option>Publish</option>
                                            <option>Draft</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea name="body" class="form-control tinymce" id="body"></textarea>
                                        <?= form_error('body', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                            </div>
                            <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                            </form>
                        </div>
                        <div class="card-footer small text-muted">
                            * required fields
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
    </div>
    </section>
    <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>
    <script src="<?php echo base_url() . 'plugins/tinymce/tinymce.min.js' ?>"></script>
    <!-- <script src="<?php echo base_url() . 'plugins/tinymce/jquery.tinymce.min.js' ?>"></script> -->
    <script>
        tinymce.init({
            selector: '#body',
            height: 400,
        });
    </script>

</body>

</html>