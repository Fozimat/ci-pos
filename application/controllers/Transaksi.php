<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_barang');
    }

    public function index()
    {
        $data['title'] = 'Daftar Transaksi';
        // $data['data'] = $this->m_barang->getAll('tb_transaksi');

        $this->load->view('template/header', $data);
        $this->load->view('transaksi/tampil_transaksi', $data);
        $this->load->view('template/footer');
    }
}
