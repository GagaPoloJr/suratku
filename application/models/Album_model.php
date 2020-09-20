<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Album_model extends CI_Model
{

    private $_table = "galeri";
    
    public function rules()
    {
        return [
            [
                'field' => 'judul',
                'label' => 'judul',
                'rules' => 'required'
            ]

        ];
    }
    public function getIdGaleri($id)
    {
        return $this->db->get_where($this->_table, ["id_galeri" => $id])->row();
    }


    function tambah_galeri(){
        $this->load->helper('kebutuhan_helper');
        $post = $this->input->post();
        $this->judul = $post["judul"];
        $this->gambar_galeri =  sf_upload('galeri','image');
        $this->link_galeri = $post["link"];
        return $this->db->insert($this->_table, $this);
    }
    function edit_galeri(){
        $this->load->helper('kebutuhan_helper');
        $post = $this->input->post();
        $this->id_galeri = $post["id"];
        $this->judul = $post["judul"];
        if (!empty($_FILES["image"]["name"])) {
            $this->gambar_galeri =  sf_upload('galeri','image');;
        } else {
            $this->gambar_galeri = $post["old_image"];
        }
        $this->link_galeri = $post["link"];
        $this->db->update($this->_table, $this, array('id_galeri' => $post['id']));
    }
    public function _deleteGaleri($id)
    {
        $foto = $this->getIdGaleri($id);
        if ($foto->gambar_galeri != NULL) {
            $filename = explode(".", $foto->gambar_galeri)[0];
            return array_map('unlink', glob(FCPATH . "upload/gallery/thumbs/$filename.*"));
        }
    }
    function hapus_galeri($id)
    {
        $this->_deleteGaleri($id);
        return $this->db->delete($this->_table, array("id_galeri" => $id));
       
    }

   
}
