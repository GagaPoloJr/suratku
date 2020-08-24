<!DOCTYPE html>
<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet" crossorigin="anonymous">
    <?php $this->load->view('template/head.php'); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <style>
        a.disabled {
            pointer-events: none;
            cursor: default;
        }

        .imggallery {
            max-height: 250px;
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
                    <?php foreach ($rw as $nama) { ?>
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Data Warga <?php echo $this->session->userdata('nama');
                                                                    echo "/";
                                                                    echo $nama->RW;
                                                                    echo " - ";
                                                                    echo $this->session->userdata('nama_lengkap')  ?></h1>
                        </div><!-- /.col -->
                    <?php } ?>
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
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#tambahbaru"><i class="fas fa-plus fa-fw"></i>&nbsp;Tambah Data Baru</a>
                                <!-- <a href="<?php echo base_url("import") ?>" class="btn btn-primary"><i class="fas fa-file-import"></i>&nbsp;Import</a> -->

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
                                            <table id="example1" width="100%" class="table table-bordered table-hover dataTable table-striped" role="grid" aria-describedby="example2_info">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Id</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>No KK</th>
                                                        <th>NIK / No KTP</th>
                                                        <th>Kebutuhan</th>
                                                  

                                                        <th>Keterangan</th>
                                                        <th>Download Surat Pengantar</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1;
                                                    foreach ($warga as $s) {  ?>
                                                        <tr>
                                                            <td><?php echo $i ?></td>
                                                            <td><?php echo $s->id_warga; ?></td>
                                                            <td><?php echo $s->nama; ?></td>
                                                            <td><?php echo $s->no_kk; ?></td>
                                                            <td><?php echo $s->nik; ?></td>
                                                            <td><?php $this->load->helper('kebutuhan_helper');

                                                                if ($s->kebutuhan == "5") {
                                                                    echo keb($s->kebutuhan);
                                                                    echo ($s->nama);
                                                                } else {
                                                                    echo keb($s->kebutuhan);
                                                                } ?></td>
                                                          

                                                            <td><?php if ($s->keterangan == "0") {
                                                                    echo "<label class='badge badge-danger' >Belum Dikonfirmasi  </label>";
                                                                }
                                                                if ($s->keterangan == "1") {
                                                                    echo "<label class='badge badge-success' >sudah Dikonfirmasi  </label>";
                                                                    echo "<br><label class='badge badge-danger' >Belum diverifikasi kelurahan  </label>";
                                                                }
                                                                if ($s->keterangan == "3") {
                                                                    echo "<label class='badge badge-success' >Sudah Diverifikasi Kelurahan  </label>";
                                                                }
                                                                ?></td>
                                                            <td> <?php if ($s->keterangan == "3") { ?>
                                                                    <a href="" class="btn btn-info">Download</a>
                                                                <?php } ?>
                                                                <?php if ($s->keterangan == "1" || $s->keterangan == "0") {
                                                                    echo "data belum diverifikasi";
                                                                } ?>

                                                            </td>
                                                            <td>
                                                                <?php if ($s->keterangan == "0") { ?>
                                                                    <a data-toggle="tooltip" data-placement="top" title="konfirmasi" onclick="konfirmasi('<?php echo site_url('admin/konfirmasi_data/' . $s->id_warga) ?>')" href="#konfirmasidata" class="btn btn-xs btn-block btn-success"><i class="fas fa-check"></i></a>
                                                                    <a data-toggle="tooltip" data-placement="top" title="Lihat data" href="<?php echo site_url('admin/detail_data_warga/' . $s->id_warga) ?>" class="btn btn-xs btn-block btn-dark"><i class="fas fa-eye"></i></a>

                                                                    <a data-toggle="tooltip" data-placement="top" title="ubah" href="<?php echo site_url('admin/editWarga/' . $s->id_warga) ?>" class="btn btn-xs btn-block btn-warning"><i class="fas fa-edit"></i></a>
                                                                    <a data-toggle="tooltip" data-placement="top" title="hapus" onclick="deleteConfirm('<?php echo site_url('admin/deleteWarga/' . $s->id_warga) ?>')" href="#!" class="btn btn-xs btn-block btn-danger"><i class="fas fa-trash"></i></a>
                                                                <?php } ?>
                                                                <?php if ($s->keterangan == "1" || $s->keterangan == "3") { ?>
                                                                    <a data-toggle="tooltip" data-placement="top" title="konfirmasi" onclick="konfirmasi('<?php echo site_url('admin/konfirmasi_data/' . $s->id_warga) ?>')" href="#konfirmasidata" class="btn btn-xs btn-block btn-success disabled"><i class="fas fa-check"></i></a>
                                                                    <a data-toggle="tooltip" data-placement="top" title="Lihat data" href="<?php echo site_url('admin/detail_data_warga/' . $s->id_warga) ?>" class="btn btn-xs btn-block btn-dark"><i class="fas fa-eye"></i></a>
                                                                    <a data-toggle="tooltip" data-placement="top" title="print" href="<?php echo base_url() . 'admin/export_data_warga/' . $s->id_warga ?>" class="btn btn-xs btn-block btn-primary"><i class="fas fa-print"></i> </a>
                                                                <?php } ?>
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
                                                        <th>No KK</th>
                                                        <th>NIK / No KTP</th>
                                                        <th>Kebutuhan</th>
                                                     

                                                        <th>Keterangan</th>
                                                        <th>Download Surat Pengantar</th>
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
                                            <div class="small text-muted">
                                                <p style="color: red;">* Harus diisi</p>
                                            </div>
                                            <form id="myForm" action="<?php echo site_url('admin/warga') ?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                <input name="id" type="text" value="<?php echo $kode; ?>" hidden>
                                                <div class="form-group">
                                                    <label for="nama">Nama Lengkap*</label>
                                                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Masukkan Nama Lengkap" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('nama') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_kk">No KK</label>
                                                    <input class="form-control  <?php echo form_error('kk') ? 'is-invalid' : '' ?>" " type="text" name="no_kk" placeholder="Masukkan No KK" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('no_kk') ?>
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
                                                    <select name="jenis" class="form-control  <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" id="jenis1">
                                                        <option value="">--pilih jenis kelamin--</option>
                                                        <option value="1">Laki-Laki</option>
                                                        <option value="2">Perempuan</option>
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
                                                    <input class="form-control <?php echo form_error('tgl') ? 'is-invalid' : '' ?>" type="date" name="tgl" placeholder="Masukkan tanggal lahir" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('tgl') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status Perkawinan*</label>
                                                    <select name="status" class="form-control  <?php echo form_error('status') ? 'is-invalid' : '' ?>" id="status">
                                                        <option value="">--pilih Status Perkawinan--</option>
                                                        <option value="1">Kawin</option>
                                                        <option value="2">belum kawin</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('status') ?>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="agama">Agama*</label>
                                                    <select name="agama" class="form-control  <?php echo form_error('agama') ? 'is-invalid' : '' ?>" id="agama">
                                                        <option value="">--pilih Agama--</option>
                                                        <option value="1">Islam</option>
                                                        <option value="2">Kristen</option>
                                                        <option value="3">Hindu</option>
                                                        <option value="4">Buddha</option>
                                                        <option value="5">lainnya</option>


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
                                                    <select name="kebutuhan" class="form-control <?php echo form_error('kebutuhan') ? 'is-invalid' : '' ?>" id="kebutuhan">
                                                        <option>--pilih Kebutuhan Surat--</option>
                                                        <option value="1">Kartu Keluarga</option>
                                                        <option value="2">Kartu Tanda Penduduk (KTP)</option>
                                                        <option value="3">Surat Pengantar Domisili</option>
                                                        <option value="4">Surat Keterangan Pindah Alamat</option>
                                                        <option value="5">Surat Pengantar Akte Kelahiran An. </option>
                                                        <option value="6">Surat Pengantar Tambah Anggota Keluarga</option>
                                                        <option value="7">Surat Pengantar Pendatang Baru</option>
                                                        <option value="8">Lainnya</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('kebutuhan') ?>
                                                    </div>
                                                </div>
                                                <div style="display: none;" id="lainnya" class="form-group">
                                                    <label for="lainnya">Kebutuhan *</label>
                                                    <input class="form-control <?php echo form_error('lainnya') ? 'is-invalid' : '' ?>" type="text" name="lainnya" placeholder="Masukkan Kebutuhan lainnya" />
                                                    <div class="invalid-feedback">
                                                        <?php echo form_error('lainnya') ?>
                                                    </div>
                                                </div>

                                                <div id="no_ktp" class="form-group">

                                                    <label>Upload Gambar Pendukung*</label>
                                                    <input name="ktp[]" multiple="" type="file" class="form-control <?php echo form_error('ktp[]') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>


                                                    <?php echo form_error('ktp[]', '<p class="frm_err">', '  </p>'); ?>

                                                    <button style="margin: 10px 0;" name="tambah" id="tambah" class="btn btn-success" type="button"> <i class="fa fa-plus"> </i> Form</button>


                                                </div>


                                                <div class="small text-muted">
                                                    <p style="color: red;">* Harus diisi</p>
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
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <?php $this->load->view('template/footer.php'); ?>
    <?php $this->load->view('template/js.php'); ?>

    <!-- Ekko Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" crossorigin="anonymous"></script>






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

    <script>
        $(document).ready(function() {
            var html = `
            <div id="no_ktp" class="form-group">
                
                    <input name="ktp[]" type="file" class="form-control <?php echo form_error('ktp[]') ? 'is-invalid' : '' ?>" id="exampleInputFile"></input>
                    <button style="margin-top:10px;" name="remove" id="remove" class="btn btn-danger" type="button" ><i class="fa fa-trash">
                    </i> hapus</button>
                    <br>

                    <div class="invalid-feedback">
                        <?php echo form_error('ktp[]') ?>
                    </div>

                </div>`
            var max = 10;
            var x = 1;
            $("#tambah").click(function() {
                if (x < max) {
                    $("#no_ktp").append(html);
                    x++;
                }
            });
            $("#no_ktp").on('click', '#remove', function() {
                $(this).closest('div').remove();

                x--;
            })
        })
    </script>






</body>

</html>