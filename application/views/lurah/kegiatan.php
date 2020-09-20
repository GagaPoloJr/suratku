<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" crossorigin="anonymous">
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
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Galeri Kelurahan Labuhbaru Barat</h2>
                                <br>
                                <?php if ($this->session->userdata('level') == "2") { ?>
                                    <a href="<?php echo base_url() . 'admin/tambahGaleri' ?>" class="btn btn-success"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Album Baru</a>
                                <?php } ?>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php if ($this->session->flashdata('success')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('danger')) : ?>
                                    <div data-aos="fade-up" class="alert alert-danger" role="alert">
                                        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
                                        <?php echo $this->session->flashdata('danger'); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->session->flashdata('form_error')) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $this->session->flashdata('form_error'); ?>
                                    </div>
                                <?php endif; ?>
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table style="width: 100%;" id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul Album</th>
                                                        <th>Tanggal Album</th>
                                                        <th>Foto THumbnail</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($galeri as $galeri) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $galeri->judul ?></td>
                                                            <td><?php echo $galeri->created_on ?></td>
                                                            <td><?php $show = base_url() . 'upload/gallery/thumbs/' . $galeri->gambar_galeri;
                                                                $image_properties = array(
                                                                    'src' => base_url() . 'upload/gallery/thumbs/' .  $galeri->gambar_galeri,
                                                                    'alt' => 'thumbnail',
                                                                    'class' => 'post_images',
                                                                    'width' => '100',
                                                                    'rel' => 'lightbox'
                                                                ); ?>
                                                                <a data-darkbox data-toggle="lightbox" class="imggallery" href="<?php echo $show; ?>"><?php echo img($image_properties); ?></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?php echo base_url(). 'admin/editGaleri/'.$galeri->id_galeri ?>" data-toggle="tooltip" data-placement="top" title="ubah data" class="btn btn-xs btn-block btn-warning"><i class="fas fa-edit"></i></a>
                                                                <button href="#!"  onclick="deleteConfirm('<?php echo base_url(). 'admin/hapusGaleri/' .$galeri->id_galeri  ?>')" class="btn btn-xs btn-block btn-danger"><i class="fas fa-trash"></i></button>
                                                            </td>
                                                        </tr>
                                                    <?php $i++;
                                                    } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Judul Album</th>
                                                        <th>Tanggal Album</th>
                                                        <th>Foto THumbnail</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- modal untuk delete -->
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
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
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