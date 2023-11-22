<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Nilai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('nilai_model');
    }

    // tes import excel
    public function import()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xls|xlsx';
        $config['max_size'] = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('file')) {
            $file_data = $this->upload->data();
            $file_path = $file_data['full_path'];

            // Proses import data dari file
            $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file_path);
            $data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            // Simpan data ke database
            $this->nilai_model->import_data($data);

            // Hapus file yang diupload (opsional)
            unlink($file_path);

            redirect('nilai');
        } else {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('error_view', $error);
        }
    }
}
