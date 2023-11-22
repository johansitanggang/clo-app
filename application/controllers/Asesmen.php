<?php

class Asesmen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Asesmen_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Asesmen';
        $data['Course'] = $this->Asesmen_model->getAllCourse();
        $data['asesmen'] = $this->Asesmen_model->getAllAsesmen();

        $this->load->view('templates/header', $data);
        $this->load->view('Asesmen/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->Asesmen_model->addAsesmen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Asesmen');
            // var_dump($_POST);
        }
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->Asesmen_model->editAsesmen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Asesmen');
            // var_dump($_POST);
        }
    }

    // delete
    public function delete($id)
    {
        $this->Asesmen_model->deleteAsesmen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Asesmen');

    }


    public function detail($kode_mata_kuliah)
    {
        $data['judul'] = 'Detail';
        $data['asesmen'] = $this->Asesmen_model->getAsesmenByCode($kode_mata_kuliah);
        $data['nilai_mahasiswa'] = $this->Asesmen_model->getNilaiMahasiswaByCode($kode_mata_kuliah);

        // Percentage of Student within each category 
        $data['countExcellent'] = $this->Asesmen_model->countExcellentStudentsByTask($kode_mata_kuliah);
        $data['countVeryGood'] = $this->Asesmen_model->countVeryGoodStudentsByTask($kode_mata_kuliah);
        $data['good'] = $this->Asesmen_model->countGoodStudentsByTask($kode_mata_kuliah);
        $data['fair'] = $this->Asesmen_model->countFairStudentsByTask($kode_mata_kuliah);
        $data['poor'] = $this->Asesmen_model->countPoorStudentsByTask($kode_mata_kuliah);
        // end Percentage of Student within each category 

        // var_dump($data['countExcellent']); 
        $this->load->view('templates/header', $data);
        $this->load->view('Asesmen/detail', $data);
        $this->load->view('templates/footer');
    }

    public function addNilai()
    {
        if (isset($_POST['submit'])) {
            $this->Asesmen_model->addNilaiMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $kode = $_POST['kode_mata_kuliah'];
            redirect('asesmen/detail/' . $kode);
            var_dump($_POST);
        }
    }

    public function editNilai()
    {
        if (isset($_POST['submit'])) {
            $this->Asesmen_model->editNilaiMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            $kode = $_POST['kode_mata_kuliah'];
            redirect('asesmen/detail/' . $kode);
            var_dump($_POST);
        }
    }

    public function deleteNilai($id, $kode)
    {
        $this->Asesmen_model->deleteNilaiMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Asesmen/detail/' . $kode);
    }

}