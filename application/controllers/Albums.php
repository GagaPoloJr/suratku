<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Albums extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Album_model');
        $this->PageLimit = 20;
        $this->load->library('UploadHandler');
    }
   
    public function tambah_album()
    {
        $this->load->view('lurah/kegiatan_tambah');
    }
}
