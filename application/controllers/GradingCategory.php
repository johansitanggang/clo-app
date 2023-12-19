<?php
class GradingCategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek apakah ada session (ini menggunakan helper function)
        cekLogin();
    }

    public function index()
    {
        $data['judul'] = 'Grading Category';

        $this->load->view('templates/header', $data);
        $this->load->view('GradingCategory/index', $data);
        $this->load->view('templates/footer');
    }
}

