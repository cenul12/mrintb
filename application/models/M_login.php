<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

function auth_user($email,$password){
	$query=$this->db->query("SELECT * FROM relawan WHERE email='$email' AND password='$password' AND status_akun = '1' ");
	return $query;
}

function auth_admin($email,$password){
	$query=$this->db->query("SELECT * FROM admin WHERE username='$email' AND password=MD5('$password') ");
	return $query;
}




}

