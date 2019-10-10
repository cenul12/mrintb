<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_delete extends CI_Model {
    
    public function rapat($id){
        $this->db->where('id_rapat',$id);
        $this->db->delete('rapat');
    }

    public function berita($id){
        $this->db->where('id_berita',$id);
        $this->db->delete('berita');
    }

    public function program($id){
        $this->db->where('id_program',$id);
        $this->db->delete('program');
    }

    public function daftar_relawan($id){
        $this->db->where('id_relawan',$id);
        $this->db->delete('relawan');
    }

    public function agenda($id){
        $this->db->where('id_agenda',$id);
        $this->db->delete('agenda');
    }

}