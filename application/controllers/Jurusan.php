<?php

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Jurusan_model');

    }

    public function index()
    {
        $data['judul'] = 'Jurusan';
        $data['Jurusan'] = $this->Jurusan_model->getAllJurusan();


        $this->load->view('templates/header', $data);
        $this->load->view('Jurusan/index', $data);
        $this->load->view('templates/footer');
    }

    // add
    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->Jurusan_model->addJurusan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Jurusan');
        }
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Jurusan_model->editJurusan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Jurusan');
        }
    }

    public function delete($id)
    {
        $this->Jurusan_model->deleteJurusan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Jurusan');

    }



}