<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Struk_m extends CI_Model
{

    function get_struk()
    {
        $this->db->select('*');
        $this->db->from('tb_struk');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function add_struk($data)
    {
        $this->db->insert('tb_struk', $data);
        return TRUE;
    }

    public function get_id($id)
    {
        $query = $this->db->where('id_struk', $id);
        $q = $this->db->get('tb_struk');
        $data = $q->result();

        return $data;
    }

    public function update_struk($id, $data)
    {
        $this->db->where('id_struk', $id);
        $this->db->update('tb_struk', $data);

        return TRUE;
    }

    public function del($data)
    {
        $this->db->where($data);
        $this->db->delete('tb_struk');

        return TRUE;
    }

    public function getprint()
    {
        $query = $this->db->query('select * from tb_struk');
        return $query;
    }
}

/* End of file Struk_m.php */