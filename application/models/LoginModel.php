<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class LoginModel extends CI_Model {
    
    public function get($Username){
        $this->db->where('username', $Username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
    function validate($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('user',1);
        return $result;
      }
}