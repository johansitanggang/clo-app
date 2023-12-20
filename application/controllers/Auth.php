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
        // rules
        $this->form_validation->set_rules('nip_dosen', 'NIP', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    public function registration()
    {
        // rules
        $this->form_validation->set_rules('nama_dosen', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nip_dosen', 'NIP', 'required|trim|numeric|is_unique[tbl_user.nip_dosen]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', ['matches' => 'Password tidak sesuai']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/registration');
        } else {
            // ambil dulu data register nya
            $data = [
                "nama_dosen" => htmlspecialchars($this->input->post('nama_dosen', true)),
                "nip_dosen" => htmlspecialchars($this->input->post('nip_dosen', true)),
                "password" => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
            ];

            // insert data register ke tabel user
            $this->db->insert('tbl_user', $data);

            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">
            Registration is successful, please login!!
          </div>
          ');
            redirect('auth/registration');

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
            You have been logged out!
          </div>
          ');
        redirect('auth');

    }
}