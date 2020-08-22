<!DOCTYPE html>
<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" crossorigin="anonymous">
    <?php $this->load->view('template/head.php'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php $this->load->view('template/navbar.php'); ?>
    <?php $this->load->view('template/sidebar.php'); ?>

    <div class="content-wrapper">
        <!-- Begin Page Content -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"><?= $title; ?></h1>
                    </div><!-- /.col -->

                    <div class="col-sm-6">
                        <?php $this->load->view('template/breadcrumb.php'); ?>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">

                <!-- Page Heading -->
                <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= base_url('article/addNewPost'); ?>" class="btn btn-primary mb-3">Tambah Post Baru</a>
                                <!-- DataTales -->
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table width="100%" id="example1" class="table table-bordered table-hover dataTable table-striped" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Kategori</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($post as $ps) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $i++; ?></th>
                                                            <td><?= $ps['title']; ?></td>
                                                            <td><img src="<?= base_url('./upload/article/') . $ps['image']; ?>" width="100" alt=""></td>
                                                            <td><?= $ps['status']; ?></td>
                                                            <td><?= $ps['name_kategori']; ?></td>
                                                            <td>
                                                                <a class="badge badge-success" href="<?= base_url('article/editPost/') . $ps['id_post']; ?>">Edit</a>
                                                                <a class="badge badge-danger" href="#!" onclick="deleteConfirm('<?php echo site_url('article/deletePost/' . $ps['id_post']) ?>')">Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?= form_error('title', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <?= form_error('image', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                        <?= form_error('deskription', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                        <?= $this->session->flashdata('message'); ?>


                    </div>
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Data yang sudah di konfirmasi tidak bisa diubah.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a id="btn-confirm" class="btn btn-warning" href="#">Konfirmasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }

        function konfirmasi(url) {
            $('#btn-confirm').attr('href', url);
            $('#confirmModal').modal();
        }
    </script>
</body>

</html>