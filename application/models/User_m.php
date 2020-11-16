<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    function get_user()
    {
        $this->db->select('*');
        $this->db->from('tbuser');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function add_user($data)
    {
        $this->db->insert('tbuser', $data);
        return TRUE;
    }

    function get_id($id)
    {
        $query = $this->db->where('user_id',$id);
        $q = $this->db->get('tbuser');
        $data = $q->result();
        
        return $data;
    }

    function edit_kar($id,$data)
    {
        $this->db->where('user_id', $id);
        $this->db->update('tbuser', $data);

        return TRUE;
    }

    function delete($id)
    {
        $this->db->where('user_id', $id);
        $this->db->delete('tbuser');
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}