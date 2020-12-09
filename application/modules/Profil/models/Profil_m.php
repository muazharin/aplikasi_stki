<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil_m extends CI_Model
{

    public function getdata()
    {
        // $id = $this->session->userdata['idlog'];
        $query = $this->db->where('user_id', $this->session->userdata['idlog']);
        $q = $this->db->get('tbuser');
        $data = $q->result();

        return $data;
    }

    function update_user($id, $data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbuser', $data);

        return TRUE;
    }
}

/* End of file Profil_m.php */
