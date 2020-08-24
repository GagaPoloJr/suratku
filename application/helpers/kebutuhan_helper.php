<?php
if (!function_exists('kebutuhan')) {
    function keb($kebutuhan)
    {
        switch ($kebutuhan) {
            case 1:
                $kebutuhan = "Kartu Keluarga (KK)";
                break;
            case 2:
                $kebutuhan = "Kartu Tanda Penduduk (KTP)";
                break;
            case 3:
                $kebutuhan = "Surat Pengantar Domisili";
                break;
            case 4:
                $kebutuhan = "Surat Keterangan Pindah Alamat";
                break;
            case 5:
                $kebutuhan = "Surat Pengantar Akte Kelahiran An. ";
                break;
            case 6:
                $kebutuhan = "Surat Pengantar Tambah Anggota Keluarga";
                break;
            case 7:
                $kebutuhan = "Surat Pengantar Pendatang Baru";
                break;

            default:
                $kebutuhan = "tidak ada";
                break;
        }
        return $kebutuhan;
    }
}

if (!function_exists('jenis')) {
    function jenis($jenis)
    {
        switch ($jenis) {
            case 1:
                $jenis = "Laki-Laki";
                break;
            case 2:
                $jenis = "Perempuan";
                break;

            default:
                $jenis = "tidak ada";
                break;
        }
        return $jenis;
    }
}

if (!function_exists('level')) {
    function level($level)
    {
        switch ($level) {
            case 1:
                $level = "RT atau RW";
                break;
            case 2:
                $level = "Admin atau Staff";
                break;

            default:
                $level = "tidak ada";
                break;
        }
        return $level;
    }
}

if (!function_exists('status')) {
    function status($status)
    {
        switch ($status) {
            case 1:
                $status = "Kawin";
                break;
            case 2:
                $status = "Belum Kawin";
                break;

            default:
                $status = "tidak ada";
                break;
        }
        return $status;
    }
}

if (!function_exists('agama')) {
    function agama($agama)
    {
        switch ($agama) {
            case 1:
                $agama = "Islam";
                break;
            case 2:
                $agama = "Kristen";
                break;
            case 3:
                $agama = "Hindu";
                break;
            case 4:
                $agama = "Buddha";
                break;
            case 5:
                $agama = "Lainnya";
                break;

            default:
                $agama = "tidak ada";
                break;
        }
        return $agama;
    }
}

if (!function_exists('rw')) {
    function nama_rw($rw)
    {
        switch ($rw) {
            case 1:
                $rw = "RW 01";
                break;
            case 2:
                $rw = "RW 02";
                break;
            case 3:
                $rw = "RW 03";
                break;
            case 4:
                $rw = "RW 04";
                break;
            case 5:
                $rw = "RW 05";
                break;
            case 6:
                $rw = "RW 06";
                break;
            case 7:
                $rw = "RW 07";
                break;
            case 8:
                $rw = "RW 08";
                break;
            case 9:
                $rw = "RW 09";
                break;
            case 10:
                $rw = "RW 10";
                break;

            default:
                $rw = "tidak ada";
                break;
        }
        return $rw;
    }
}





function sf_upload($nama_gambar, $lokasi_gambar, $tipe_gambar, $ukuran_gambar, $name_file_form)
{
    $CI                      = &get_instance();
    $nmfile                  = $nama_gambar . "_" . time();
    $config['upload_path']   = './' . $lokasi_gambar;
    $config['allowed_types'] = $tipe_gambar;
    $config['max_size']      = $ukuran_gambar;
    $config['file_name']     = $nmfile;
    $CI->upload              = null;
    $CI->load->library('upload', $config);

    if ($CI->upload->do_upload($name_file_form)) {
        $result1 = $CI->upload->data();
        $result  = array('gambar' => $result1);
        $dfile   = $result['gambar']['file_name'];

        $config['image_library'] = 'gd2';
        $config['source_image'] = './upload/data/' . $dfile;
        $config['create_thumb'] = FALSE;
        $config['maintain_ratio'] = TRUE;
        $config['quality'] = '60%';
        $config['width'] = 800;
        $config['height'] = 800;
        $config['new_image'] = './upload/data/' . $dfile;
        $CI->load->library('image_lib', $config);
        $CI->image_lib->resize();
        return $dfile;
    }
    return "default.png";
}





if (!function_exists('format_indo')) {
    function format_indo($date)
    {
        date_default_timezone_set('Asia/Jakarta');
        // array hari dan bulan
        $Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $Bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

        // pemisahan tahun, bulan, hari, dan waktu
        $tahun = substr($date, 0, 4);
        $bulan = substr($date, 5, 2);
        $tgl = substr($date, 8, 2);
        $waktu = substr($date, 11, 5);
        $hari = date("w", strtotime($date));
        $result = $Hari[$hari] . ", " . $tgl . " " . $Bulan[(int)$bulan - 1] . " " . $tahun . " " . $waktu;

        return $result;
    }
}
