<?php defined('BASEPATH') or exit('No direct script access allowed');


// ini merupakan model untuk keberlangsungan admin


class SmartbookModel extends CI_Model
{
    private $_table1 = "data_warga";
    private $_table2 = "berita";
    private $_table3 = "user";
    private $_table4 = "data_gambar";






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
                'field' => 'no_kk',
                'label' => 'no_kk',
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
                'field' => 'kebutuhan',
                'label' => 'kebutuhan',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],
            [
                'field' => 'pekerjaan',
                'label' => 'pekerjaan',
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
    public function rules2()
    {
        return [
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ]
           
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
    public function getByIdGambarWarga($id)
    {
        return $this->db->get_where($this->_table4, ["id_warga" => $id])->row();
    }
    public function getByIdGambar($id)
    {
        return $this->db->get_where($this->_table4, ["id_gambar" => $id])->row();
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

    function id_warga()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(id_warga,4)) AS kd_max FROM data_warga WHERE DATE(tanggal)=CURDATE()");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy') . "LBB" . $kd;
    }




    public function save()
    {
        $this->load->helper('kebutuhan_helper');


        $post = $this->input->post();
        $this->id_warga =  $post["id"];
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
        // $this->gambar_1= sf_upload('ktp', 'upload/data/', 'jpeg|jpg|png', 1000000, 'ktp2');
        // $this->gambar_2 = sf_upload('ktp', 'upload/data/', 'jpeg|jpg|png', 1000000, 'ktp3');
        // $this->gambar_3 = sf_upload('ktp', 'upload/data/', 'jpeg|jpg|png', 1000000, 'ktp4');

        $this->db->insert($this->_table1, $this);
        $this->gambar_upload();
    }

    function gambar_upload()
    {
        $kode = $this->input->post('id');

        $nmfile = $kode . "_gambar";
        $config['file_name']             = $nmfile;
        $config['upload_path']          = './upload/data/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2048;
        // $config['encrypt_name']         = true;
        $this->load->library('upload', $config);

        $jumlah_berkas = count($_FILES['ktp']['name']);
        for ($i = 0; $i < $jumlah_berkas; $i++) {
            if (!empty($_FILES['ktp']['name'][$i])) {

                $_FILES['file']['name'] = $_FILES['ktp']['name'][$i];
                $_FILES['file']['type'] = $_FILES['ktp']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['ktp']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['ktp']['error'][$i];
                $_FILES['file']['size'] = $_FILES['ktp']['size'][$i];

                if ($this->upload->do_upload('file')) {

                    $uploadData = $this->upload->data();
                    $this->load->library('image_lib');
                    $this->image_lib->initialize(array(
                        'image_library' => 'gd2', //library yang kita gunakan
                        'source_image' => './upload/data/' . $uploadData['file_name'],
                        'maintain_ratio' => TRUE,
                        'quality' => '60%',
                        'width' => 800,
                        'height' => 800,
                        'new_iamge' => './upload/data/' . $uploadData['file_name']
                    ));
                    $this->image_lib->resize();


                    $data['gambar_pendukung'] = $uploadData['file_name'];
                    $data['id_warga'] = $kode;
                    $this->db->insert('data_gambar', $data);
                } else {
                    $data['error_msg'] = $this->upload->display_errors();
                }
            }
        }
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


    public function _deleteImage($id)
    {
        $foto = $this->getByIdGambarWarga($id);
        if ($foto->gambar_pendukung != NULL) {
            $filename = explode(".", $foto->gambar_pendukung)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename.*"));
        }
    }



    public function delete($id)
    {
        $this->_deleteImage($id);
        $this->db->delete($this->_table4, array("id_warga" => $id));
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

    function get_data_pegawai()
    {

        $this->db->select('*, nama AS jabatan');
        $this->db->from('user');

        $where = "level= 2 ";
        $this->db->where($where);
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
        return $this->db->update($this->_table1, $this, array('id_warga' => $post['id']));

    
    }

    public function _deleteGambar($id)
    {
        $foto = $this->getByIdGambar($id);
        if ($foto->gambar_pendukung != NULL) {
            $filename = explode(".", $foto->gambar_pendukung)[0];
            return array_map('unlink', glob(FCPATH . "upload/data/$filename.*"));
        }
    }

    public function delete_gambar($id)
    {
        $this->_deleteGambar($id);
        return $this->db->delete($this->_table4, array("id_gambar" => $id));
    }

    
   


    public function update_profil()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->username = $post["username"];
        $this->nama_pjg = $post["nama"];
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
            echo "tidak ada file pendukung";
            // $error = array('error' => $this->upload->display_errors());
            // $this->session->set_flashdata('error', $error['error']);
            // redirect('admin/save_berita', 'refresh');
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
            // $this->datask = $this->_uploaddatask();
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
