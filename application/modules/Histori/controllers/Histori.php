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


    public function index()
    {
        $data = [
            'tittle'          => 'Histori',
            // 'user'              => $this->User_m->get_user()
        ];
        $this->template->load('template', 'v_histori', $data);
    }
}

/* End of file Controllername.php */