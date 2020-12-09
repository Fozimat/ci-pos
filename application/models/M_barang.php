<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_barang extends CI_Model
{
    function getAll($table)
    {
        return $this->db->get($table);
    }
}
