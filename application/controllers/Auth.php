<?php
defined('BASEPATH') or exit('No direct sccript access allowed');


class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Auth_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('nip_dosen', 'NIP', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        // ambil dulu data loginan nya
        $nip_dosen = $this->input->post('nip_dosen');
        $password = $this->input->post('password');

        // cek dlu ada ga nip dosen nya di database
        $user = $this->db->get_where('tbl_user', ['nip_dosen' => $nip_dosen])->row_array();

        if ($user) {
            // kalau ada, lanjut cek password nya
            if (password_verify($password, $user['password'])) {
                // jika valid, siapin data di dlm session, supaya bisa dipakai di dalam halaman app nanti
                $data = [
                    'nip_dosen' => $user['nip_dosen'],
                    'nama_dosen' => $user['nama_dosen']
                ];

                // simpan data ke dalam session
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">
                Password dont valid!
              </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('flash', '<div class="alert alert-danger" role="alert">
                NIP not registered!
              </div>');
            redirect('auth');
        }

    }

    public function logout()
    {
        $this->session->unset_userdata('nip_dosen');
        $this->session->unset_userdata('nama_dosen');

        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
            you have been logged out!
          </div>
          ');
        redirect('auth');

    }
}