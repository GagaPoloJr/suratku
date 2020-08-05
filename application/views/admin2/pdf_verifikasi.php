<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <head>
         <link rel="icon" href="<?php echo base_url() . 'assets/img/pku.png' ?>">
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

            .kanan {
                text-align: right;
            }
        </style>

    </head>
</head>

<body>
    <!-- <img src="assets/img/logo-bmkg.png" style="position: absolute; width: 60px; height: auto;"> -->
    <img src="dist/img/pku-logo.png" alt="Logo Surat" style="position: absolute; width: 80px; height: auto;">
    <table style="width: 100%;">
        <tr>
      
            <td align="center">
                <h3>PEMERINTAHAN KOTA PEKANBARU <br>KECAMATAN PAYUNG SEKAKI</h3>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h2>KELURAHAN LABUHBARU BARAT</h2>
            <small>Alamat : Jalan Cendana No. 1 Pekanbaru</small>
            </td>
        </tr>
        <!-- <tr>
            <td align="center">
                <span style="line-height:1.3; font-weight:bold;">
                </span>

            </td>
        </tr> -->

    </table>
    <hr class="line-title">
    <table style="width: 100%; line-height:1.0">
        <tr>
            <td align="center"><u style="font-weight: bold;">SURAT KETERANGAN</u> <br>
            Nomor: &nbsp; / LBB / VII / 2020</td>
        </tr>
       

    </table>
    <br>

    <p class="paragraf" style="text-indent: 60px;">LURAH LABUHBARU BARAT KECAMATAN PAYUNG SEKAKI KOTA PEKANBARU dengan ini menerangkan : </p>
    <?php foreach ($rw as $test) { ?>
        <p class="paragraf" style="text-indent: 60px; ">Ketua rukun tetangga <?php echo $this->session->userdata('nama');
                                                                                ?> Rukun Warga <?php echo $test->RW; ?> Kelurahan labuhbaru Barat Kecamatan Payung Sekaki Kota Pekanbaru, dengan ini menerangkan dengan sesungguhnya bahwa:</p>
    <?php } ?>
    <div class="col-12">
        <table style="line-height:1">
            <?php foreach ($warga as $d) { ?>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td class="upper"> <b> <?php echo  $d->nama;  ?> </b></td>
                </tr>
                <tr>
                    <td>Tempat/ Tgl. Lahir</td>
                    <td>:</td>
                    <td> <?php echo  $d->tempat;
                            echo ", ";
                            echo date('d-m-Y', strtotime($d->tgl_lahir))  ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td> <?php echo  jenis($d->j_kelamin); ?></td>
            </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td> <?php echo  agama($d->agama); ?></td>
                </tr>>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                    <td> <?php echo  status($d->status); ?></td>
                </tr>
               
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td> <?php echo  $d->pekerjaan; ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td> <?php echo  $d->nik; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td> <?php echo  $d->alamat; ?></td>
                </tr>
        </table>
    <?php } ?>
    </div>
    <br>
    <p class="paragraf"  style="text-indent: 60px; ">
      Bahwa yang bersangkutan merupakan warga kami sesuai bukti kependudukan yang terdata pada Sistem Informasi Administrasi
      Kependudukan Kota Pekanbaru Provinsi Riau, dengan maksud dan tujuan
    </p>
    <p class="paragraf"  style="text-indent: 60px; ">
    Demikian Surat Keterangan ini dibuat untuk dipergunakan sebagai mestinya.
    </p>

    <table align="center" border="0">
        <tr>
            <td>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pekanbaru, 25 Juni 2020
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
        <td>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </td>

                <td style="line-height:1.0">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <font ><b><u>WAHYU NOFIYANDRI, M.Pd</u></b></font> <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <font>NIP.19851115 201001 1 012</font>
                </td>


        </tr>
   


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