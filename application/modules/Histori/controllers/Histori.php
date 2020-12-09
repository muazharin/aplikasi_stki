<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Histori extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('Histori_m');
        if (!$this->session->userdata('userlog')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Admin');
        }
    }

    function get_ajax()
    {
        $list = $this->Histori_m->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $d) {
            $no++;
            $row = array();
            $row[] = $no . ".";
            $row[] = $d->user_nama;
            $row[] = date_format(date_create($d->tanggal), 'd-m-Y');
            $row[] = $d->rupiah;
            $row[] = $d->ket;
            // add html for action

            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Histori_m->count_all(),
            "recordsFiltered" => $this->Histori_m->count_filtered(),
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }


    public function index()
    {
        $data = [
            'tittle'          => 'Histori',
            'histori'              => $this->Histori_m->gethistori()
        ];
        $this->template->load('template', 'v_histori', $data);
    }

    public function cetak()
    {
        $data = [
            'tittle'          => 'Cetak',
            'cetak'              => $this->Histori_m->getcetak()
        ];
        $this->template->load('template', 'v_cetak', $data);
    }
}

/* End of file Controllername.php */