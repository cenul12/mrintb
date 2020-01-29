<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller { 

      function __construct() { 
         parent::__construct(); 
         $this->load->model('M_view');
         // $this->load->model('M_create');
          //load helper form
         // $this->load->helper('form'); 
         // $this->load->library('MyPHPMailer'); // load library
      } 

  public function send()  
  {  

    $subjek = $this->input->post('subjek');
    $pesan = $this->input->post('pesan'); 

    // $object = Array (
    //         'subjek' => $subjek,
    //         'pesan' => $pesan
    //     );

        // $cek_email = $this->M_view->notif($email);
          
          if(isset($_POST['kirim']))
        {
          $data= $this->M_view->notif();
          foreach ($data as $d) {
            
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
                // $config[''] = "SELECT email FROM relawan WHERE status_akun='1' ";
                //memanggil library email dan set konfigurasi untuk pengiriman email
               
                $this->email->initialize($config);
                //konfigurasi pengiriman
                $this->email->from($config['smtp_user'], 'Admin MRI NTB');
                $this->email->to($d['email']);
                $this->email->subject($subjek);
                $this->email->message($pesan);
              
                if($this->email->send())
                {
                   echo "Pendaftaran Berhasil, silahkan cek email anda";
                }else
                {
                   echo "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email";
                }
              
                echo "<br><br><a href='".site_url("user")."'>Kembali ke Home</a>";

                // $this->M_create->tambah_notif($object);
            }
            $this->session->set_flashdata('flash','terkirim');
            redirect ('admin/kirim_notif');
          }

        
        
  }
 
} 

      // function __construct() { 
      //    parent::__construct(); 
      //    $this->load->model('M_view');
      //    $this->load->model('M_create');
      //     //load helper form
      //    $this->load->helper('form'); 
      //    // $this->load->library('MyPHPMailer'); // load library
      // } 

      // public function index() { 

      //    // $this->load->helper('form'); 
      //    $this->load->view('Admin/kirim_notif'); 

      // } 

      // public function sendmail() { 

      //   $object = Array (
      //       'subjek' => $this->input->post('subjek'),
      //       'pesan' => $this->input->post('pesan')
      //   );
      //   // if(isset($_POST['kirim']))
      //   // {

      //    // $from_email = "husnulramdani15@gmail.com"; 
      //    // $query = $this->M_view->notif();

      //    $sql = "SELECT email FROM relawan WHERE id_relawan='8' ";
      //    // $query = mysql_query($sql);

      //    // var_dump($to_email); die();

      //    $config = Array(
      //           // 'protocol' => "smtp",
      //           // 'smtp_host' => "ssl://smtp.gmail.com",
      //           // 'smtp_port' => "465",
      //           // 'smtp_user' => "husnulramdani15@gmail.com",
      //           // 'smtp_pass' => 'mendure00',
      //           // 'mailtype'  => "html", 
      //           // 'charset'   => 'utf-8'
      //       'charset' => 'utf-8',
      //       'useragent' => 'Codeigniter',
      //       'protocol'=> "smtp",
      //       'mailtype'=> "html",
      //       'smtp_host'=> "ssl://smtp.gmail.com",//pengaturan smtp
      //       'smtp_port'=> "465",
      //       'smtp_timeout'=> "400",
      //       'smtp_user'=> "husnulramdani15@gmail.com", // isi dengan email kamu
      //       'smtp_pass'=> "mendure00", // isi dengan password kamu
      //       'crlf'=>"\r\n", 
      //       'newline'=>"\r\n", 
      //       'wordwrap' => TRUE,
      //   );

      //       $this->load->library('email', $config);
      //       // $this->email->set_newline("\r\n");   

      //    $this->email->from('smtp_user', 'Admin'); 
      //    $this->email->to($sql);
      //    $this->email->subject('$subjek'); 
      //    $this->email->message('$pesan'); 

      //    //Send mail 
      //    if($this->email->send()){
      //           // $this->session->set_flashdata("notif","Email berhasil terkirim."); 
      //     echo "Email dikirim";
      //    }else {
      //           // $this->session->set_flashdata("notif","Email gagal dikirim."); 
      //          echo "Email gagal dikirm";
      //    } 
      //     // $this->load->view('admin/kirim_notif'); 

      //   // }
         
      //   $this->M_create->tambah_notif($object);

      // }


//     public function kirim(){

//          $object = Array (
//             'subjek' => $this->input->post('subjek'),
//             'pesan' => $this->input->post('pesan')
//         );

         

//           if(isset($_POST['kirim']))
//           {
//             // $email = $this->M_view->notif();
//             // return $email->result();

           
                
//             $this->load->library('email');
//             $config = array();
//             $config['charset'] = 'utf-8';
//             $config['useragent'] = 'Codeigniter';
//             $config['protocol']= "smtp";
//             $config['mailtype']= "html";
//             $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
//             $config['smtp_port']= "465";
//             $config['smtp_timeout']= "400";
//             $config['smtp_user']= "husnulramdani15@gmail.com"; // isi dengan email kamu
//             $config['smtp_pass']= "mendure00"; // isi dengan password kamu
//             $config['crlf']="\r\n"; 
//             $config['newline']="\r\n"; 
//             $config['wordwrap'] = TRUE;

//             $this->email->initialize($config);
//             $this->email->from($config['smtp_user'], 'Admin MRI NTB');
//             // $sql = "SELECT email FROM relawan WHERE id_relawan='22' ";
//             $this->email->to( 'SELECT email FROM relawan WHERE id_relawan="22" ');
//             $this->email->subject('$subjek');
//             $this->email->message('$pesan');
//             if($this->email->send())
//             {
//                echo "Pendaftaran Berhasil, silahkan cek email anda";
//             }else
//             {
//                echo "Berhasil melakukan registrasi, namun gagal mengirim verifikasi email";
//             }
          
//             echo "<br><br><a href='".site_url("user")."'>Kembali ke Home</a>";
//           }
        
//           // $this->M_create->tambah_notif($object);
//           redirect ('admin/kirim_notif');
           
//     }  


// } 