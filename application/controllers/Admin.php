<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->model('SmartbookModel');
        $this->load->model('Admin_model');
        $this->load->library('mypdf.php');
        $this->load->helper('date');
        $this->load->helper('kebutuhan_helper');
    }

    // fungsi untuk halaman utama (overview)
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

    /*          Ini merupakan fungsi admin untuk Level 2 atau Lurah                     */

    // untuk menambahkan data pengguna baru
    public function user()
    {
        $user = $this->Admin_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Data Berhasil ditambahkan');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['user'] = $this->db->query('select * from user')->result();
        $this->load->view('admin/user', $data);
    }

    // menampilkan data data RT di admin lurah
    public function tampil_data_rt()
    {
        if ($this->session->userdata('level') == '2') {
            $data['rt'] = $this->SmartbookModel->get_data_rt();
            $this->load->view('lurah/data_rt', $data);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
            redirect(base_url());
        }
    }

    // menampilkan data data Pegawai kelurahan
    public function tampil_data_pegawai()
    {
        if ($this->session->userdata('level') == '2') {
            $data['rt'] = $this->SmartbookModel->get_data_pegawai();
            $this->load->view('lurah/data_pegawai', $data);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
            redirect(base_url());
        }
    }

    // fungsi untuk menampilkan data warga yang telah diverifikasi
    public function lurah()
    {
        $this->load->helper('kebutuhan_helper');
        $this->load->database();
        $data['warga'] = $this->SmartbookModel->get_data_warga();
        $data['rt'] = $this->SmartbookModel->get_data_rt_lurah();
        if ($this->session->userdata('level') == '2') {
            $this->load->view('lurah/lurah', $data);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
            redirect(base_url());
        }
    }
    // untuk melihat detail data warga di admin LURAH
    public function detail_data($id)
    {
        $this->load->database();
        $data['warga'] = $this->db->query("select * from data_warga where id_warga= '$id'")->result();
        $data['gambar'] = $this->db->query("select gambar_pendukung as gambar from data_gambar dg JOIN data_warga dw ON dg.id_warga = dw.id_warga  where dg.id_warga='$id'")->result();
        $this->load->view('lurah/lihat_data', $data);
    }
    // untuk verifikasi data agar keluar tombol print
    function konfirmasi_lurah($id)
    {
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
    // lupa dipake apa engga
    public function hapus_data($id)
    {
        $where = array(
            'id_warga' => $id
        );
        $this->SmartbookModel->delete_data($where, 'data_warga');
        $this->session->set_flashdata('danger', 'Data Berhasil dihapus');
        redirect(base_url() . 'admin/warga');
    }

    //    fungsi untuk menambahkan berita dan memunculkan list berita yang ada
    public function berita()
    {
        // $this->load->helper('kebutuhan_helper');

        $warga = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($warga->rules1());

        if ($validation->run()) {
            $warga->save_berita();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(base_url() . 'admin/berita');
        }

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            $this->session->set_flashdata('form_error', $errors);
        }

        $data['rw'] = $this->SmartbookModel->get_data_rw();
        $data['berita'] = $this->db->query('select * from berita')->result();
        $this->load->view('Lurah/berita', $data);
    }

    public function kegiatan()
    {
        $this->load->database();
        $this->load->view('lurah/kegiatan');
    }

    /*                            Fungsi admin level 2 selesai             */


    /*                                   Fungsi bersama                   */
    // untuk mengunduh berita
    public function download_berita($id)
    {
        $this->load->helper('download');
        force_download('upload/berita/' . $id, NULL);
    }

    // untuk membuat surat pengantar darilurah
    public function export_data_verifikasi($id)
    {
        $this->load->helper('kebutuhan_helper');
        $data['warga'] = $this->db->query("select * from data_warga where id_warga ='$id' ")->result();
        $data['rw'] = $this->SmartbookModel->get_data_rw();
        $this->mypdf->generate_data_verif('admin2/pdf_verifikasi', $data);
    }


    /*                                     Fungsi bersama selesai                                      */


    /*                 Fungsi Untuk admin RT                         */

    // untuk menampilkan data rt dan menambahkan RT
    public function warga()
    {
        $data['kode'] = $this->SmartbookModel->id_warga();
        $this->load->helper('kebutuhan_helper');
        $warga = $this->SmartbookModel;
        $validation = $this->form_validation;
        $validation->set_rules($warga->rules());

        if ($validation->run()) {
            //     if (!$warga->gambar_upload()) {
            //         $this->session->set_flashdata('danger', 'gagal');
            //         redirect(base_url() . 'admin/warga');
            //     } 
            //   else {
            $warga->save();
            // print_R($warga);
            // exit();
            // $this->proses();

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

        if ($this->session->userdata('level') == '1') {
            $this->load->view('admin2/warga', $data);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
            redirect(base_url());
        }
    }



    // untuk melihat detail data warga di admin RT
    public function detail_data_warga($id)
    {
        $this->load->helper('kebutuhan_helper');
        $this->load->database();
        $data['warga'] = $this->db->query("select * from data_warga  where id_warga='$id'")->result();
        $data['gambar'] = $this->db->query("select gambar_pendukung as gambar from data_gambar dg JOIN data_warga dw ON dg.id_warga = dw.id_warga  where dg.id_warga='$id'")->result();

        $data['rw'] = $this->SmartbookModel->get_data_rw();
        $this->load->view('admin2/detail_data_warga', $data);
    }

    public function editProfil($id = null)
    {
   
        if ($this->session->userdata('id') != $id)
        {
            $this->session->set_flashdata('warning', 'anda tidak berhak masuk ke akun lain');
            redirect(site_url('admin/editProfil/' . $this->session->userdata('id')));
        } else {
            $user_edit = $this->SmartbookModel;
            $validation = $this->form_validation;
            $validation->set_rules($user_edit->rules2());

            if ($validation->run()) {
                $user_edit->update_profil();

                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('admin/editProfil/' . $user_edit->id));
            }

            if ($this->form_validation->run() == FALSE) {
                $errors = validation_errors();
                $this->session->set_flashdata('form_error', $errors);
            }

            $data["user"] = $user_edit->getByIdUser($id);
            $this->load->view("admin2/edit_profil", $data);
        }
    }

    // untuk mengubah data warga
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
        $data['gambar'] = $this->db->query("select id_gambar, gambar_pendukung as gambar from data_gambar dg JOIN data_warga dw ON dg.id_warga = dw.id_warga  where dg.id_warga='$id'")->result();
        $this->load->view("admin2/edit_warga", $data);
    }

    // untuk mengkonfirmasi data warga
    public function konfirmasi_data($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $data['konfirmasi'] =  $this->db->query("select * from data_warga where id_warga ='$id'")->result();
        $konfirmasi = $data['konfirmasi'];

        foreach ($konfirmasi as $k) {
            $id_warga = $k->id_warga;
            $id_user = $k->id_user;
        }
        $data1 = array(
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

    // untuk membuat surat keterangan dari RT dalam bentuk PDF
    public function export_data_warga($id)
    {
        $this->load->helper('kebutuhan_helper');
        $data['warga'] = $this->db->query("select * from data_warga where id_warga ='$id' ")->result();
        $data['rw'] = $this->SmartbookModel->get_data_rw();
        $this->mypdf->generate_data_warga('admin2/laporan_pdf', $data);
    }

    // untuk menghapus data warga
    public function deleteWarga($id = null)
    {
        if (!isset($id)) show_404();
        if ($this->SmartbookModel->delete($id)) {
            $this->session->set_flashdata('danger', 'Data Berhasil dihapus');
            redirect(site_url('admin/warga'));
        }
    }

    public function hapus_gambar($id = null)
    {
        $warga = $this->SmartbookModel;


        if (!isset($id)) show_404();
        if ($warga->delete_gambar($id)) {

            $this->session->set_flashdata('danger', 'Gambar Berhasil dihapus, tekan edit kembali untuk menghapus gambar yang lain');
            redirect(site_url('admin/warga/'));
        }
    }


    /*                 Fungsi Untuk admin RT Selesai                       */
}
