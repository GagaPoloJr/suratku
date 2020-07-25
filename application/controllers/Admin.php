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
        // $this->load->library('pdf');
        $this->load->library('mypdf.php');
        $this->load->helper('date');
    }
    

    public function index()
    {
        $data['data_masuk'] = $this->db->query('select id_masuk as id,COUNT(id_masuk) as count from data_masuk')->result();
        $data['data_verifikasi'] = $this->db->query('select id_masuk as id,COUNT(id_masuk) as count from data_masuk where verifikasi =1')->result();
        $user = $this->session->userdata('id');
        $data['warga'] = $this->db->query("select COUNT(id_user) as count from data_warga where id_user= $user")->result();
        $data['warga_konf'] = $this->db->query("select COUNT(id_user) as count from data_warga where id_user= $user AND keterangan =1")->result();
        $data['warga_konf_1'] = $this->db->query("select COUNT(id_user) as count from data_warga where id_user= $user AND keterangan = 3")->result();

        $this->load->view('admin/overview', $data);
    }

    // public function laporan_pdf(){

    //     $data = array(
    //         "dataku" => array(
    //             "nama" => "Petani Kode",
    //             "url" => "http://petanikode.com"
    //         )
    //     );
    
   
    
    //     $this->pdf->setPaper('A4', 'potrait');
    //     $this->pdf->filename = "laporan-petanikode.pdf";
    //     $this->pdf->load_view('admin2/laporan_pdf', $data);
    
    
    // }
    public function lurah(){
        // $data['warga'] = $this->db->query('select * from data_warga where keterangan ="1"')->result();
        $this->load->database();
        $data['warga'] = $this->SmartbookModel->get_data_warga();
        $data['rt'] = $this->SmartbookModel->get_data_rt_lurah();
        if($this->session->userdata('level')=='2') {
            $this->load->view('lurah/lurah', $data);

          }else{
            echo "Anda tidak berhak mengakses halaman ini";
            redirect(base_url());
          }
     
    }
    public function detail_data($id)
    {
        $this->load->database();
        $data['warga'] = $this->db->query("select * from data_warga where id_warga= $id")->result();
      

        $this->load->view('lurah/lihat_data', $data);
    }

    function konfirmasi_lurah($id){
        date_default_timezone_set('Asia/Jakarta');

      

        $data = array(
            'tgl_proses' => date('Y-m-d H:i:s'),
            'verifikasi' => '1'
        );
        $where = array(
            'id_data' => $id
        );

        $data1 = array(
           
            'keterangan' => '3'
        );
        $where1 = array(
            'id_warga' => $id
        );
        $this->SmartbookModel->update_data($where, $data, 'data_masuk');
        $this->SmartbookModel->update_data($where1, $data1, 'data_warga');

        $this->session->set_flashdata('success', 'Data Berhasil Diverifikasi');
        redirect(base_url() . 'admin/lurah');
        
        
    }
    public function tampil_data_rt(){
        if($this->session->userdata('level')=='2') {
        $data['rt'] = $this->SmartbookModel->get_data_rt();
        $this->load->view('lurah/data_rt', $data);
        }
        else{
            echo "Anda tidak berhak mengakses halaman ini";
            redirect(base_url());
        }
    }



    public function konfirmasi_data($id){
        date_default_timezone_set('Asia/Jakarta');
        $data['konfirmasi'] =  $this->db->query("select * from data_warga where id_warga ='$id'")->result();
        $konfirmasi = $data['konfirmasi'];

        foreach ($konfirmasi as $k){
            $id_warga = $k->id_warga;
            $id_user = $k->id_user;
        }

        $data1 = array (
            'id_data' => $id_warga,
            'id_user' => $id_user,
            'tgl_masuk' => date('Y-m-d H:i:s'),
        );
        $this->SmartbookModel->insert_data($data1, 'data_masuk');

        $data = array(
            'keterangan' => '1'
        );
        $where = array(
            'id_warga' => $id
        );
        $this->SmartbookModel->update_data($where, $data, 'data_warga');
        $this->session->set_flashdata('success', 'Data Berhasil Dikonfirmasi');
        redirect(base_url() . 'admin/warga');
     
     
    }

    public function warga(){
        $this->load->helper('kebutuhan_helper');
        $warga = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($warga->rules());
     
        if ($validation->run()) {
            $warga->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url() . 'admin/warga');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }
        $user = $this->session->userdata('id');
        $data['warga'] = $this->db->query("select * from data_warga where id_user= $user")->result();
        $data['rw'] = $this->SmartbookModel->get_data_rw();
      

        if($this->session->userdata('level')=='1') {
            $this->load->view('admin2/warga', $data);

          }else{
            echo "Anda tidak berhak mengakses halaman ini";
            redirect(base_url());
          }

    }

    public function editWarga($id = null)
    {
        $warga = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($warga->rules());

        if ($validation->run()) {
            $warga->update_warga();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/editWarga/' . $warga->id_warga));
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data["warga"] = $warga->getById($id);
        if (!$data["warga"]) show_404();
        $this->load->view("admin2/edit_warga", $data);
    }

    public function export_data_warga($id){
        $this->load->helper('kebutuhan_helper');
        $data['warga'] = $this->db->query("select * from data_warga where id_warga =$id ")->result();
        $data['rw'] = $this->SmartbookModel->get_data_rw();
        $this->mypdf->generate_data_warga('admin2/laporan_pdf', $data);

    }
    public function export_data_verifikasi($id){
        $this->load->helper('kebutuhan_helper');
        $data['warga'] = $this->db->query("select * from data_warga where id_warga =$id ")->result();
        $data['rw'] = $this->SmartbookModel->get_data_rw();
        $this->mypdf->generate_data_verif('admin2/pdf_verifikasi', $data);

    }

    public function hapus_data($id)
    {
        $where = array(
            'id_warga' => $id
        );
        $this->SmartbookModel->delete_data($where, 'data_warga');
        $this->session->set_flashdata('danger', 'Data Berhasil dihapus');
        redirect(base_url() . 'admin/warga');
    }
    // public function overview()
    // {
    //     $data['smartbook'] = $this->db->query('select ID as id,COUNT(ID) as count from smartbook')->result();
    //     $data['peminjaman'] = $this->db->query('select ID as id,COUNT(ID) as count from peminjaman')->result();
    //     $data['kode'] = $this->db->query('select ID as id,COUNT(ID) as count from kode')->result();
    //     $this->load->view('admin/overview', $data);
    // }

    public function smartbook()
    {
        $smartbook = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($smartbook->rules());

        if ($validation->run()) {
            $smartbook->save_warga();
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
