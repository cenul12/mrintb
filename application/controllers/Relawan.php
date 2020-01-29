<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relawan extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_view');
	}

	public function index(){
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['id'])){
			return redirect('user/login');
		}
		$data = array(
				'data_prov' =>$this->M_view->provinsi()->result_object(),
				'data_kab' =>$this->M_view->kabupaten1(),
				'data_kec' =>$this->M_view->kecamatan1(),
				'data_desa' =>$this->M_view->desa1(),
				'data_relawan' => $this->M_view->relawan_satu($_SESSION['id'])->row_array(),
		);

		// $data['data_relawan'] = $this->M_view->relawan_satu($_SESSION['id'])->row_array();
		$this->load->view('relawan/header',$data);
		$this->load->view('relawan/profile', $data);
		$this->load->view('relawan/footer');
	}

	public function hasil_rapat(){
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['id'])){
			return redirect('user/login');
		}
		
		$data['data_relawan'] = $this->M_view->relawan_satu($_SESSION['id'])->row_array();
		$data['data_rapat'] = $this->M_view->rapat()->result_object();
		$this->load->view('relawan/header',$data);
		$this->load->view('relawan/hasil_rapat', $data);
		$this->load->view('relawan/footer');
	}

	public function ganti_password(){
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['id'])){
			return redirect('user/login');
		}
		
		$data['data_relawan'] = $this->M_view->relawan_satu($_SESSION['id'])->row_array();
		// $data['data_rapat'] = $this->M_view->rapat()->result_object();
		$this->load->view('relawan/header',$data);
		$this->load->view('relawan/ganti_password', $data);
		$this->load->view('relawan/footer');
	}

	public function agenda(){
		$this->load->library('session');
		$this->load->helper('url_helper');
		if(!isset($_SESSION['id'])){
			return redirect('user/login');
		}

		$tgl = $this->input->post('tanggal_agenda');
		$data = array(
			'data_agenda' => $this->M_view->agenda($tgl)->result_object(),
			'data_relawan'=> $this->M_view->relawan_satu($_SESSION['id'])->row_array(),
			'tanggal_agenda' => $tgl );
		
		// $data['data_relawan'] = $this->M_view->relawan_satu($_SESSION['id'])->row_array();
		// $data['data_rapat'] = $this->M_view->rapat()->result_object();
		$this->load->view('relawan/header',$data);
		$this->load->view('relawan/agenda', $data);
		$this->load->view('relawan/footer');
	}


}