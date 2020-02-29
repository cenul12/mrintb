<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_create','tambah');

   }
    public function tambah_rapat(){
        $ambil = $this->input->post('tanggal');
        $bulan = substr($ambil, 0,2);
        $tanggal = substr($ambil, 3,2); 
        $tahun = substr($ambil, 6,4);
        $data = array(
            'judul' => $this->input->post('judul'),
            'tanggal' => $this->input->post('tanggal'),
            'hasil_rapat' => $this->input->post('hasil_rapat')
        );
        $foto 				=     $_FILES['foto']['name'];
		if($foto==''){
            echo "foto gak kebaca"; die(); 
		}
		else{
			$config['upload_path']		='assets/Img/rapat';
			$config['allowed_types']	='jpg|jpeg|png';

			$this->load->library('upload',$config);

			if(!$this->upload->do_upload('foto')){
                echo "gagal upload gambar"; die();
			}
			else{
				$foto = $this->upload->data('file_name');
				$data['foto'] = $foto;
            }
		}
        $this->tambah->tambah_rapat($data);
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('admin/rapat');
    }

    public function tambah_berita(){
        $this->load->helper('slug');
        // $ambil = $this->input->post('tanggal');
        // $bulan = substr($ambil, 0,2);
        // $tanggal = substr($ambil, 3,2); 
        // $tahun = substr($ambil, 6,4);
        date_default_timezone_set("Asia/Bangkok");
        $data = array(

            'judul_berita' => $this->input->post('berita'),
            'keterangan' => $this->input->post('keterangan'),
            'tanggal' => date('Y-m-d'),
            'isi_berita' => $this->input->post('isi_berita'),
            'penulis' => $this->input->post('penulis'),
            'editor' => $this->input->post('editor'),
            'slug_judul' => slug($this->input->post('berita'))
        );

        $foto = $_FILES['foto']['name'];
		if($foto==''){
            echo "foto gak kebaca"; die();
		}
		else{
			$config['upload_path']		='assets/Img/berita';
			$config['allowed_types']	='jpg|jpeg|png';
             // $config['max_size']        = 1000;
            $config['max_size']             = 5000;
            // $config['max_width']            = 1500;
            // $config['max_height']           = 1500;


			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
                // redirect('admin/tambah_rapat'); die();
                echo "gagal ambil gambar"; die();
			}
			else{
				$foto = $this->upload->data('file_name');
				$data['foto'] = $foto;
            }
		}

        $this->tambah->tambah_berita($data);
        $this->session->set_flashdata('flash','Ditambahkan');

        redirect('admin/berita');
    }

    public function tambah_program(){
        $data = array(
            'nama_program' => $this->input->post('program'),
            'deskripsi' => $this->input->post('deskripsi'),
            'keterangan' => $this->input->post('keterangan')
        );
        $foto         =     $_FILES['foto']['name'];
        if($foto==''){
            echo "foto gak kebaca"; die();
        }
        else{
          $config['upload_path']    ='assets/Img/program';
          $config['allowed_types']  ='jpg|jpeg|png';
                 // $config['max_size']        = 1000;
                $config['max_size']             = 5000;
                // $config['max_width']            = 1500;
                // $config['max_height']           = 1500;


          $this->load->library('upload',$config);
          if(!$this->upload->do_upload('foto')){
                echo "gagal ambil gambar"; die();
          }
          else{
            $foto = $this->upload->data('file_name');
            $data['foto'] = $foto;
            }
        }
            
            $this->tambah->tambah_program($data);
            $this->session->set_flashdata('flash','Ditambahkan');
            redirect('admin/program');

    }
           
    public function daftar(){
        if ($this->input->post('password') == $this->input->post('U_password')) {

            $config['upload_path']          = './assets/Img/relawan';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5000;
            // $config['max_width']            = 1500;
            // $config['max_height']           = 1500;

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $this->upload->data('file_name');

            $this->load->helper(array('form', 'url'));
            $id_relawan = '';
            $nama_lengkap = $this->input->post('nama');
            $tempat = $this->input->post('tempat');
            $tanggal_lahir = $this->input->post('lahir'); 
            $jenis_kelamin = $this->input->post('jenisk');
            $jenis_identitas = $this->input->post('jenis');
            $no_identitas = $this->input->post('noidentitas');
            $agama = $this->input->post('agama');
            $status = $this->input->post('status');
            $pekerjaan = $this->input->post('pekerjaan');
            $alamat = $this->input->post('alamat'); 
            $id_desa = $this->input->post('des');
            $id_kec = $this->input->post('kec');
            $id_kab = $this->input->post('kab');
            $id_provinsi = $this->input->post('prov');
            $no_hp = $this->input->post('no_hp');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $foto = $this->upload->data('file_name');


            $object = array(
                    'id_relawan' =>$id_relawan,
                    'nama_lengkap' => $nama_lengkap,
                    'tempat' => $tempat,
                    'tanggal_lahir' => $tanggal_lahir, 
                    'jenis_kelamin' => $jenis_kelamin,
                    'jenis_identitas' => $jenis_identitas,
                    'no_identitas' => $no_identitas,
                    'agama' => $agama,
                    'status' => $status,
                    'pekerjaan' => $pekerjaan,
                    'alamat' => $alamat,
                    'id_desa' => $id_desa,
                    'id_kec' => $id_kec,
                    'id_kab' => $id_kab,
                    'id_provinsi' => $id_provinsi,
                    'no_hp' => $no_hp,
                    'email' => $email,
                    'password' => $password,
                    'foto' =>$foto,
                    'status_akun' => 0
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
            $this->email->subject("Pendaftaran Relawan");
            $this->email->message(
                                "<h1>Pendaftaran Relawan</h1> 
             Terimakasih telah mendaftar sebagai relawan MRI Provinsi NTB.<br> 
             Silahkan mengikuti Pelatihan Relawan yang diadakan oleh ACT NTB untuk Menjadi Relawan secara Penuh. <br>
             Untuk Info Lebih Lanjut, Silahkan Datang Langsung ke Kantor ACT NTB di Jalan Sriwijaya No. 80J, Kel. Pagesangan Timur, Kec. Mataram, Kota Mataram, Nusa Tenggara Barat (Sebelah Barat Hotel Grand Legi Mataram).<br>
            Berikut Akun Relawan Anda : <br>
            E-mail   : $email <br>
            Password : $password <br>
             <br><br><br>
             Salam Hormat,<br>
             <br>
             Branch Manager ACT NTB <br>"
             // .site_url("create/verification/$encrypted_id")
             .site_url("User")
             
            );

          
            if($this->email->send())
            {
                $this->tambah->daftar($object);
               redirect('user/berhasil');
                // echo "Berhasil melakukan registrasi";
            }else
            {
               echo "Gagal melakukan pendaftaran";
            }
          
            echo "<br><br><a href='".site_url("user")."'>Kembali ke Home</a>";

        } 
    }

   // public function verification($key)
   //  {
   //   $this->load->helper('url');
   //   $this->load->model('M_update');
   //   $this->M_update->ubah_status($key);
   //   echo "Selamat akun anda sudah terverifikasi, Silahkan login dengan akun anda.";
   //   echo "<br><br><a href='".site_url("user/login")."'>Kembali ke Menu Login</a>";
   //  }

    
    public function tambah_agenda(){
        // $tgl = $this->input->post('tanggal_agenda');
         $data = array(
            'tanggal_agenda' => $this->input->post('tanggal_agenda'),
            'jam' => $this->input->post('jam'),
            'tempat' => $this->input->post('tempat'),
            'agenda' => $this->input->post('agenda')
        );
        $this->tambah->tambah_agenda($data);
        $this->session->set_flashdata('flash','Ditambahkan');
        redirect('admin/agenda');
    }

    public function testimoni(){

        $config['upload_path']          = './assets/Img/testimoni';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        // $config['max_size']             = 1000;
        // $config['max_width']            = 1500;
        // $config['max_height']           = 1500;

        $this->load->library('upload', $config);
        $this->upload->do_upload('foto');
        
        $data = array (
            'nama_rel' => $this->input->post('namarelawan'),
            'testimoni' => $this->input->post('testimoni'),
            'foto' => $this->upload->data('file_name')
        );
              
        $this->tambah->testimoni($data);
        $this->session->flashdata('flash', 'Ditambahkan');
        redirect('admin/testimoni');
    }


}