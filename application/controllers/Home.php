<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_m');
        // if (!$this->session->userdata('userlogin')) {
        //     $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
        //     $this->session->set_flashdata('pesan', $pemberitahuan);
        //     redirect('Login');
        // }
    }

    public function index()
    {
        $data = [
            'tittle'          => 'Slip'
        ];
        $this->template->load('template', 'dashboard', $data);
    }

    public function tes()
    {
        # code...
        $data = [
            'tittle'          => 'Slip'
        ];
        $this->template->load('template', 'v_coba', $data);
    }
}