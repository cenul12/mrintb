<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_delete');
   }
   public function rapat($id){
        $this->M_delete->rapat($id);
        $this->session->set_flashdata('flash','Di Hapus');
        redirect('admin/rapat');
   }

   public function berita($id){
        $this->M_delete->berita($id);
        $this->session->set_flashdata('flash','Di Hapus');
        redirect('admin/berita');
   }

   public function program($id){
        $this->M_delete->program($id);
        $this->session->set_flashdata('flash','Di Hapus');
        redirect('admin/program');
   }

   public function daftar_relawan($id){
        $this->M_delete->daftar_relawan($id);
        $this->session->set_flashdata('flash','Di Hapus');
        redirect('admin/daftar_relawan');
   }

   public function agenda($id){
        $this->M_delete->agenda($id);
        $this->session->set_flashdata('flash','Di Hapus');
        redirect('admin/agenda');
   }

}
