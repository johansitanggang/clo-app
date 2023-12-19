<?php
class AssessmentType extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek apakah ada session (ini menggunakan helper function)
        cekLogin();
    }

    public function index()
    {
        $data['judul'] = 'Assessment Type';

        $this->load->view('templates/header', $data);
        $this->load->view('AssessmentType/index', $data);
        $this->load->view('templates/footer');
    }
}

