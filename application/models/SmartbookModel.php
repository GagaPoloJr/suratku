<?php defined('BASEPATH') or exit('No direct script access allowed');

class SmartbookModel extends CI_Model
{
    private $_table = "smartbook";
    private $_table1 = "data_warga";
    private $_table2 = "berita";
    private $_table3 = "user";




    // public $id;
    // public $kode;
    // public $nama;
    // public $uraian;
    // public $tanggal;
    // public $sk;
    // public $jenis;
    // public $kota;
    // public $jumlah;
    // public $petugas;
    // public $datask;
    // public $datadukung;
    // public $jenisdok;
    // public $keadaan;
    // public $dus;
    // public $urut;

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'nik',
                'label' => 'nik',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'jenis',
                'label' => 'jenis',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'lahir',
                'label' => 'lahir',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'tgl',
                'label' => 'tgl',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'agama',
                'label' => 'agama',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'pekerjaan',
                'label' => 'pekerjaan',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'kebutuhan',
                'label' => 'kebutuhan',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
        ];
    }
    public function rules1()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'isi',
                'label' => 'isi',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'tanggal',
                'label' => 'tanggal',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table1, ["id_warga" => $id])->row();
    }
    public function getByIdUser($id)
    {
        return $this->db->get_where($this->_table3, ["id" => $id])->row();
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    // fungsi untuk menginput data ke database
    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // fungsi untuk mengedit data
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    // fungsi untuk mengupdate atau mengubah data di database
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // fungsi untuk menghapus data dari database
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }

    function delete_all($table)
    {
        $this->db->empty_table($table);
    }

    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    function insert_multiple($data, $table)
    {
        $this->db->insert_batch($table, $data);
    }

    public function save()
    {
        $this->load->helper('kebutuhan_helper');
        $lokasi = 'upload/data';
        $tipe_file = 'jpeg|jpg|png';

        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->no_kk = $post["no_kk"];

        $this->alamat = $post["alamat"];
        $this->j_kelamin = $post["jenis"];
        $this->tempat = $post["lahir"];
        $this->tgl_lahir = $post["tgl"];
        $this->status = $post["status"];
        $this->agama = $post["agama"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->kebutuhan = $post["kebutuhan"];
        $this->keterangan = "0";
        $this->id_user = $this->session->userdata('id');
        // $this->gambar_ktp = $this->_uploadKTP();
        // $this->gambar_kk = $this->_uploadKK();
        $this->gambar_ktp = sf_upload('ktp', 'upload/data/', 'jpeg|jpg|png', 1000000, 'ktp1');
        // $this->gambar_1= sf_upload('ktp', 'upload/data/', 'jpeg|jpg|png', 1000000, 'ktp2');
        // $this->gambar_2 = sf_upload('ktp', 'upload/data/', 'jpeg|jpg|png', 1000000, 'ktp3');
        // $this->gambar_3 = sf_upload('ktp', 'upload/data/', 'jpeg|jpg|png', 1000000, 'ktp4');


       



        return $this->db->insert($this->_table1, $this);
    }


    public function _uploadKTP()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['overwrite']            = true;
        $config['file_name']            = "no_ktp";
        $config['encrypt_name']            = true;
        $config['max_size']             = 1024; // 1MB
        // $field_name = "ktp";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ktp')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/warga', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }
    }
    public function _uploadKK()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        // $config['overwrite']            = true;
        $config['file_name']            = "kk";
        $config['encrypt_name']            = true;
        $config['max_size']             = 1024; // 1MB
        // $field_name = "kk";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('kk')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/warga', 'refresh');
        } else {
            return $this->upload->data('file_name');
        }
    }

    public function _deleteImage($id)
    {
        $foto = $this->getById($id);
        if ($foto->gambar_ktp != NULL) {
            $filename = explode(".", $foto->gambar_ktp)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename.*"));
        }
    }

    public function delete($id)
    {
        $this->_deleteImage($id);

        return $this->db->delete($this->_table1, array("id_warga" => $id));
    }


    function get_data_warga()
    {
        $this->db->select('data_warga.nama AS warga, data_warga.id_warga, user.nama, data_warga.kebutuhan, data_masuk.*');
        $this->db->from('data_masuk');
        $this->db->join('data_warga', 'data_masuk.id_data= data_warga.id_warga ');
        $this->db->join('user', 'data_masuk.id_user = user.id ');
        // $multipleWhere = ['name' => $name, 'email' => $email, 'status' => $status];
        $where = "keterangan='1' OR keterangan='3'";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    function get_data_rw()
    {
        $id =  $this->session->userdata('id');
        $this->db->select('data_rw.nama, data_rw.RW');
        $this->db->from('user');
        $this->db->join('data_rw', 'user.id_rw= data_rw.id_rw ');
        $where = "user.id= $id ";
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    function get_data_rt()
    {

        $this->db->select('*, user.nama AS nama_rt ');
        $this->db->from('user');
        $this->db->join('data_rw', 'user.id_rw= data_rw.id_rw ');
        // $where = "user.id= $id ";
        // $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    function get_data_rt_lurah()
    {

        $this->db->select('*, user.nama AS nama_rt, data_rw.nama AS nama_rw ');
        $this->db->from('user');
        $this->db->join('data_rw', 'user.id_rw= data_rw.id_rw ');
        $this->db->join('data_masuk', 'user.id= data_masuk.id_user ');

        // $where = "user.id= $id ";
        // $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }

    public function update_warga()
    {
        $post = $this->input->post();
        $this->id_warga = $post["id"];
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->nik = $post["no_kk"];
        $this->alamat = $post["alamat"];
        $this->j_kelamin = $post["jenis"];
        $this->tempat = $post["lahir"];
        $this->tgl_lahir = $post["tgl"];
        $this->status = $post["status"];
        $this->agama = $post["agama"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->kebutuhan = $post["kebutuhan"];
        // if (!empty($_FILES["datask"]["name"])) {
        //     $this->datask = $this->_uploaddatask();
        // } else {
        //     $this->datask = $post["old_datask"];
        // }
        // if (!empty($_FILES["datadukung"]["name"])) {
        //     $this->datadukung = $this->_uploaddatadukung();
        // } else {
        //     $this->datadukung = $post["old_datadukung"];
        // }
        return $this->db->update($this->_table1, $this, array('id_warga' => $post['id']));
    }

    public function update_profil()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        return $this->db->update($this->_table3, $this, array('id' => $post['id']));
    }



    public function save_berita()
    {
        $post = $this->input->post();
        $this->judul = $post["judul"];
        $this->isi_berita = $post["isi"];
        $this->tanggal_berita = $post["tanggal"];
        // $this->id_user = $this->session->userdata('id');
        $this->upload_berita = $this->_uploadBerita();

        return $this->db->insert($this->_table2, $this);
    }


    public function _uploadBerita()
    {
        $config['upload_path']          = './upload/berita/';
        $config['allowed_types']        = 'jpg|jpeg|png|doc|docx|pdf';
        $config['overwrite']            = true;
        $config['file_name']            = "hehehe-";
        $config['max_size']             = 2048; // 1MB
        $field_name = "upload_berita";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/save_berita', 'refresh');
        } else {
            return $this->upload->data("file_name");
        }
    }




    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kode = $post["kode"];
        $this->nama = $post["nama"];
        $this->uraian = $post["uraian"];
        $this->tanggal = $post["tanggal"];
        $this->sk = $post["sk"];
        $this->jenis = $post["jenis"];
        $this->kota = $post["kota"];
        $this->jumlah = $post["jumlah"];
        $this->petugas = $post["petugas"];
        if (!empty($_FILES["datask"]["name"])) {
            $this->datask = $this->_uploaddatask();
        } else {
            $this->datask = $post["old_datask"];
        }
        if (!empty($_FILES["datadukung"]["name"])) {
            $this->datadukung = $this->_uploaddatadukung();
        } else {
            $this->datadukung = $post["old_datadukung"];
        }
        $this->jenisdok = $post["jenisdok"];
        $this->keadaan = $post["keadaan"];
        $this->dus = $post["dus"];
        $this->urut = $post["urut"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }


    public function _uploaddatask()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        $field_name = "datask";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/uploadScan/' . $this->id, 'refresh');
        } else {
            return $this->upload->data("file_name");
        }
    }

    public function _uploaddatadukung()
    {
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'pdf|doc|docx|xls|xlsx';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        $field_name = "datadukung";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error['error']);
            redirect('admin/uploadScan/' . $this->id, 'refresh');
        } else {
            return $this->upload->data("file_name");
        }
    }

    public function _deletedatask($id)
    {
        $scan = $this->getById($id);
        if ($scan->datask != "default.pdf") {
            $filename = explode(".", $scan->datask)[0];
            // $filename2 = explode(".", $scan->datadukung)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename.*"));
            // return array_map('unlink', glob(FCPATH . "upload/data/$filename2.*"));
        }
    }

    public function _deletedatadukung($id)
    {
        $scan = $this->getById($id);
        if ($scan->datadukung != "default.pdf") {
            $filename2 = explode(".", $scan->datadukung)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename2.*"));
        }
    }
}
