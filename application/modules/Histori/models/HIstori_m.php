<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Histori_m extends CI_Model
{

    public function gethistori()
    {
        $this->db->select('*');
        $this->db->from('tb_histori');
        $this->db->join('tbuser', 'tbuser.user_id=tb_histori.user', 'inner');
        // $this->db->join('tbalat', 'tbalat.id_devices=histori.id_devices', 'inner');
        $this->db->order_by('id_histori', 'ASC');
        // $this->db->limit(20);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}

/* End of file Histori_m.php */