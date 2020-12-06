<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
       
        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Admin');
        }
    }

    public function index()
    {
        $data = [
            'tittle'          => 'Dashboard',

        ];
        $this->template->load('template', 'dashboard', $data);
    }

}

/* End of file HomeUser.php */