<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <head>
        <!-- <link rel="icon" href="<?php echo base_url() . 'assets/img/logo.png' ?>"> -->
        <title>Laporan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            .line-title {
                border: 0;
                border-style: inset;
                border-top: 1px solid #000;
            }

            .paragraf {
                text-align: justify;
            }

            .upper {
                text-transform: uppercase;
            }

            .lower {
                text-transform: lowercase;
            }

            .cap {
                text-transform: capitalize;
            }

            .small {
                font-variant: small-caps;
            }
            .kanan { text-align: right; }

        </style>

    </head>
</head>

<body>
    <!-- <img src="assets/img/logo-bmkg.png" style="position: absolute; width: 60px; height: auto;"> -->
    <table style="width: 100%;">
        <?php foreach ($rw as $aw) { ?>
            <tr>

                <td align="center">
                    <h1><?php echo $this->session->userdata('nama');
                        echo "  ";
                        echo $aw->RW;  ?></h1>
                </td>

            </tr>
        <?php } ?>
        <tr>
            <td align="center">
                <span style="line-height:1.3; font-weight:bold;">
                    KELURAHAN LABUH BARU BARAT <br>
                    KECAMATAN PAYUNG SEKAKI KOTA PEKANBARU
                    <br>
                    <small>Jl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.&nbsp;&nbsp;Kelurahan Labuhbaru Barat Payung Sekaki Pekanbaru</small>


                </span>

            </td>
        </tr>

    </table>
    <hr class="line-title">
    <table style="line-height:1">
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>&nbsp;&nbsp; /<?php echo $this->session->userdata('nama'); ?>/LBB/2020</td>
<div id="space"></div>
            <td class="kanan">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekanbaru, 2020
            </td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>:</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>:</td>
            <td><b style=" text-decoration: underline;">Surat Pengantar </b></td>

        </tr>

    </table>
    <br>

    <p style="font-weight:bold">KEPADA YTH <br>BAPAK LURAH LABUHBARU BARAT <br>DI <br>PEKANBARU</p>
    <p>Dengan hormat,
    </p>
    <?php foreach ($rw as $test) { ?>
        <p class="paragraf" style="text-indent: 60px; ">Ketua rukun tetangga <?php echo $this->session->userdata('nama');
?> Rukun Warga <?php  echo $test->RW; ?> Kelurahan labuhbaru Barat Kecamatan Payung Sekaki Kota Pekanbaru, dengan ini menerangkan dengan sesungguhnya bahwa:</p>
    <?php } ?>
    <div class="col-12">
        <table style="line-height:1">
            <?php foreach ($warga as $d) { ?>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td> <?php echo  $d->nama;  ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td> <?php echo  jenis($d->j_kelamin); ?></td>
                </tr>
                <tr>
                    <td>Tempat/ Tgl. Lahir</td>
                    <td>:</td>
                    <td> <?php echo  $d->tempat;
                            echo ", ";
                            echo date('d-m-Y', strtotime($d->tgl_lahir))  ?></td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                    <td> <?php echo  status($d->status); ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td> <?php echo  agama($d->agama); ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td> <?php echo  $d->pekerjaan; ?></td>
                </tr>
                <tr>
                    <td>N0. KTP / NIK</td>
                    <td>:</td>
                    <td> <?php echo  $d->nik; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td> <?php echo  $d->alamat; ?></td>
                </tr>
            
                <?php $this->load->helper('kebutuhan_helper');

                if ($d->kebutuhan == "5") {
                    echo keb($d->kebutuhan);
                    echo ($d->nama);
                } else {
                    echo keb($d->kebutuhan);
                } ?>
        </table>
    <?php } ?>
    </div>
    <br>
    <p class="paragraf">
        Nama yang tertera di atas adalah warga kami yang bertempat tinggal di <?php echo $d->alamat ?> RT 05 RW 09 Kelurahan Labuhbaru Barat Kecamatan Payung Sekaki Kota Pekanbaru.
    </p>


    <p class="paragraf" style="text-indent: 60px; ">Selanjutnya kami sampaikan surat pengantar ini kepada Bapak untuk digunakan dalam pengurusan pembuatan:    <?php $this->load->helper('kebutuhan_helper');

if ($d->kebutuhan == "5") {
    echo keb($d->kebutuhan);
    echo ($d->nama);
} else {
    echo keb($d->kebutuhan);
} ?> </p>


    <p class="paragraf" style="text-indent: 60px; ">Demikianlah Surat Pengantar ini dibuat untuk dipergunakan sebagaimana mestinya. Atas perhatian dan kerjasamanya kami ucapkan terimakasih. </p>

    <table align="center" border="0">
        <tr>
            <td>
                Tanda tangan pemegang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kepala Desa Bandasari
            </td>
        </tr>
        <!-- <td colspan="3">&nbsp;</td> -->
        </tr>
        <!-- <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr> -->
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="3">&nbsp;</td>
        </tr>

        <tr>


            <?php foreach ($rw as $rw) { ?>
                <td>
                    <font class="upper"><b><u><?php echo $this->session->userdata('nama_lengkap') ?></u></b></font>
                </td>

                <td align="right">
                    <font class="upper"><b><u><?php echo $rw->nama ?></u></b></font>
                </td>

        </tr>
    <?php } ?>


    </table>
    <!-- /.card-body -->


    <!-- /.card-body -->

    <!-- /.card -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>

</html>