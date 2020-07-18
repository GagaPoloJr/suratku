<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
    }
    public function index()
    {
        if ($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
            redirect('admin/overview'); // Redirect ke page welcome
        $this->load->view('login'); // Load view login.php
    }
    public function login()
    {
        $Username = $this->input->post('username', TRUE);
        $Password = $this->input->post('password', TRUE);
        $user = $this->LoginModel->get($Username);

        $validate = $this->LoginModel->validate($Username,$Password);


        if (empty($user)) {
            $this->session->set_flashdata('message', 'Login Gagal');
            redirect('auth');
        } else {
            if ($validate->num_rows()>0) {
                $data = $validate->row_array();
                $username = $data['username'];
                // $name = $data['name'];
                $level = $data['level'];
                $id = $data['id'];
                
                $session = array(
                    'authenticated' => true,
                    'username' => $username,
                    'level' => $level,
                    'logged_in' => TRUE,
                    'id' => $id
                );
                $this->session->set_userdata($session);
                redirect('admin/overview');
            } else {
                $this->session->set_flashdata('message', 'Password Salah');
                redirect('auth');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy(); // Hapus semua session
        redirect('auth'); // Redirect ke halaman login
    }
}
