<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller { 

	function __construct(){
        parent::__construct();
        $this->load->model('M_view');
	}
	   
	public function index()
	{	
		$data = array(
			'data_berita' => $this->M_view->berita()->result_object(),
			'data_program' => $this->M_view->program()->result_object(),
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
		$data['data_berita'] = $this->M_view->berita()->result_object();
		$this->load->view('user/header');
		$this->load->view('user/berita', $data);
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
		$data['data_program'] = $this->M_view->program()->result_object();
		$this->load->view('user/header');
		$this->load->view('user/program', $data);
		$this->load->view('user/footer');
	}

	public function daftar()
	{
		// $data['data_program'] = $this->M_view->program()->result_object();
		$this->load->view('user/header');
		$this->load->view('user/daftar');
		$this->load->view('user/footer');
	}

	public function syarat()
	{
		// $data['data_program'] = $this->M_view->program()->result_object();
		$this->load->view('user/header');
		$this->load->view('user/syarat');
		$this->load->view('user/footer');
	}

	public function tentang()
	{
		// $data['data_program'] = $this->M_view->program()->result_object();
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
		// $data['data_program'] = $this->M_view->program()->result_object();
		$this->load->view('user/header');
		$this->load->view('user/lupa_password');
		$this->load->view('user/footer');
	}

	public function password_baru()
	{
		// $data['data_program'] = $this->M_view->program()->result_object();
		$this->load->view('user/header');
		$this->load->view('user/password_baru');
		$this->load->view('user/footer');
	}

}