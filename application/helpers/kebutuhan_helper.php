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
    return "default.jpg";
}





