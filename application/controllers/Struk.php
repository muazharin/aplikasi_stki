<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Struk extends CI_Controller
{

    public function index()
    {
        $data = [
            'tittle'          => 'Struk'
        ];
        $this->template->load('template', 'v_struk', $data);
    }
}

/* End of file Struk.php */
