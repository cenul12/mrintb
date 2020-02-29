<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_view');
	}
	   
	public function index()
	{
		$data = array(
			'jumlah_relawan' => $this->M_view->jumlah_relawan()->result_object(),
			'jumlah_program' => $this->M_view->jumlah_program()->result_object(),
			'jumlah_berita' => $this->M_view->jumlah_berita()->result_object(),
			'jumlah_agenda' => $this->M_view->jumlah_agenda()->result_object(),
			'jumlah_rapat' => $this->M_view->jumlah_rapat()->result_object(),
			// 'email'=>$this->M_view->notif()->result_object()

		);
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}

	public function tambah_rapat()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/Rapat/tambah_rapat');
		$this->load->view('admin/footer');
	}

	public function rapat()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$data['data_rapat'] = $this->M_view->rapat()->result_object();
		$this->load->view('admin/header');
		$this->load->view('admin/Rapat/rapat', $data);
		$this->load->view('admin/footer');
	}

	public function tambah_berita()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$this->load->view('admin/header');
		$this->load->view('admin/Berita/tambah_berita');
		$this->load->view('admin/footer');
	}

	public function berita()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$data['data_berita'] = $this->M_view->berita()->result_object();
		$this->load->view('admin/header');
		$this->load->view('admin/Berita/berita', $data);
		$this->load->view('admin/footer');
	}

	public function edit_program($id)
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}
		$where= array('id_program'=>$id);
		$data['data_program'] = $this->M_view->edit_program($where,'program')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/Program/edit_program', $data);
		$this->load->view('admin/footer');
	}

	public function program()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$data['data_program'] = $this->M_view->program()->result_object();
		$this->load->view('admin/header');
		$this->load->view('admin/Program/program', $data);
		$this->load->view('admin/footer');
	}

	public function daftar_pengajuan()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$data['data_relawan'] = $this->M_view->relawan()->result_object();
		$this->load->view('admin/header'); 
		$this->load->view('admin/Daftar Relawan/daftar_pengajuan',$data);
		$this->load->view('admin/footer');
	}

	public function daftar_relawan()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		// $id = $this->input->post('nama_lengkap');
  //       $data= array(
  //           'data_relawan' => $this->M_view->bio($id)->result_object(),
  //           'nama_lengkap' => $id
  //       );
        // $id = $this->input->post('nama_lengkap');
        //  $data= array(
        //     'data_relawan' => $this->M_view->search1($id),
        //     'nama_lengkap' => $id
        // );
		// $data['data_relawan'] = $this->M_view->search($id);
		
		$data['data_relawan'] = $this->M_view->relawan()->result_object();
		$this->load->view('admin/header');
		$this->load->view('admin/Daftar Relawan/daftar_relawan',$data);
		$this->load->view('admin/footer');
	}
	public function tambah_agenda()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}
		
		
		$this->load->view('admin/header');
		$this->load->view('admin/Agenda/tambah_agenda');
		$this->load->view('admin/footer');
	}
	public function agenda()
	{

		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$tgl = $this->input->post('tanggal_agenda');
		$data = array(
			'data_agenda' => $this->M_view->agenda($tgl)->result_object(),
			'tanggal_agenda' => $tgl );
		
		$this->load->view('admin/header');
		$this->load->view('admin/Agenda/agenda',$data);
		$this->load->view('admin/footer');
	}
	public function kirim_notif()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		$data['data_relawan'] = $this->M_view->relawan()->result_object();
		$this->load->view('admin/header');
		$this->load->view('admin/Notif',$data);
		$this->load->view('admin/footer');
	}

	public function laporan()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}

		// $id = $this->input->post('id_relawan');
		
		// $id = $this->input->post('nama_lengkap');
		// $data['data_relawan'] = $this->M_view->bio($id);
		
		$this->load->view('admin/header');
		$this->load->view('admin/Laporan/Data_laporan');
		$this->load->view('admin/footer');
	}

	public function edit_testimoni($id)
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}
		$where= array('id_testimoni'=>$id);
		$data['data_testimoni'] = $this->M_view->edit_testimoni($where,'testimoni')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/Testimoni/edit_testimoni', $data);
		$this->load->view('admin/footer');
	}

	public function testimoni()
	{
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['admin'])){
			return redirect('user/login');
		}
		$data['data_testimoni'] = $this->M_view->testimoni()->result_object();
		$this->load->view('admin/header');
		$this->load->view('admin/Testimoni/testimoni', $data);
		$this->load->view('admin/footer');
	}

	// public function tambah_testimoni()
	// {
	// 	$this->load->library('session');
	// 	$this->load->helper('url_helper');
	// 	if(!isset($_SESSION['admin'])){
	// 		return redirect('user/login');
	// 	}
	// 	// $data['data_testimoni'] = $this->M_view->testimoni()->result_object();
	// 	$this->load->view('admin/header');
	// 	$this->load->view('admin/tambah_testimoni');
	// 	$this->load->view('admin/footer');
	// }

}
