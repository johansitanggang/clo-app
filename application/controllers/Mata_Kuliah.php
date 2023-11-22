<?php

class Mata_Kuliah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mataKuliah_model');

    }
    public function index()
    {
        $data['judul'] = 'Kelola Mata Kuliah';
        $data['pilihData'] = $this->mataKuliah_model->getPilihData();

        // template capaian pembelajaran
        // $data['capaianPembelajaran'] = $this->mataKuliah_model->cariTemplateCapaianPembelajaran();

        // // jika select dropdown mata kuliah
        if ($this->input->post('kode_mata_kuliah')) {
            // var_dump($_POST);
            $data['capaianPembelajaran'] = $this->mataKuliah_model->cariCapaianPembelajaran();
            $data['namaMataKuliah'] = $this->mataKuliah_model->cariMataKuliah();
            // var_dump($data['namaMataKuliah']);
        }

        // TAMBAH capaian pembelajaran
        if ($this->input->post('tambahNoCP') && $this->input->post('tambahCP')) {
            $data['capaianPembelajaran'] = $this->mataKuliah_model->tambahCapaianPembelajaran();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            // var_dump($this->session->flashdata('flash'));
        }

        // EDIT capaian pembelajaran
        if ($this->input->post('editNoCP') && $this->input->post('editCP')) {
            $data['capaianPembelajaran'] = $this->mataKuliah_model->editCapaianPembelajaran();
            $this->session->set_flashdata('flash', 'Diubah');
            // var_dump($_POST);
            // die;
        }

        $this->load->view('templates/header', $data);
        $this->load->view('mata_kuliah/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapusCP($id)
    {
        $this->mataKuliah_model->hapusCapaianPembelajaran($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Mata_Kuliah');
    }




}