<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('template/head.php'); ?>
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
        <section class="content ">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <h2>List Data Pegawai Kelurahan Labuhbaru Barat</h2>
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
                                <div  id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table  width="100%" id="example1" class="table table-bordered table-hover dataTable table-striped" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Jabatan</th>
                                                      
                                                        <th>username</th>
                                                        <th>password</th>
                                                        <th>Aksi</th>
                                                    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($rt as $s) {  ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $s->nama_pjg; ?></td>
                                                            <td><?php echo $s->jabatan; ?></td>
                                                            <td><?php echo $s->username; ?></td>
                                                            <td><?php echo $s->password; ?></td>
                                                            <td>
                                                            <?php if($this->session->userdata('id')=='2'): ?>
                                                                <a class="badge badge-success">Edit</a>

                                                            <?php else: ?>

                                                            <?php endif ?>

                                                            <?php if($s->jabatan == 'Lurah'): ?>

                                                            <?php else: ?>
                                                            <a class="badge badge-danger" href="#!">Delete</a>
                                                            </td>
                                                            <?php endif ?>


                                                          

                                                        </tr>
                                                        <?php $i++; ?>

                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>username</th>
                                                        <th>password</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


</body>

</html>