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
        </style>
    </head>
</head>

<body>
    <!-- <img src="assets/img/logo-bmkg.png" style="position: absolute; width: 60px; height: auto;"> -->
    <table style="width: 100%;">
        <tr>
            <td align="center">
            <h1>RT 05 RW 09</h1> 
                <!-- <small>JAWA TENGAH</small> -->
            </td>
        </tr>
        <tr>
            <td align="center">
                <span style="line-height: 2.5; font-weight:bold;">
                    KELURAHAN LABUH BARU BARAT
                </span>

            </td>
        </tr>
        <tr>
            <td align="center">
         
                <span style="line-height: 2.5; font-weight:bold;">
                    KECAMATAN PAYUNG SEKAKI KOTA PEKANBARU
                </span>
                <!-- <small>JAWA TENGAH</small> -->
    
            </td>
        </tr>
    </table>
    <hr class="line-title">
    <!-- <p align="center">
        LAPORAN HASIL SURVEY KEPUASAN MASYARAKAT
    </p>
    <table style="width: 100%;" class="table-bordered">
        <tr align="center" style="font-weight:bold;">
            <td>No</td>
            <td>Rincian</td>
            <td>Pencacah</td>
        </tr>
        <tr>
            <td align="center">1</td>
            <td>Nama</td>
            <td></td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td>Tanggal pencacahan/pengawasan</td>
            <td></td>
        </tr>
        <tr>
            <td align="center">3</td>
            <td>Tanda Tangan</td>
            <td></td>
        </tr>
    </table>
    <br> -->

    <p>Dengan hormat,</p>
    <p style="text-indent: 60px; text-align:justify;">Ketua rukun tetangga (RT) 05 Rukun Warga (RW) 09 Kelurahan labuhbaru Barat Kecamatan Payung Sekaki Kota Pekanbaru, dengan ini menerangkan dengan sesungguhnya bahwa:</p>

    <div class="col-12">
        <table>
            <?php foreach ($warga as $d) { ?>


                <tr>
                    <td>Id</td>
                    <td>:</td>
                    <td> <?php echo  $d->id; ?></td>
                </tr>


                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td> <?php echo  $d->nama;  ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td> <?php echo  $d->j_kelamin; ?></td>
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
                    <td> <?php echo  $d->status; ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td> <?php echo  $d->agama; ?></td>
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

          
            <!-- </div>
            <div class="form-group">
                <h5>Kebutuhan</h5>
                <?php echo  $d->kebutuhan; ?>
            </div> --> -->
        </table>
    <?php } ?>
    <!-- /.card-body -->
    </div>

    <!-- /.card-body -->

    <!-- /.card -->
</body>

</html>