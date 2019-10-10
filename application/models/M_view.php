<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_view extends CI_Model {
    
    public function rapat(){
        $this->db->order_by("id_rapat", "desc");
        return $this->db->get('rapat');
    }
   
    public function berita(){
        $this->db->order_by("id_berita", "desc");
        return $this->db->get('berita');
    }
    public function detail_berita($id){
        $sql = "SELECT * FROM berita Where id_berita = ".$id."";
        return $this->db->query($sql);
    }

    public function program(){
        $this->db->order_by("id_program", "desc");
        return $this->db->get('program');
    }
    public function relawan(){
        return $this->db->get('relawan');
    }
    public function relawan_satu($id){
        $this->db->where('id_relawan', $id);
        return $this->db->get('relawan');
    }

    public function jumlah_relawan(){
        $sql = "SELECT COUNT(*) as jumlah_relawan FROM relawan";
        return $this->db->query($sql);
    }

    public function jumlah_program(){
        $sql = "SELECT COUNT(*) as jumlah_program FROM program";
        return $this->db->query($sql);
    }

    public function jumlah_berita(){
        $sql = "SELECT COUNT(*) as jumlah_berita FROM berita";
        return $this->db->query($sql);
    }
    public function jumlah_agenda(){
        $sql = "SELECT COUNT(*) as jumlah_agenda FROM agenda";
        return $this->db->query($sql);
    }
    public function agenda($tgl){
       $sql = "SELECT * FROM agenda Where tanggal_agenda = '".$tgl."'";
        return $this->db->query($sql);
    }

    // public function agenda($id){
    //     $this->db->where('id_agenda', $id);
    //     return $this->db->get('agenda');
    // }

}