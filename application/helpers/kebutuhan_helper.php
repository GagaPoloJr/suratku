<?php
if (!function_exists('kebutuhan')) {
    function keb($kebutuhan){
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
    function jenis($jenis){
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
    function status($status){
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
    function agama($agama){
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





 ?>