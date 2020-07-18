<?php defined('BASEPATH') or exit('No direct script access allowed');

class SmartbookModel extends CI_Model
{
    private $_table = "smartbook";
    private $_table1 = "data_warga";


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
            // [
            //     'field' => 'nama',
            //     'label' => 'Nama',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ],

            // [
            //     'field' => 'uraian',
            //     'label' => 'Uraian',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ],

            // [
            //     'field' => 'tanggal',
            //     'label' => 'Tanggal',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ],

            // [
            //     'field' => 'sk',
            //     'label' => 'SK',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ],

            // [
            //     'field' => 'jenis',
            //     'label' => 'Jenis',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ],

            // [
            //     'field' => 'kota',
            //     'label' => 'Kota',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ],

            // [
            //     'field' => 'jumlah',
            //     'label' => 'Jumlah',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ],

            // [
            //     'field' => 'petugas',
            //     'label' => 'Petugas',
            //     'rules' => 'required',
            //     'errors' => array('required' => '%s Belum Diisi')
            // ]
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

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    // fungsi untuk menginput data ke database
    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
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
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->alamat = $post["alamat"];
        $this->j_kelamin = $post["jenis"];
        $this->tempat = $post["lahir"];
        $this->tgl_lahir = $post["tgl"];
        $this->status = $post["status"];
        $this->agama = $post["agama"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->kebutuhan = $post["kebutuhan"];
        $this->id_user = $this->session->userdata('id');

        return $this->db->insert($this->_table1, $this);
    }



    //punya anas
    public function save_warga()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->uraian = $post["uraian"];
        $this->tanggal = $post["tanggal"];
        $this->sk = $post["sk"];
        $this->jenis = $post["jenis"];
        $this->kota = $post["kota"];
        $this->jumlah = $post["jumlah"];
        $this->petugas = $post["petugas"];

        return $this->db->insert($this->_table, $this);
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

    public function delete($id)
    {
        $this->_deletedatask($id);
        $this->_deletedatadukung($id);
        return $this->db->delete($this->_table, array("id" => $id));
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
