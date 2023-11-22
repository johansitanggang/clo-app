<?php
class MetodeAsesmen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("MetodeAsesmen_model");
    }

    public function index()
    {
        $data['judul'] = 'Assessment Method';
        // $data['Course'] = $this->Asesmen_model->getAllCourse();
        $data['metode_asesmen'] = $this->MetodeAsesmen_model->getAllMetodeAsesmen();

        $this->load->view('templates/header', $data);
        $this->load->view('MetodeAsesmen/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $this->MetodeAsesmen_model->addMetodeAsesmen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('MetodeAsesmen');
            // var_dump($_POST);
        }
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $this->MetodeAsesmen_model->editMetodeAsesmen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('MetodeAsesmen');
            // var_dump($_POST);
        }
    }

    // delete
    public function delete($id)
    {
        $this->MetodeAsesmen_model->deleteMetodeAsesmen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('MetodeAsesmen');

    }
}
?>