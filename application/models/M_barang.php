<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{
    function getAll($table)
    {
        return $this->db->get($table);
    }

    function tambahAll($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    function deleteData($table, $where)
    {
        return $this->db->delete($table, $where);
    }

    function detailData($table, $where)
    {
        return $this->db->get_where($table, $where)->row();
    }

    function editData($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function tambahStokBarang($table, $data, $where)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
