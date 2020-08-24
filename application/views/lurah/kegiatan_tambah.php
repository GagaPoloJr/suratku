<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
    <link rel="stylesheet" href="<?php echo base_url('dist/css/custom.css') ?>">

    <style>
        a.disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>
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
                        <h1 class="m-0 text-dark"></h1>
                    </div><!-- /.col -->


                    <div class="col-sm-6">
                        <?php $this->load->view('template/breadcrumb.php'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-primary" href="">Kembali</a>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <form action="" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="title">Judul Album : </label>
                                            <input name="Title" id="Title" class="form-control col-sm-8" type="text" placeholder="Masukkan Judul Album">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="exampleInputFile">Upload Thumbnail Galeri</label>
                                            <div class="custom-file col-sm-8">
                                                <input name="Featured" id="Featured" type="file" class="custom-file-input"></input>
                                                <label style="color: grey;" class="custom-file-label" for="exampleInputFile">Upload Thumbnail Galeri anda</label>
                                                <input type="hidden" class="form-control" name="featured_file" id="old_document" />

                                            </div>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="clearfix"></div>
                                        <div class="clearfix"></div>


                                        <div class="form-group">
                                            <label>Upload Gallery Images</label>
                                        </div>
                                        <div class="clearfix"></div>


                                        <fieldset id="fileupload" action="ablums/do_upload" method="POST" enctype="multipart/form-data">
                                            <div class="form-group row fileupload-buttonbar">
                                                <label class="col-sm-2 col-form-label" for="tombol-galeri">Upload Galeri Gambar</label>
                                                <div class="col-sm-10">
                                                    <span class="btn btn-success fileinput-button">
                                                        <i class="fas fa-plus"></i>
                                                        <span>Tambah Foto...</span>
                                                        <input type="file" name="userfile" multiple>
                                                    </span>
                                                    <button type="submit" class="btn btn-primary start">
                                                        <i class="fas fa-upload"></i>
                                                        <span>Mulai upload</span>
                                                    </button>
                                                    <button type="reset" class="btn btn-warning cancel">
                                                        <i class="fas fa-ban"></i>
                                                        <span>Batal upload</span>
                                                    </button>
                                                    <button type="button" class="btn btn-danger delete">
                                                        <i class="fas fa-trash"></i>
                                                        <span>Hapus Semua</span>
                                                    </button>
                                                    <input type="checkbox" class="toggle">
                                                    <!-- The global file processing state -->
                                                    <span class="fileupload-process"></span>
                                                </div>
                                                <!-- The global progress state -->
                                            

                                        <div class="form-group">
                                            <input type="hidden" name="process" value="true">
                                            <input type="hidden" name="id" value="<?php echo (isset($record->id) ? $record->id : ''); ?>">
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </div>

                                    </form>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- Main row -->
              
            </div>
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>

</body>

</html>