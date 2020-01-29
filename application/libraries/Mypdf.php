<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 require_once('assets/dompdf/autoload.inc.php');
 use Dompdf\Dompdf;

class Mypdf {
	protected $ci;
	public function __construct() {
		$this->ci =& get_instance();
	}
	public function generate($view, $data = array(), $filename=' ', $stream=TRUE){
		$dompdf = new Dompdf();
		$html = $this->ci->load->view($view, $data, TRUE);
		$dompdf->loadHtml($html);
		$dompdf->setPaper('A4', 'potrait');
		$dompdf->render();
		if ($stream){
			$dompdf->stream($filename. "pdf");
		}else{
			return $dompdf->output();
		}

		// $pdf = $dompdf->output();
		// $dompdf->stream($filename . "pdf", array("Attachment"=>FALSE));

	}
	
}