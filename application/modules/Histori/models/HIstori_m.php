<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Histori_m extends CI_Model
{
    var $table = 'tb_histori'; //nama tabel dari database
    var $column_order = array(null, 'user_nama', 'tanggal', 'rupiah', 'ket'); //field yang ada di table user
    var $column_search = array('user_nama', 'tanggal',  'ket'); //field yang diizin untuk pencarian 
    var $order = array('id_histori' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $this->db->select('*');
        $this->db->from('tb_histori');
        $this->db->join('tbuser', 'tbuser.user_id=tb_histori.user', 'inner');
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

    public function gethistori()
    {
        $this->db->select('*');
        $this->db->from('tb_histori');
        $this->db->join('tbuser', 'tbuser.user_id=tb_histori.user', 'inner');
        // $this->db->join('tbalat', 'tbalat.id_devices=histori.id_devices', 'inner');
        $this->db->order_by('id_histori', 'desc');
        // $this->db->limit(20);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    function getcetak()
    {
        $this->db->select('*');
        $this->db->from('tb_cetak');
        $this->db->join('tbuser', 'tbuser.user_id=tb_cetak.id_user', 'inner');
        // $this->db->join('tbalat', 'tbalat.id_devices=histori.id_devices', 'inner');
        $this->db->order_by('id_cetak', 'desc');
        // $this->db->limit(20);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
}

/* End of file Histori_m.php */