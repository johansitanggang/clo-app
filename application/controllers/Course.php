<?php
class Course extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Course_model');

        // cek apakah ada session (ini menggunakan helper function)
        cekLogin();
    }

    public function index() {
        $data['judul'] = 'Course';

        $data['Course'] = $this->Course_model->getAllCourse();

        $this->load->view('templates/header', $data);
        $this->load->view('Course/index', $data);
        $this->load->view('templates/footer');
    }

    // add
    public function add() {
        if(isset($_POST['submit'])) {
            // var_dump($_POST);
            // die;
            $this->Course_model->addCourse();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Course');
        }
    }

    // edit
    public function edit() {
        if(isset($_POST['submit'])) {
            $this->Course_model->editCourse();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Course');
            // var_dump($_POST);
        }
    }

    // delete
    public function delete($id) {
        $this->Course_model->deleteCourse($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Course');

    }

    public function clo($kode) {
        $data['judul'] = 'Course Learning Outcomes';

        // tabel course
        $data['course'] = $this->Course_model->getCourseByCode($kode);

        // tabel clo
        $data['clo'] = $this->Course_model->getCLOByCode($kode);

        $this->load->view('templates/header', $data);
        $this->load->view('Course/clo', $data);
        $this->load->view('templates/footer');
    }


    // add CLO 
    public function cloAdd() {
        if(isset($_POST['submit'])) {
            $this->Course_model->addCourseLearningOutcome();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $kode = $_POST['kode_mata_kuliah'];
            redirect('Course/clo/'.$kode);
        }

    }


    // edit CLO 
    public function cloEdit() {
        if(isset($_POST['submit'])) {
            $this->Course_model->editCourseLearningOutcome();
            $this->session->set_flashdata('flash', 'Diubah');
            $kode = $_POST['kode_mata_kuliah'];
            redirect('Course/clo/'.$kode);
            // var_dump($_POST);

        }
    }


    // delete CLO 
    public function cloDelete($id, $kode) {
        $this->Course_model->deleteCourseLearningOutcome($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Course/clo/'.$kode);
    }


}