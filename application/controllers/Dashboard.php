<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // cek apakah ada session (ini menggunakan helper function)
        cekLogin();
    }

    public function index($nama = '')
    {
        $data['judul'] = 'Dashboard';
        $data['nama'] = $this->session->userdata('nama_dosen');
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
