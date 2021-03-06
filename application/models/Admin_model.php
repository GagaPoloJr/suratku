<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $username;
    public $password;
    public $level;

    public function rules()
    {
        return [
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required'
            ],

            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_pjg = $post["nama_pjg"];
        $this->nama = $post["nama_rt"];
        $this->id_rw = $post["rw"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->level = $post["level"];
        return $this->db->insert($this->_table, $this);
    }

    public function updatePegawai(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_pjg = $post["nama_pjg"];
        $this->nama = $post["nama_rt"];
        $this->id_rw = $post["rw"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->level = $post["level"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));

    }
    public function updateRT(){
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama_pjg = $post["nama_pjg"];
        $this->nama = $post["nama_rt"];
        $this->id_rw = $post["rw"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->level = $post["level"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));

    }
}