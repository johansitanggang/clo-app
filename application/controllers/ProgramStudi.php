<?php

class ProgramStudi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProgramStudi_model');
        $this->load->library('form_validation');
        // cek apakah ada session (ini menggunakan helper function)
        cekLogin();


    }

    public function index()
    {
        $data['judul'] = 'Program Studi';
        $data['ProgramStudi'] = $this->ProgramStudi_model->getAllProgramStudi();

        $this->load->view('templates/header', $data);
        $this->load->view('program_studi/index', $data);
        $this->load->view('templates/footer');
    }

    // add
    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->ProgramStudi_model->addProgramStudi();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('ProgramStudi');
        }
    }

    // edit
    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->ProgramStudi_model->editProgramStudi();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('ProgramStudi');
        }
    }


    // delete
    public function delete($id)
    {
        $this->ProgramStudi_model->deleteProgramStudi($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('ProgramStudi');

    }

}