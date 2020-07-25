<?php
class Logged_in extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('login');
        }
    }
    function index(){
        //allowing akses ke admin aja
        if($this->session->userdata('level') ==='1'){
            $this->load->view('Admin/overview');
        }
        elseif($this->session->userdata('level') ==='2'){
            $this->load->view('lurah/lurah');
        }
        else{
            echo "Akses Ditolak";
        }
    }
}
