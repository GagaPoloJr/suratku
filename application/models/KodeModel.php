<?php defined('BASEPATH') or exit('No direct script access allowed');

class KodeModel extends CI_Model
{
    private $_table = "kode";

    public $id;
    public $kode;
    public $namafile;
    public $petugas;

    public function rules()
    {
        return [
            [
                'field' => 'kode',
                'label' => 'Kode',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'namafile',
                'label' => 'Nama File',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'petugas',
                'label' => 'Petugas',
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
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    
    public function save()
    {
        $post = $this->input->post();
        $this->kode = $post["kode"];
        $this->namafile = $post["namafile"];
        $this->petugas = $post["petugas"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kode = $post["kode"];
        $this->namafile = $post["namafile"];
        $this->petugas = $post["petugas"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
