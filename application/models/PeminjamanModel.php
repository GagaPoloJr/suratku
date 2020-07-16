<?php defined('BASEPATH') or exit('No direct script access allowed');

class PeminjamanModel extends CI_Model
{
    private $_table = "peminjaman";

    public $id;
    public $kode;
    public $tanggal;
    public $pengembalian;
    public $nama;
    public $nip;
    public $unit;
    public $dokumen;
    public $berkas;
    public $keterangan;

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
                'field' => 'tanggal',
                'label' => 'Tanggal',
                'rules' => 'required',
                'errors' => array('required' => '%s Belum Diisi')
            ],

            [
                'field' => 'nama',
                'label' => 'Nama',
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
        $this->tanggal = $post["tanggal"];
        $this->nama = $post["nama"];
        $this->nip = $post["nip"];
        $this->unit = $post["unit"];
        $this->dokumen = $post["dokumen"];
        $this->berkas = $post["berkas"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kode = $post["kode"];
        $this->tanggal = $post["tanggal"];
        $this->pengembalian = $post["pengembalian"];
        $this->nama = $post["nama"];
        $this->nip = $post["nip"];
        $this->unit = $post["unit"];
        $this->dokumen = $post["dokumen"];
        $this->berkas = $post["berkas"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array("id" => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
