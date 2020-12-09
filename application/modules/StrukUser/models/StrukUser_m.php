<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StrukUser_m extends CI_Model
{

    function get_struk()
    {
        $this->db->select('*');
        $this->db->from('tb_struk');
        $this->db->order_by('id_struk', 'desc');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    public function getdata()
    {
        // $id = $this->session->userdata['idlog'];
        $query = $this->db->where('user_id', $this->session->userdata['idlog']);
        $q = $this->db->get('tb_struk');
        $data = $q->result();

        return $data;
    }

    function add_histori($data)
    {
        $this->db->insert('tb_histori', $data);
        return TRUE;
    }

    function add_cetak($data)
    {
        $this->db->insert('tb_cetak', $data);
        return TRUE;
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

/* End of file StrukUser_m.php */