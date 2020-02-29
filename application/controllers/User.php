<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller { 

	function __construct(){
        parent::__construct();
        $this->load->model('M_view');
        $this->load->library('pagination');
	}
	   
	public function index()
	{	
		$data = array(
			'data_berita' => $this->M_view->berita()->result_object(),
			'data_program' => $this->M_view->program()->result_object(),
			'data_testimoni' => $this->M_view->testimoni()->result_object(),
			'jumlah_relawan' => $this->M_view->jumlah_relawan()->result_object(),
			'jumlah_program' => $this->M_view->jumlah_program()->result_object(),
			'jumlah_berita' => $this->M_view->jumlah_berita()->result_object(),
			'jumlah_agenda' => $this->M_view->jumlah_agenda()->result_object()
		);
		$this->load->view('user/header');
		$this->load->view('user/beranda', $data);
		$this->load->view('user/footer');
	}

	public function berita()
	{
		
		$sql = $this->M_view->berita()->num_rows();
		$config['base_url'] = site_url('index.php/User/berita/');
		$config['total_rows'] =$sql;
		$config['per_page'] = 6;
		$config['num_link']=100;
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$dat['query']= $this->db->get('berita', $config['per_page'], $this->uri->segment(3));

		$this->load->view('user/header');
		$this->load->view('user/berita', $dat);
		$this->load->view('user/footer');
	}

	public function detail_berita(){
		$data['detail_berita'] = $this->M_view->detail_berita($this->uri->segment(3))->row_array();
		$this->load->view('user/header');
		$this->load->view('user/detail_berita', $data);
		$this->load->view('user/footer');
	}

	public function program()
	{
		$sql = $this->M_view->program()->num_rows();
		$config['base_url'] = site_url('index.php/User/program/');
		$config['total_rows'] =$sql;
		$config['per_page'] = 3;
		$config['num_link']=100;
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['next_link'] = 'Next';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Prev';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$data['data_program']= $this->db->get('program', $config['per_page'], $this->uri->segment(3));

		$this->load->view('user/header');
		$this->load->view('user/program', $data);
		$this->load->view('user/footer');
	}

	public function daftar()
	{
		$data['data_prov'] = $this->M_view->provinsi();
		// $data = array(
		// 		'data_prov' =>$this->M_view->provinsi()->result_object(),
		// 		'data_kab' =>$this->M_view->kabupaten1(),
		// 		'data_kec' =>$this->M_view->kecamatan1(),
		// 		'data_desa' =>$this->M_view->desa1(),
		// );

		$this->load->view('user/header');
		$this->load->view('user/daftar', $data);
		$this->load->view('user/footer');
	}

	public function syarat()
	{
		$this->load->view('user/header');
		$this->load->view('user/syarat');
		$this->load->view('user/footer');
	}

	public function tentang()
	{
		$this->load->view('user/header');
		$this->load->view('user/tentang');
		$this->load->view('user/footer');
	}

	public function login()
	{
		// $data['data_program'] = $this->M_view->program()->result_object();
		// $this->load->view('user/header');
		$this->load->view('user/login');
	// 	$this->load->view('user/footer');
	}

	public function lupa_password()
	{
		$this->load->view('user/header');
		$this->load->view('user/lupa_password');
		$this->load->view('user/footer');
	}

	public function password_baru()
	{
		$this->load->view('user/header');
		$this->load->view('user/password_baru');
		$this->load->view('user/footer');
	}

	public function berhasil()
	{
		$this->load->view('user/header');
		$this->load->view('user/berhasil_daftar');
		$this->load->view('user/footer');
	}

	public function kabupaten()
	{
        $id_provinsi = $this->input->post('id_provinsi');
        $data = $this->M_view->kabupaten($id_provinsi)->result();
        echo json_encode($data);
    }

    public function kecamatan()
    {
        $id_kab = $this->input->post('id_kab');
        $data = $this->M_view->kecamatan($id_kab)->result();
        echo json_encode($data);
    }

    public function desa()
    {
        $id_kec = $this->input->post('id_kec');
        $data = $this->M_view->desa($id_kec)->result();
        echo json_encode($data);
    }

}