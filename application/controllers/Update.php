<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_update');
	}

	public function status_akun($id,$data){
        
		if ($data == '0') {
			$this->M_update->update_akun($id,'0');
			redirect('admin/daftar_relawan');
		}else{
             
            $this->M_update->update_akun($id,'1');
            redirect('admin/daftar_pengajuan');
            // $encrypted_id = md5($email);
            // $this->load->library('email');
            // $config = array();
            // $config['charset'] = 'utf-8';
            // $config['useragent'] = 'Codeigniter';
            // $config['protocol']= "smtp";
            // $config['mailtype']= "html";
            // $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
            // $config['smtp_port']= "465";
            // $config['smtp_timeout']= "400";
            // $config['smtp_user']= "husnulramdani15@gmail.com"; // isi dengan email kamu
            // $config['smtp_pass']= "mendure00"; // isi dengan password kamu
            // $config['crlf']="\r\n"; 
            // $config['newline']="\r\n"; 
            // $config['wordwrap'] = TRUE;
            // //memanggil library email dan set konfigurasi untuk pengiriman email
           
            // $this->email->initialize($config);
            // //konfigurasi pengiriman
            // $this->email->from($config['smtp_user'], 'Admin MRI NTB');
            // $this->email->to('$email');
            // $this->email->subject("Verifikasi Akun");
            // $this->email->message(
            //  "Keanggotaan dan Akun Anda sebagai Relawan MRI NTB Sudah Aktif,
            //   Silahkan Login Menggunakan akun Anda. <br>
            //    <br><br>"
            //  // .site_url("create/verification/$encrypted_id")
             
            // );

            // if($this->email->send())
            // {
            //    $this->M_update->update_akun($id,'1');
            //    redirect('admin/daftar_pengajuan');
            // }else
            // {
            //  echo "gagal"; 
            // }
			
		}
	}

	public function edit_profil($id){
	$config['upload_path']          = './assets/Img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1500;
        $config['max_height']           = 1500;

        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        
        if (!$this->upload->data('file_name')) {
        	$object = array(
                'nama_lengkap' => $this->input->post('nama'),
                'tanggal_lahir' => $this->input->post('lahir'), 
                'jenis_kelamin' => $this->input->post('jenisk'),
                'jenis_identitas' => $this->input->post('jenis'),
                'no_identitas' => $this->input->post('noidentitas'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                // 'foto' => $this->upload->data('file_name')
        	);
        }else{
        	$object = array(
                'nama_lengkap' => $this->input->post('nama'),
                'tanggal_lahir' => $this->input->post('lahir'), 
                'jenis_kelamin' => $this->input->post('jenisk'),
                'jenis_identitas' => $this->input->post('jenis'),
                'no_identitas' => $this->input->post('noidentitas'),
                'agama' => $this->input->post('agama'),
                'status' => $this->input->post('status'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'email' => $this->input->post('email'),
                'foto' => $this->upload->data('file_name')
        	);
        }
        // print_r($object);        
        $this->M_update->update_profil($id,$object);
        $this->session->set_flashdata('flash','Di Edit');
        redirect('relawan');
	}

        public function ganti_password(){
                $key = $this->input->post('key');
                if ($this->input->post('passwordbaru') == $this->input->post('U_password')) {
                        $data = array(
                                'password' => $this->input->post('passwordbaru')
                        );
                        $this->M_update->update_password($key,$data);
                        echo "Password berhasil diubah";
                        echo "<br><br><a href='".site_url("user/login")."'>Kembali ke Menu Login</a>";

                }else{
                        echo "password anda tidak cocok"; die();


                }     
        
        } 

        public function buat_password($id){
                if ($this->input->post('passwordbaru') == $this->input->post('U_password')) {
                        $object = array(
                                'password' => $this->input->post('passwordbaru')
                        );

                        $this->M_update->ubah_password($id,$object);
                        echo "Password berhasil diubah";
                        echo "<br><br><a href='".site_url("relawan")."'>Kembali ke halaman relawan</a>";

                }else{
                        echo "password anda tidak cocok"; die();


                }     
        
        } 


        public function edit_agenda($id){

          
               $data = array(
                    'tanggal_agenda' => $this->input->post('tanggal_agenda'),
                    'jam' => $this->input->post('jam'),
                    'tempat' => $this->input->post('tempat'),
                    'agenda' => $this->input->post('agenda_edit')
                );
                     
                $this->M_update->update_agenda($id, $data);
                $this->session->set_flashdata('flash','Di Edit');
                redirect('admin/agenda');
        }

        // public function edit_relawan($id){

        //     $data = array(
        //         'nama_lengkap' => $this->input->post('nama'),
        //         'tanggal_lahir' => $this->input->post('lahir'), 
        //         'jenis_kelamin' => $this->input->post('jenisk'),
        //         'jenis_identitas' => $this->input->post('jenis'),
        //         'no_identitas' => $this->input->post('noidentitas'),
        //         'agama' => $this->input->post('agama'),
        //         'status' => $this->input->post('status'),
        //         'pekerjaan' => $this->input->post('pekerjaan'),
        //         'alamat' => $this->input->post('alamat'),
        //         'no_hp' => $this->input->post('no_hp'),
        //         'email' => $this->input->post('email'),
        //         'foto' => $this->upload->data('file_name')
        //     );
        //     $this->M_update->update_relawan($id,$data);
        //     redirect('relawan');

        // }

        public function edit_program ($id){

           $data = array(
            'nama_program' => $this->input->post('program'),
            'deskripsi' => $this->input->post('deskripsi'),
            'keterangan' => $this->input->post('keterangan')
            );
        $this->M_update->update_program($id, $data);
        $this->session->set_flashdata('flash','Di Edit');
        redirect('admin/program');;

        }

}