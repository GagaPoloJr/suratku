<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->model('KodeModel');
        $this->load->model('PeminjamanModel');
        $this->load->model('SmartbookModel');
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['smartbook'] = $this->db->query('select ID as id,COUNT(ID) as count from smartbook')->result();
        $data['peminjaman'] = $this->db->query('select ID as id,COUNT(ID) as count from peminjaman')->result();
        $data['kode'] = $this->db->query('select ID as id,COUNT(ID) as count from kode')->result();
        $this->load->view('admin/overview', $data);
    }

    public function overview()
    {
        $data['smartbook'] = $this->db->query('select ID as id,COUNT(ID) as count from smartbook')->result();
        $data['peminjaman'] = $this->db->query('select ID as id,COUNT(ID) as count from peminjaman')->result();
        $data['kode'] = $this->db->query('select ID as id,COUNT(ID) as count from kode')->result();
        $this->load->view('admin/overview', $data);
    }

    public function smartbook()
    {
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        if ($validation->run()) {
            $smartbook->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['smartbook'] = $this->db->query('select * from smartbook')->result();
        $this->load->view('admin/smartbook_yanzin', $data);
    }

    public function editSmartbook($id = null)
    {
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        if ($validation->run()) {
            $smartbook->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editSmartbook/' . $smartbook->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["smartbook"] = $smartbook->getById($id);
        if (!$data["smartbook"]) show_404();
        $this->load->view("admin/editSmartbook", $data);
    }

    public function detailSmartbook($id = null)
    {
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        $data["smartbook"] = $smartbook->getById($id);
        if (!$data["smartbook"]) show_404();
        $this->load->view("admin/detailSmartbook", $data);
    }

    public function deleteSmartbook($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->SmartbookModel->delete($id)) {
            redirect(site_url('admin/smartbook'));
        }
    }

    public function scan()
    {
        $data['smartbook'] = $this->db->query('select * from smartbook')->result();
        $this->load->view('admin/scan_yanzin', $data);
    }

    public function uploadScan($id = null)
    {
        $scan = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($scan->rules());

        if ($validation->run()) {
            $scan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/uploadScan/' . $scan->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["scan"] = $scan->getById($id);
        if (!$data["scan"]) show_404();
        $this->load->view("admin/uploadScan", $data);
    }

    public function detailScan($id = null)
    {
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        $data["smartbook"] = $smartbook->getById($id);
        if (!$data["smartbook"]) show_404();
        $this->load->view("admin/detailScan", $data);
    }

    public function editScan($id = null)
    {
        $scan = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($scan->rules());

        if ($validation->run()) {
            $scan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editScan/' . $scan->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["scan"] = $scan->getById($id);
        if (!$data["scan"]) show_404();
        $this->load->view("admin/editScan", $data);
    }

    public function kode()
    {
        $kode = $this->KodeModel;
        $validation = $this->form_validation;
        $validation->set_rules($kode->rules());

        if ($validation->run()) {
            $kode->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['kode'] = $this->db->query('select * from kode')->result();
        $this->load->view('admin/kode', $data);
    }

    public function editKode($id = null)
    {
        $kode = $this->KodeModel;
        $validation = $this->form_validation;
        $validation->set_rules($kode->rules());

        if ($validation->run()) {
            $kode->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editKode/' . $kode->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["kode"] = $kode->getById($id);
        if (!$data["kode"]) show_404();
        $this->load->view("admin/editKode", $data);
    }

    public function detailKode($id = null)
    {
        $kode = $this->KodeModel;
        $validation = $this->form_validation;
        $validation->set_rules($kode->rules());

        $data["kode"] = $kode->getById($id);
        if (!$data["kode"]) show_404();
        $this->load->view("admin/detailKode", $data);
    }

    public function deleteKode($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->KodeModel->delete($id)) {
            redirect(site_url('admin/kode'));
        }
    }

    public function peminjaman()
    {
        $peminjaman = $this->PeminjamanModel;
        $validation = $this->form_validation;
        $validation->set_rules($peminjaman->rules());

        if ($validation->run()) {
            $peminjaman->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['peminjaman'] = $this->db->query('select * from peminjaman')->result();
        $this->load->view('admin/peminjaman_arsip', $data);
    }

    public function detailPeminjaman($id = null)
    {
        $peminjaman = $this->PeminjamanModel;
        $validation = $this->form_validation;
        $validation->set_rules($peminjaman->rules());

        $data["peminjaman"] = $peminjaman->getById($id);
        if (!$data["peminjaman"]) show_404();
        $this->load->view("admin/detailPeminjaman", $data);
    }

    public function editPeminjaman($id = null)
    {
        $peminjaman = $this->PeminjamanModel;
        $validation = $this->form_validation;
        $validation->set_rules($peminjaman->rules());

        if ($validation->run()) {
            $peminjaman->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editPeminjaman/' . $peminjaman->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["peminjaman"] = $peminjaman->getById($id);
        if (!$data["peminjaman"]) show_404();
        $this->load->view("admin/editPeminjaman", $data);
    }

    public function editPengembalian($id = null)
    {
        $peminjaman = $this->PeminjamanModel;
        $validation = $this->form_validation;
        $validation->set_rules($peminjaman->rules());

        if ($validation->run()) {
            $peminjaman->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editPengembalian/' . $peminjaman->id));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["peminjaman"] = $peminjaman->getById($id);
        if (!$data["peminjaman"]) show_404();
        $this->load->view("admin/editPengembalian", $data);
    }

    public function deletePeminjaman($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->PeminjamanModel->delete($id)) {
            redirect(site_url('admin/peminjaman'));
        }
    }

    public function pengembalian()
    {
        $peminjaman = $this->PeminjamanModel;
        $validation = $this->form_validation;
        $validation->set_rules($peminjaman->rules());

        if ($validation->run()) {
            $peminjaman->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['peminjaman'] = $this->db->query('select * from peminjaman')->result();
        $this->load->view('admin/pengembalian_arsip', $data);
    }

    public function user()
    {
        $user = $this->Admin_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['user'] = $this->db->query('select * from user')->result();
        $this->load->view('admin/user', $data);
    }
}
