<?php

class Dashboard extends CI_Controller
{

    public function index($nama = '')
    {
        $data['judul'] = 'Dashboard';
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}
