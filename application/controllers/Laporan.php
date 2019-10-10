<?php
Class Laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',17);
        // mencetak string 
        $pdf->Cell(280,7,'AKSI CEPAT TANGGAP CABANG NUSA TENGGARA BARAT',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'MASYARAKAT RELAWAN INDONESIA CABANG NUSA TENGGARA BARAT',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(280,7,'DATA RELAWAN',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(8,6,'NO',1,0, 'C');
        $pdf->Cell(55,6,'NAMA RELAWAN',1,0, 'C');
        $pdf->Cell(22,6,'LAHIR',1,0, 'C');
        $pdf->Cell(19,6,'JK',1,0, 'C');
        $pdf->Cell(25,6,'J.IDENTITAS',1,0, 'C');
        $pdf->Cell(27,6,'NO IDENTITAS',1,0, 'C');
        $pdf->Cell(20,6,'AGAMA',1,0, 'C');
        $pdf->Cell(30,6,'PEKERJAAN',1,0, 'C');
        $pdf->Cell(27,6,'NO HP',1,0, 'C');
        $pdf->Cell(50,6,'EMAIL',1,1, 'C');
        $pdf->SetFont('Arial','',10);
        $relawan = $this->db->get('relawan')->result();
        $no=1;
        foreach ($relawan as $row){
            if ($row->status_akun=='1'){
                $pdf->Cell(8,6,$no++,1,0);
                $pdf->Cell(55,6,$row->nama_lengkap,1,0);
                $pdf->Cell(22,6,$row->tanggal_lahir,1,0);
                $pdf->Cell(19,6,$row->jenis_kelamin,1,0);
                $pdf->Cell(25,6,$row->jenis_identitas,1,0); 
                $pdf->Cell(27,6,$row->no_identitas,1,0);
                $pdf->Cell(20,6,$row->agama,1,0);  
                $pdf->Cell(30,6,$row->pekerjaan,1,0); 
                $pdf->Cell(27,6,$row->no_hp,1,0); 
                $pdf->Cell(50,6,$row->email,1,1); 
            }
            
        }
        $pdf->Output();
    }

     function program(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',17);
        // mencetak string 
        $pdf->Cell(180,7,'AKSI CEPAT TANGGAP CABANG NUSA TENGGARA BARAT',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(180,7,'MASYARAKAT RELAWAN INDONESIA CABANG NUSA TENGGARA BARAT',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->Cell(180,7,'PROGRAM',0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);

        $pdf->Cell(15,8,'NO',1,0, 'C');
        $pdf->Cell(95,8,'NAMA PROGRAM',1,0, 'C');
        $pdf->Cell(80,8,'KETERANGAN',1,1, 'C');
        // $pdf->Cell(80,8,'Deskripsi',1,1, 'C');
        $pdf->SetFont('Arial','',10);
        $program = $this->db->get('program')->result();
        $no=1;
        foreach ($program as $row){
                $pdf->Cell(15,10,$no++,1,0);
                $pdf->Cell(95,10,$row->nama_program,1,0);
                $pdf->Cell(80,10,$row->keterangan,1,1);
                // $pdf->Cell(80,50,$row->deskripsi,1,1); 
        }
        $pdf->Output();
    }

    function agenda(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',17);
        // mencetak string 
        $pdf->Cell(280,7,'AKSI CEPAT TANGGAP CABANG NUSA TENGGARA BARAT',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'MASYARAKAT RELAWAN INDONESIA NUSA TENGGARA BARAT',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        // $pdf->Cell(180,7,'PELAKSANAAN RAPAT',0,1,'C');
        $pdf->Cell(280,7,'DAFTAR AGENDA',0,1,'C');
        $pdf->Cell(280,6,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(18,10,'NO',1,0, 'C');
        $pdf->Cell(30,10,'TANGGAL',1,0, 'C');
        $pdf->Cell(30,10,'WAKTU',1,0, 'C');
        $pdf->Cell(45,10,'TEMPAT',1,0, 'C');
        $pdf->Cell(155,10,'AGENDA',1,1, 'C');
        // $pdf->Cell(40,6,'FOTO',1,1, 'C');
        $pdf->SetFont('Arial','',10);
        $agenda = $this->db->get('agenda')->result();
        $no=1;
        foreach ($agenda as $row){
                $pdf->Cell(18,10,$no++,1,0, 'C');
                $pdf->Cell(30,10,$row->tanggal_agenda,1,0, 'C');
                $pdf->Cell(30,10,$row->jam,1,0, 'C');
                $pdf->Cell(45,10,$row->tempat,1,0, 'C');
                $pdf->Cell(155,10,$row->agenda,1,1);
                // $pdf->Cell(40,6,$row->foto,1,1); 
        }
        $pdf->Output();
    }
}