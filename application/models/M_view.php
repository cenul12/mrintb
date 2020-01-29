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
        $this->db->order_by("id_program","desc");
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

    public function testimoni(){
        $this->db->order_by("id_testimoni", "desc");
        return $this->db->get('testimoni');
    }

    public function notif(){
        $sql = "SELECT * FROM relawan WHERE status_akun = 1";
        return $this->db->query($sql)->result_array();
    }

     public function cetak_rel(){
        $sql = "SELECT * FROM relawan WHERE status_akun = 1";
        return $this->db->query($sql);
    }

    function cetak_agenda() {
             return $this->db->get('agenda');
    }

    public function filteragenda($tgl1, $tgl2) {
             $sql = "SELECT * FROM agenda WHERE tanggal_agenda BETWEEN '$tgl1' AND '$tgl2' ";
             $query = $this->db->query($sql);
             return $query;
    }

    // public function search($id){
    //     // $sql = "SELECT * FROM relawan Where nama_lengkap = '".$id."' " ;
    //     // return $this->db->query($sql);  
    //     $this->db->like('nama_lengkap', $id);
    //     $query = $this->db->get('relawan');
    //     return $query->result();
    // }

    public function filterrapat($tgl1, $tgl2) {
             $sql = "SELECT * FROM rapat WHERE tanggal BETWEEN '$tgl1' AND '$tgl2' ";
             $query = $this->db->query($sql);
             return $query;
    }

    public function provinsi(){

        $sql = "SELECT * FROM provinsi";
        return $this->db->query($sql);
    }
    // public function kabupaten(){

    //     $sql = "SELECT * FROM data_wilayah WHERE LEVEL= 2";
    //     return $this->db->query($sql);
    // }
    // public function kecamatan(){

    //     $sql = "SELECT * FROM data_wilayah WHERE LEVEL=3";
    //     return $this->db->query($sql);
    // }
    // public function desa(){

    //     $sql = "SELECT * FROM data_wilayah WHERE LEVEL=4";
    //     return $this->db->query($sql);
    // }

    public function kabupaten1()
    {
        $id_provinsi = $this->input->post('id_provinsi');
        $this->db->select('*');
        $this->db->from('kabupaten');
        $this->db->where('id_provinsi', $id_provinsi);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function kecamatan1()
    {
        $id_kab = $this->input->post('id_kab');
        $this->db->select('*');
        $this->db->from('kecamatan');
        $this->db->where('id_kab', $id_kab);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function desa1()
    {
        $id_kec = $this->input->post('id_kec');
        $this->db->select('*');
        $this->db->from('desa');
        $this->db->where('id_kec', $id_kec);
        $query = $this->db->get();
        return $query->result_array();
    }


}