<?php

defined('BASEPATH') or exit('No direct script access allowed');

class StrukUser_m extends CI_Model
{
    var $table = 'tb_struk'; //nama tabel dari database
    var $column_order = array(null, 'tanggal', 'nama', 'stor', 'berita_transaksi'); //field yang ada di table user
    var $column_search = array('tanggal', 'nama', 'berita_transaksi'); //field yang diizin untuk pencarian 
    var $order = array('id_struk' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {

        $this->db->from($this->table);
        $this->db->where('user_id', $this->session->userdata['idlog']);

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_struk()
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