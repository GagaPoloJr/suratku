<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Export Dengan Codeigniter</title>
</head>

<body>
    <a href="<?php echo base_url('export/export'); ?>">Export Data</a>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 7%; text-align: center;">No</th>
                <th>Kode</th>
                <th style="width: 30%">Nama</th>
                <th>Uraian</th>
                <th>Tanggal</th>
                <th>No SK</th>
                <th>Jenis Izin</th>
                <th>Kota</th>
                <th>Jumlah</th>
                <th>Penanggung Jawab</th>
                <th>Data SK</th>
                <th>Data Dukung</th>
                <th>Jenis Dokumen</th>
                <th>Keadaan Dokumen</th>
                <th>Dus</th>
                <th>No Definitif</th>
            </tr>
        </thead>
        <tbody>
            <?php $index = 1; ?>
            <?php foreach ($smartboook as $s) : ?>
                <tr>
                    <td style="width: 7%; text-align: center;"><?php echo $index++; ?></td>
                    <td><?php echo $s->kode; ?></td>
                    <td style="width: 30%"><?php echo $s->nama; ?></td>
                    <td><?php echo $s->uraian; ?></td>
                    <td><?php echo $s->tanggal; ?></td>
                    <td><?php echo $s->sk; ?></td>
                    <td><?php echo $s->jenis; ?></td>
                    <td><?php echo $s->kota; ?></td>
                    <td><?php echo $s->jumlah; ?></td>
                    <td><?php echo $s->petugas; ?></td>
                    <td><?php echo $s->datask; ?></td>
                    <td><?php echo $s->datadukung; ?></td>
                    <td><?php echo $s->jenisdok; ?></td>
                    <td><?php echo $s->keadaan; ?></td>
                    <td><?php echo $s->dus; ?></td>
                    <td><?php echo $s->urut; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>