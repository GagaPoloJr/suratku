

<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Page extends CI_Controller
{

                /* Ini merupakan controller untuk mengelola halaman website (kecuali admin) */
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model', 'article');
    }

    // menampilkan halaman utama
    public function index()
    {   
        // untuk menampilkan data artikel terbaru
        $data['terbaru'] = $this->db->query('select * from post where status="Publish" order by date_post desc limit 3')->result();
        $data['galeri'] = $this->db->query('select * from galeri order by created_on desc')->result();
        $this->load->view('landingpage/index', $data);
    }
    // untuk menampilkan list artikel
    public function artikel_list(){
        $data['title'] = 'Home';
        $this->load->model('Article_model', 'article');
        //pagination
        $this->load->library('pagination');
        // ambil data keyword
        if($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword',$data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }
        // config
        $this->db->like('title', $data['keyword']);
        $this->db->from('post');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 6;
        // initialize
        $this->pagination->initialize($config);

        // $data['post'] = $this->article->post();
        $data['start'] = $this->uri->segment(3);
        $data['post'] = $this->article->getPost($config['per_page'], $data['start'], $data['keyword']);

        $data['allpost'] = $this->article->getNameKategori();
        $data['allkategori'] = $this->db->get('kategori')->result_array();

        $this->load->view('article/artikel', $data);
    }

    // untuk membaca artikel
    public function detail_artikel($slug_post)
    {
        $this->load->model('Article_model', 'article');
        $data['post'] = $this->article->detail($slug_post);
        $data['title'] = 'Detail';

        $this->load->view('article/detail_artikel', $data);
    }

    public function tesgambar()
    {
        $this->load->view('lurah/tesgambar');
    }

}