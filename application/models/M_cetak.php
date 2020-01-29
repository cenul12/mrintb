<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cetak extends CI_Model {


	function cetak_program() {
			$hasil = $this->db->query("SELECT * FROM program");
			return $hasil->result();
		// $this->db->order_by("id_program");
  //       return $this->db->get('program');
	}

	function cetak_relawan() {
			$hasil = $this->db->query("SELECT * FROM relawan");
			return $hasil->result();
	}

	function cetak_agenda() {
			$hasil = $this->db->query("SELECT * FROM agenda");
			return $hasil->result();
	}

	function cetak_rapat() {
		$hasil = $this->db->query("SELECT * FROM rapat");
		return $hasil->result();
	}


}