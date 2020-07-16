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
                        <h1 class="m-0 text-dark">Scan Data DPMPTSP</h1>
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>No SK</th>
                                                        <th>Jumlah</th>
                                                        <th>Penanggung Jawab</th>
                                                        <th>Data SK</th>
                                                        <th>Data Dukung</th>
                                                        <th>Jenis Dokumen</th>
                                                        <th>Keadaan Dokumen</th>
                                                        <th>Dus</th>
                                                        <th>No Definitif</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($smartbook as $s) { ?>
                                                        <tr>
                                                            <td><?php echo $s->id; ?></td>
                                                            <td><?php echo $s->kode; ?></td>
                                                            <td><?php echo $s->nama; ?></td>
                                                            <td><?php echo $s->sk; ?></td>
                                                            <td><?php echo $s->jumlah; ?></td>
                                                            <td><?php echo $s->petugas; ?></td>
                                                            <td><?php echo $s->datask; ?></td>
                                                            <td><?php echo $s->datadukung; ?></td>
                                                            <td><?php echo $s->jenisdok; ?></td>
                                                            <td><?php echo $s->keadaan; ?></td>
                                                            <td><?php echo $s->dus; ?></td>
                                                            <td><?php echo $s->urut; ?></td>
                                                            <td>
                                                                <a href="<?php echo site_url('admin/uploadScan/' . $s->id) ?>" class="btn btn-sm btn-success"><i class="fas fa-upload"></i></a>
                                                                <a href="<?php echo site_url('admin/detailScan/' . $s->id) ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                                                <a href="<?php echo site_url('admin/editScan/' . $s->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>No SK</th>
                                                        <th>Jumlah</th>
                                                        <th>Penanggung Jawab</th>
                                                        <th>Data SK</th>
                                                        <th>Data Dukung</th>
                                                        <th>Jenis Dokumen</th>
                                                        <th>Keadaan Dokumen</th>
                                                        <th>Dus</th>
                                                        <th>No Definitif</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
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
</body>

</html>