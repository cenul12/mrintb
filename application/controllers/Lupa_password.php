<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Lupa_password extends CI_Controller {

    public function index(){
        if ($this->input->post('password') == $this->input->post('U_password')) {


            $this->load->helper(array('form', 'url'));
            // $id_relawan = '';
            // $nama_lengkap = $this->input->post('nama');
            // $tanggal_lahir = $this->input->post('lahir'); 
            // $jenis_kelamin = $this->input->post('jenisk');
            // $jenis_identitas = $this->input->post('jenis');
            // $no_identitas = $this->input->post('noidentitas');
            // $agama = $this->input->post('agama');
            // $status = $this->input->post('status');
            // $pekerjaan = $this->input->post('pekerjaan');
            // $alamat = $this->input->post('alamat');
            // $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');
            // $password = $this->input->post('password');
            // $foto = $this->upload->data('file_name');


            $object = array(
                    // 'id_relawan' =>$id_relawan,
                    // 'nama_lengkap' => $nama_lengkap ,
                    // 'tanggal_lahir' => $tanggal_lahir, 
                    // 'jenis_kelamin' => $jenis_kelamin,
                    // 'jenis_identitas' => $jenis_identitas,
                    // 'no_identitas' => $no_identitas,
                    // 'agama' => $agama,
                    // 'status' => $status,
                    // 'pekerjaan' => $pekerjaan,
                    // 'alamat' => $alamat,
                    // 'no_hp' => $no_hp,
                    'email' => $email,
                    // 'password' => $password,
                    // 'foto' =>$foto,
                    // 'status_akun' => 0
            );
             //enkripsi id
            $encrypted_id = md5($email);
          
            $this->load->library('email');
            $config = array();
            $config['charset'] = 'utf-8';
            $config['useragent'] = 'Codeigniter';
            $config['protocol']= "smtp";
            $config['mailtype']= "html";
            $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
            $config['smtp_port']= "465";
            $config['smtp_timeout']= "400";
            $config['smtp_user']= "husnulramdani15@gmail.com"; // isi dengan email kamu
            $config['smtp_pass']= "mendure00"; // isi dengan password kamu
            $config['crlf']="\r\n"; 
            $config['newline']="\r\n"; 
            $config['wordwrap'] = TRUE;
            //memanggil library email dan set konfigurasi untuk pengiriman email
           
            $this->email->initialize($config);
            //konfigurasi pengiriman
            $this->email->from($config['smtp_user'], 'Admin MRI NTB');
            $this->email->to($email);
            $this->email->subject("Reset Password");
            $this->email->message(
             "Untuk reset password, silahkan klik tautan dibawah ini<br><br>"
              .site_url("user/password_baru/$encrypted_id")
            );
          
            if($this->email->send())
            {
               echo "Silahkan cek email anda untuk reset password";
            }else
            {
               echo "Gagal mengirim email";
            }
          
            echo "<br><br><a href='".site_url("user/login")."'>Kembali ke Menu Login</a>";

        } 
    }


}