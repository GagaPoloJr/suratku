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
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                             <h2>List Data Masuk</h2>
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
                                            <table id="example1" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Id</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>RT/RW</th>
                                                        <th>Kebutuhan</th>
                                                        <th>Tgl Data Masuk</th>
                                                        <th>Tgl Data Dikonfirmasi</th>
                                                        <th>Keterangan</th>                                                     
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($warga as $s => $key) {  ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $key->id_warga; ?></td>
                                                            <td><?php echo $key->warga; ?></td>
                                                            <td><?php echo $key->nama; echo"/"; echo $rt[$s]->RW; ?></td>
                                                            <td><?php $this->load->helper('kebutuhan_helper');
                                                           
                                                           if( $key->kebutuhan =="5"){
                                                               echo keb($key->kebutuhan); echo($key->warga);
                                                           }
                                                           else{
                                                               echo keb($key->kebutuhan);
                                                               } ?></td>
                                                            <td><?php
                                                            if( $key->tgl_masuk == null){
                                                                echo "Tanggal belum ada";
                                                            }
                                                            else{
                                                                echo date('d-m-Y H:i:s', strtotime( $key->tgl_masuk)); 
                                                            } ?>
                                                 
                                                        </td>
                                                            <td><?php
                                                            if( $key->tgl_proses == null){
                                                                echo "Tanggal belum ada";
                                                            }
                                                            else{
                                                                echo date('d-m-Y H:i:s', strtotime( $key->tgl_proses)); 
                                                            } ?></td>
                                                            <td ><?php
                                                            if( $key->verifikasi == 0){
                                                                echo "<div class='badge badge-danger' >belum diverifikasi </div>";
                                                            }
                                                            if( $key->verifikasi == 1){
                                                                echo "<div class='badge badge-success' >data berhasil diverifikasi  </div>";

                                                            }
                                                             ?></td>
                                                            <td>
                                                                <?php  if( $key->verifikasi == 1){ ?>
                                                             <a data-toggle="tooltip"  data-placement="top" title="konfirmasi" href="<?php echo site_url('admin/konfirmasi_lurah/' . $key->id_data) ?>" class="btn btn-xs btn-block btn-info disabled"><i class="fas fa-check"></i></a>
                                                              <a data-toggle="tooltip" data-placement="top" title="Lihat data" href="<?php echo site_url('admin/detail_data/' . $key->id_warga) ?>" class="btn btn-xs btn-block btn-primary"><i class="fas fa-eye"></i></a>
                                                               <a data-toggle="tooltip" data-placement="top" title="print data" href="<?php echo site_url('admin/export_data_verifikasi/' . $key->id_warga) ?>" class="btn btn-xs btn-block btn-primary"><i class="fas fa-print"></i></a>
                                                                
                                                          <?php  } ?>
                                                          <?php  if( $key->verifikasi == 0){ ?>
                                                                <a data-toggle="tooltip" data-placement="top" title="konfirmasi" href="<?php echo site_url('admin/konfirmasi_lurah/' . $key->id_data) ?>" class="btn btn-xs btn-block btn-info"><i class="fas fa-check"></i></a>
                                                                <a data-toggle="tooltip" data-placement="top" title="Lihat data" href="<?php echo site_url('admin/detail_data/' . $key->id_warga) ?>" class="btn btn-xs btn-block btn-primary"><i class="fas fa-eye"></i></a>
                                                                <!-- <a data-toggle="tooltip" data-placement="top" title="hapus" onclick="deleteConfirm('<?php echo site_url('admin/hapus_data/' . $s->id) ?>')" href="#!" class="btn btn-xs btn-block btn-danger"><i class="fas fa-trash"></i></a> -->
                                                                <!-- <a data-toggle="tooltip" data-placement="top" title="print" href="<?php echo base_url() . 'admin/export_data_warga/' . $s->id ?>" class="btn btn-xs btn-block btn-primary"><i class="fas fa-print"></i> </a> -->
                                                                <?php  } ?>
                                                            </td>

                                                        </tr>
                                                        <?php $i++; ?>

                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>No</th>
                                                        <th>Id</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>RT/RW</th>
                                                        <th>Kebutuhan</th>
                                                        <th>Tgl Data Masuk</th>
                                                        <th>Tgl Data Dikonfirmasi</th>   
                                                        <th>Keterangan</th>                                                     
                                                        <th>Aksi</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="tambahbaru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Baru</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="myForm" action="<?php echo site_url('admin/warga') ?>" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap*</label>
                                                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama Lengkap" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nama') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nik">NIK / No KTP*</label>
                                                    <input class="form-control <?php echo form_error('nik') ? 'is-invalid' : '' ?>" type="text" name="nik" placeholder="Masukkan NIK / No KTP" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nik') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat*</label>
                                                    <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat" placeholder="Masukkan Alamat" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('alamat') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis">Jenis Kelamin*</label>
                                                    <select name="jenis" class="form-control" id="jenis1">
                                                        <option value="">--pilih jenis kelamin--</option>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('jenis') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lahir">Tempat Lahir*</label>
                                                    <input class="form-control <?php echo form_error('lahir') ? 'is-invalid' : '' ?>" type="text" name="lahir" placeholder="Masukkan Tempat Lahir" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('lahir') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl">tanggal lahir*</label>
                                                    <input class="form-control <?php echo form_error('sk') ? 'is-invalid' : '' ?>" type="date" name="tgl" placeholder="Masukkan tanggal lahir" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('tgl') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status Perkawinan*</label>
                                                    <select name="status" class="form-control" id="status">
                                                        <option value="">--pilih Status Perkawinan--</option>
                                                        <option value="kawin">Kawin</option>
                                                        <option value="belum">belum kawin</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('status') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="agama">Agama*</label>
                                                    <select name="agama" class="form-control" id="agama">
                                                        <option value="">--pilih Agama--</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="hindu">Hindu</option>
                                                        <option value="buddha">Buddha</option>
                                                        <option value="lainnya">lainnya</option>


                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('agama') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="pekerjaan">Pekerjaan*</label>
                                                    <input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid' : '' ?>" type="text" name="pekerjaan" placeholder="Masukkan Pekerjaan" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('pekerjaan') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kebutuhan">Kebutuhan*</label>
                                                    <select name="kebutuhan" class="form-control" id="kebutuhan">
                                                        <option value="">--pilih Kebutuhan Surat--</option>
                                                        <option value="KTP">Kartu Keluarga</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kebutuhan') ?>
                                                    </div>
                                                </div>
                                                <div class="small text-muted">
                                                    * required fields
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                                            </form>
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