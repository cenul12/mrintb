<?php
Class Laporan extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('M_view');
    }

    public function program(){
        $data['data_program'] = $this->M_view->program()->result_object();
        $this->load->view('admin/Laporan/Cetak_program', $data);
    }
    public function relawan(){
        $data['data_relawan'] = $this->M_view->cetak_rel()->result_object();
        $this->load->view('admin/Laporan/Cetak_relawan', $data);
    }
    public function rapat(){
        if (isset($_POST['cetak_data'])){
            $data['data_rapat'] = $this->M_view->filterrapat($_POST['tgl_a'], $_POST['tgl_b'])->result_object();
        }else{
            $data['data_rapat'] = $this->M_view->rapat()->result_object();
        }

        $this->load->view('admin/Laporan/Cetak_rapat', $data);
    }
    public function agenda(){
        if (isset($_POST['cetak_agenda'])){
            $data['data_agenda'] = $this->M_view->filteragenda($_POST['tgl_c'], $_POST['tgl_d'])->result_object();
        }else{
            $data['data_agenda'] = $this->M_view->cetak_agenda()->result_object();
        }
        $this->load->view('admin/Laporan/Cetak_agenda', $data);
    }

    public function cetak_bio($id_relawan){
        $data['data'] = $this->db->get_where('relawan', ['id_relawan'=>$id_relawan])->row();
        // $data['data'] = $this->db->get_where('relawan')->row();
        
        // $data['data'] = $this->M_view->relawan_a($id)->result_object();
        $this->load->view('admin/Laporan/Bio_relawan', $data);
    }

  
}