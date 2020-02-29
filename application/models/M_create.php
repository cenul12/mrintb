<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_create extends CI_Model {



    public function tambah_rapat($data){
        $this->db->insert('rapat',$data);
    }

    public function tambah_berita($data){
        $this->db->insert('berita',$data);
    }

    public function tambah_program($data){
        $this->db->insert('program',$data);
    }

    public function daftar($object){
        $this->db->insert('relawan',$object);
    }

    public function tambah_agenda($data){
        $this->db->insert('agenda',$data);
    }

    // public function coba ($id){
    //     $this->db->where('id_relawan', $id);
    //     return $this->db->get('relawan');
    // }


    public function tambah_notif($object){
        $this->db->insert('notif',$object);
    }

    public function testimoni($data) {
        $this->db->insert('testimoni',$data);
    }


    
}