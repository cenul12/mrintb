<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_view extends CI_Model {
    
    public function rapat()
    {
        $this->db->order_by("id_rapat", "desc");
        return $this->db->get('rapat');
    }
   
    public function berita()
    {
        $this->db->order_by("id_berita", "desc");
        return $this->db->get('berita');
    }

    public function detail_berita($id)
    {
        $sql = "SELECT * FROM berita Where id_berita = ".$id."";
        return $this->db->query($sql);
    }

    public function program()
    {
        $this->db->order_by("id_program","desc");
        return $this->db->get('program');
    }

    public function edit_program($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function relawan()
    {
        $this->db->select('relawan.*, provinsi.nama_provinsi as id_provinsi, kabupaten.nama_kabupaten as id_kab, kecamatan.nama_kecamatan as id_kec, desa.nama_desa as id_desa');
        $this->db->from('relawan');
        $this->db->join('provinsi', 'provinsi.id_provinsi = relawan.id_provinsi');
        $this->db->join('kabupaten', 'kabupaten.id_kab = relawan.id_kab');
        $this->db->join('kecamatan', 'kecamatan.id_kec = relawan.id_kec');
        $this->db->join('desa', 'desa.id_desa = relawan.id_desa');
         return $this->db->get();
    }

    public function getrelawan($id)
    {
       $this->db->select(' provinsi.nama_provinsi as id_provinsi, kabupaten.nama_kabupaten as id_kab, kecamatan.nama_kecamatan as id_kec, desa.nama_desa as id_desa');
        $this->db->from('relawan');
        $this->db->join('provinsi', 'provinsi.id_provinsi = relawan.id_provinsi');
        $this->db->join('kabupaten', 'kabupaten.id_kab = relawan.id_kab');
        $this->db->join('kecamatan', 'kecamatan.id_kec = relawan.id_kec');
        $this->db->join('desa', 'desa.id_desa = relawan.id_desa');
        if ($id != null){
            $this->db->where('id_relawan', $id);
        }
        return $this->db->get();
    }

    public function relawan_satu($id)
    {
        // $this->db->from('relawan');
        $this->db->where('id_relawan', $id);
        return $this->db->get('relawan');

    }

    public function jumlah_relawan()
    {
        $sql = "SELECT COUNT(*) as jumlah_relawan FROM relawan";
        return $this->db->query($sql);
    }

    public function jumlah_program()
    {
        $sql = "SELECT COUNT(*) as jumlah_program FROM program";
        return $this->db->query($sql);
    }

    public function jumlah_berita()
    {
        $sql = "SELECT COUNT(*) as jumlah_berita FROM berita";
        return $this->db->query($sql);
    }

    public function jumlah_agenda()
    {
        $sql = "SELECT COUNT(*) as jumlah_agenda FROM agenda";
        return $this->db->query($sql);
    }

    public function jumlah_rapat()
    {
        $sql = "SELECT COUNT(*) as jumlah_rapat FROM rapat";
        return $this->db->query($sql);
    }

    public function agenda($tgl)
    {
       $sql = "SELECT * FROM agenda Where tanggal_agenda = '".$tgl."'";
        return $this->db->query($sql);
    }

    public function testimoni()
    {
        $this->db->order_by("id_testimoni", "desc");
        return $this->db->get('testimoni');
    }

    public function edit_testimoni($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function notif()
    {
        $sql = "SELECT * FROM relawan WHERE status_akun = 1";
        return $this->db->query($sql)->result_array();
    }

    public function cetak_bio($id)
    {
       $this->db->select('relawan.*, provinsi.nama_provinsi as id_provinsi, kabupaten.nama_kabupaten as id_kab, kecamatan.nama_kecamatan as id_kec, desa.nama_desa as id_desa');
        $this->db->from('relawan');
        $this->db->join('provinsi', 'provinsi.id_provinsi = relawan.id_provinsi');
        $this->db->join('kabupaten', 'kabupaten.id_kab = relawan.id_kab');
        $this->db->join('kecamatan', 'kecamatan.id_kec = relawan.id_kec');
        $this->db->join('desa', 'desa.id_desa = relawan.id_desa');
        if ($id != null){
            $this->db->where('id_relawan', $id);
        }
        return $this->db->get();
    }

    public function cetak_rel()
    {
        $sql = "SELECT * FROM relawan WHERE status_akun = 1";
        return $this->db->query($sql);
    }

    function cetak_agenda() 
    {
        return $this->db->get('agenda');
    }

    public function filteragenda($tgl1, $tgl2) 
    {
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

    public function filterrapat($tgl1, $tgl2)
    {
        $sql = "SELECT * FROM rapat WHERE tanggal BETWEEN '$tgl1' AND '$tgl2' ";
        $query = $this->db->query($sql);
        return $query;
    }

    public function provinsi()
    {
        $query = $this->db->get('provinsi');
        return $query->result();
    }

    public function kabupaten($id_provinsi)
    {
        $this->db->where('id_provinsi', $id_provinsi);
        return $this->db->get('kabupaten');
    }

    public function kecamatan($id_kab)
    {
        $this->db->where('id_kab', $id_kab);
        return $this->db->get('kecamatan');
    }
    
    public function desa($id_kec)
    {
        $this->db->where('id_kec', $id_kec);
        return $this->db->get('desa');
    }


}