<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_m');
        $this->load->library('bcrypt');
        if (!$this->session->userdata('userlogin')) {
            $pemberitahuan = "<div class='alert alert-warning'>Anda harus login dulu </div>";
            $this->session->set_flashdata('pesan', $pemberitahuan);
            redirect('Login');
        }
    }

    public function index()
    {
        $data = [
            'tittle' => 'Profil',
            'isi' => $this->Profil_m->getdata()
        ];
        $this->template->load('template', 'v_profil', $data);
    }

    public function edit_post()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $username = $this->input->post('usr');



        $data = array(
            'user_nama' => $nama,
            'username' => $username,


        );
        $this->Profil_m->update_user($id, $data);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                    <div class=\"alert-body\">
                    <button class=\"close\" data-dismiss=\"alert\">
                        <span>×</span>
                    </button>
                    Data Admin Berhasil Disimpan
                    </div>
                </div>");

        redirect(base_url('Profil'));
    }

    public function ubahPW()
    {
        $id = $this->input->post('id');
        $pw1 = $this->input->post('pw1');
        $pw2 = $this->input->post('pw2');
        $hash = $this->bcrypt->hash_password($pw2);
        $data = array(
            'password' => $hash
        );

        if ($pw1 === $pw2) {
            $this->Profil_m->update_user($id, $data);
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                        <div class=\"alert-body\"><button class=\"close\" data-dismiss=\"alert\"><span>×</span></button>Password berhasil diganti</div></div>");
        } else {
            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger alert-dismissible show fade\">
                        <div class=\"alert-body\"><button class=\"close\" data-dismiss=\"alert\"><span>×</span></button>Password tidak sama !</div></div>");
        }
        redirect(base_url('Profil'));
    }
}

/* End of file Profil.php */
