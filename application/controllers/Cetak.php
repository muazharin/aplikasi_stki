<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->library('Mypdf');
    }


    public function index()
    {
        $mpdf = new \Mpdf\Mpdf();
        $data = $this->load->view('tes', [], TRUE);
        $mpdf->AddPage('L');
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    public function printPDF()
    {
        $this->mypdf->generate('v_dompdf', 'A4');
    }
}

/* End of file Cetak.php */
