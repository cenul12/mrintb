<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        // $this->load->model('M_login');
        

   }

    function auth(){
    	$this->load->model('M_login');

    	$email=htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
    	$password=htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

    	$cek_user = $this->M_login->auth_user($email,$password);
    	$cek_admin = $this->M_login->auth_admin($email,$password);

    	if($cek_user->num_rows() > 0){
    		$data=$cek_user->row_array();
    		// $this->session->set_userdata('masuk', TRUE);
    		$user_data = array(
                'id' =>$data['id_relawan'],
                'status_akun'=>$data['status_akun']  
    						
                );
    		$this->session->set_userdata($user_data);
    		$this->load->helper('url');

            // $this->session->set_flashdata('flash', 'Masuk');
    		redirect('relawan');
    	}

    	else if($cek_admin->num_rows() > 0){
    		$data=$cek_admin->row_array();
    		$this->session->set_userdata('masuk', TRUE);

    		$this->session->set_userdata('ses_user',$data['username']);
    		$this->session->set_userdata('ses_password',$data['password']);
           
    		$_SESSION['admin'] = $data['username'];
    		// $this->load->helper('url');
            // $this->session->set_flashdata('flash','Masuk');
    		redirect('admin');

    	}
    	else{

             $this->session->set_flashdata('flash','Email atau Password Anda Salah!'); 
    		// redirect('user/login');
            redirect('user/login');
    	}
    }

    function logout(){
    	$this->load->library('session');
    	$this->load->helper('url');
    	$this->session->sess_destroy();
    	redirect ('');
    }


}