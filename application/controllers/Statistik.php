<?php 
class Statistik extends CI_Controller {
    public function index() {
        $data['judul'] = 'Statistik';
        $this->load->view('templates/header', $data);
        $this->load->view('statistik/index');
        $this->load->view('templates/footer');
    }
}