<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_m');
        $this->load->library('bcrypt');
    }

    public function index()
    {
        check_already_login1();
        $this->load->view('v_admin');
    }

    public function proses()
    {
        # code...
        if (isset($_POST['username']) && isset($_POST['pass'])) {

            $username = $this->input->post('username');
            $pass = $this->input->post('pass');
            $hash = $this->bcrypt->hash_password($pass);    //encrypt password

            // if (isset($_POST["remember"])) {
            // 	$hour = time() + 3600 * 24 * 30;
            // 	setcookie('username', $username, $hour);
            // 	setcookie('user_pass', $pass, $hour);
            // }

            //ambil data dari database
            $check = $this->Admin_m->prosesLogin($username);
            $hasil = 0;
            if (isset($check)) {
                $hasil++;
            }

            //echo $pass;
            //echo "<br>";
            if ($hasil > 0) {
                $data = $this->Admin_m->viewDataByID($username);
                foreach ($data as $dkey) {
                    $passDB = $dkey->user_pass;
                    //$role = $dkey->role;
                    // $avatar = $dkey->foto;
                    $idusr = $dkey->user_id;
                }
                if ($this->bcrypt->check_password($pass, $passDB)) {
                    // Password match
                    $this->session->set_userdata('userlog', $username);
                    $this->session->set_userdata('idlogin', $idusr);


                    redirect(base_url() . 'Home');
                } else {
                    // Password does not match
                    $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove\"></i> Gagal Login, password salah</div>");
                    redirect(base_url() . 'Admin');
                }
            } else {
                $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove\"></i> Gagal Login, username tidak ditemukan</div>");
                redirect(base_url() . 'Admin');
            }
        }
    }

    public function logout()
    {
        $params = array('userlogin', 'user_id');
        $this->session->unset_userdata($params);
        redirect('Admin');
        # code...
    }

    public function data()
    {
        $data = [
            'tittle'          => 'Data Admin',
            'admin'              => $this->Admin_m->get_admin()
        ];
        $this->template->load('template', 'v_dataAdmin', $data);
    }

    public function tambah()
    {
        $data = [
            'tittle'          => 'Tambah Data Admin'
        ];
        $this->template->load('template', 'v_tambahAdmin', $data);
    }

    public function tambah_post()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('usr');
        $pass = $this->input->post('pw');
        $hash = $this->bcrypt->hash_password($pass);


        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => $hash

        );
        $this->Admin_m->add_admin($data);
        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success alert-dismissible show fade\">
                    <div class=\"alert-body\">
                    <button class=\"close\" data-dismiss=\"alert\">
                        <span>×</span>
                    </button>
                    Data Admin Berhasil Disimpan
                    </div>
                </div>");

        redirect(base_url('Admin/data'));
    }
}