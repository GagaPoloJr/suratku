<?php defined('BASEPATH') or die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('export_model');
    }

    public function index()
    {
        $data['smartbook'] = $this->export_model->getAll()->result();
        $this->load->view('export', $data);
    }

    public function export()
    {
        $smartbook = $this->export_model->getAll()->result();

        $spreadsheet = new Spreadsheet;

        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'Kode')
            ->setCellValue('C1', 'Nama')
            ->setCellValue('D1', 'Uraian')
            ->setCellValue('E1', 'Tanggal')
            ->setCellValue('F1', 'No SK')
            ->setCellValue('G1', 'Jenis Izin')
            ->setCellValue('H1', 'Kota')
            ->setCellValue('I1', 'Jumlah')
            ->setCellValue('J1', 'Penanggung Jawab')
            ->setCellValue('K1', 'Data SK')
            ->setCellValue('L1', 'Data Dukung')
            ->setCellValue('M1', 'Jenis Dokumen')
            ->setCellValue('N1', 'Keadaan Dokumen')
            ->setCellValue('O1', 'Dus')
            ->setCellValue('P1', 'No Definitif');

        $kolom = 2;
        $nomor = 1;
        foreach ($smartbook as $s) {

            $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, $s->kode)
                ->setCellValue('C' . $kolom, $s->nama)
                ->setCellValue('D' . $kolom, $s->uraian)
                ->setCellValue('E' . $kolom, $s->tanggal)
                ->setCellValue('F' . $kolom, $s->sk)
                ->setCellValue('G' . $kolom, $s->jenis)
                ->setCellValue('H' . $kolom, $s->kota)
                ->setCellValue('I' . $kolom, $s->jumlah)
                ->setCellValue('J' . $kolom, $s->petugas)
                ->setCellValue('K' . $kolom, $s->datask)
                ->setCellValue('L' . $kolom, $s->datadukung)
                ->setCellValue('M' . $kolom, $s->jenisdok)
                ->setCellValue('N' . $kolom, $s->keadaan)
                ->setCellValue('O' . $kolom, $s->dus)
                ->setCellValue('P' . $kolom, $s->urut);
            $kolom++;
            $nomor++;
        }

        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Print Data Smarbookz.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
