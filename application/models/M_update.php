<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_update extends CI_Model {

	//admin
    public function update_akun($id, $value)
    {
        $data = array(
            'status_akun' => $value,
        );
        $this->db->where('id_relawan', $id);
        $this->db->update('relawan', $data);
    }

    //relawan
    public function update_profil($id,$object){
		$this->db->where('id_relawan', $id);
		$this->db->update('relawan', $object);
    }

    function ubah_status($key)
    {
     $this->load->database();
     $data = array('status_akun' => "1");
     $this->db->where('md5(email)', $key);
     $this->db->update('relawan', $data);
    }

    function update_password($id,$object)
    {
     $this->load->database();
     $this->db->where('md5(email)', $id);
     $this->db->update('relawan', $object);

     // return true;
    }

    function ubah_password($id,$object)
    {
     $this->load->database();
     $this->db->where('id_relawan', $id);
     $this->db->update('relawan', $object);

     // return true;
    }

    public function update_agenda($id,$data){
       
        $this->db->where('id_agenda', $id);
        $this->db->update('agenda', $data);  
    }

    // public function update_relawan($id,$data){
       
    //     $this->db->where('id_relawan', $id);
    //     $this->db->update('relawan', $data);  
    // }

    public function update_program($id,$data){
       
        $this->db->where('id_program', $id);
        $this->db->update('program', $data);  
    }

     public function update_testimoni($id,$object){
        $this->db->where('id_testimoni', $id);
        $this->db->update('testimoni', $object);
    }
}