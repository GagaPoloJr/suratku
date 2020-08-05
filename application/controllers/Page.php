<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('LoginModel');
    }
    public function index()
    {
        $this->load->view('landingpage/index');
    }

}