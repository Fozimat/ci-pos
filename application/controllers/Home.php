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

    public function tambah()
    {
        $valid = $this->form_validation;
        $valid->set_rules('kode_barang', 'Kode Barang', 'required|is_unique[tb_barang.kode_barang]');
        $valid->set_rules('nama_barang', 'Nama Barang', 'required|min_length[3]');
        $valid->set_rules('harga', 'Harga', 'required|integer');
        $valid->set_rules('stok', 'Stok', 'required|integer');
        $valid->set_rules('keterangan', 'keterangan', 'required');

        $valid->set_error_delimiters('<div class="text-danger">', '</div>');

        $valid->set_message('required', '{field} tidak boleh kosong');
        $valid->set_message('integer', '{field} harus berupa angka');
        $valid->set_message('min_length', '{field} minimal 3 karakter');
        $valid->set_message('is_unique', '{field} tidak boleh sama');

        $data['title'] = 'Tambah Barang';

        if ($valid->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('home/tambah_barang');
            $this->load->view('template/footer');
        } else {
            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $keterangan = $this->input->post('keterangan');

            $data = [
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'harga' => $harga,
                'stok' => $stok,
                'keterangan' => $keterangan
            ];

            $this->m_barang->tambahAll('tb_barang', $data);
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('home');
        }
    }

    public function hapus($id)
    {
        $where = [
            'id_barang' => $id
        ];
        $this->m_barang->deleteData('tb_barang', $where);
        $this->session->set_flashdata('flash', 'dihapus');
        redirect('home');
    }

    public function edit($id)
    {
        $valid = $this->form_validation;
        $valid->set_rules('kode_barang', 'Kode Barang', 'required');
        $valid->set_rules('nama_barang', 'Nama Barang', 'required|min_length[3]');
        $valid->set_rules('harga', 'Harga', 'required|integer');
        $valid->set_rules('stok', 'Stok', 'required|integer');
        $valid->set_rules('keterangan', 'keterangan', 'required');

        $valid->set_error_delimiters('<div class="text-danger">', '</div>');

        $valid->set_message('required', '{field} tidak boleh kosong');
        $valid->set_message('integer', '{field} harus berupa angka');
        $valid->set_message('min_length', '{field} minimal 3 karakter');
        $valid->set_message('is_unique', '{field} tidak boleh sama');

        $where = [
            'id_barang' => $id
        ];

        $data['data'] = $this->m_barang->detailData('tb_barang', $where);
        $data['title'] = 'Edit Barang';

        if ($valid->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('home/edit_barang', $data);
            $this->load->view('template/footer');
        } else {
            $kode_barang = $this->input->post('kode_barang');
            $nama_barang = $this->input->post('nama_barang');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');
            $keterangan = $this->input->post('keterangan');

            $data = [
                'kode_barang' => $kode_barang,
                'nama_barang' => $nama_barang,
                'harga' => $harga,
                'stok' => $stok,
                'keterangan' => $keterangan
            ];

            $this->m_barang->editData('tb_barang', $data, $where);
            $this->session->set_flashdata('flash', 'diedit');
            redirect('home');
        }
    }
}
