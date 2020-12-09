<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');
    }

    public function index()
    {
        $data['title'] = 'Daftar Barang';
        $data['data'] = $this->m_barang->getAll('tb_barang');
        $this->load->view('template/header', $data);
        $this->load->view('home/tampil_barang', $data);
        $this->load->view('template/footer');
    }
}
