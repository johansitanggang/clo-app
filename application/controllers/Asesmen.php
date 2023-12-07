<?php
defined("BASEPATH") or exit("No direct script access allowed");
require FCPATH.'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Asesmen extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Asesmen_model');
        // cek apakah ada session (ini menggunakan helper function)
        cekLogin();

    }

    public function index() {
        $data['judul'] = 'Assessment';
        $data['Course'] = $this->Asesmen_model->getAllCourse();
        $data['asesmen'] = $this->Asesmen_model->getAllAsesmen();

        $this->load->view('templates/header', $data);
        $this->load->view('Asesmen/index', $data);
        $this->load->view('templates/footer');
    }

    public function add() {
        if(isset($_POST['submit'])) {
            $this->Asesmen_model->addAsesmen();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Asesmen');
            // var_dump($_POST);
        }
    }

    public function edit() {
        if(isset($_POST['submit'])) {
            $this->Asesmen_model->editAsesmen();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Asesmen');
            // var_dump($_POST);
        }
    }

    // delete
    public function delete($id) {
        $this->Asesmen_model->deleteAsesmen($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Asesmen');

    }


    public function detail($kode_mata_kuliah) {
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

    public function addNilai() {
        if(isset($_POST['submit'])) {
            $this->Asesmen_model->addNilaiMahasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            $kode = $_POST['kode_mata_kuliah'];
            redirect('asesmen/detail/'.$kode);
            var_dump($_POST);
        }
    }

    public function editNilai() {
        if(isset($_POST['submit'])) {
            $this->Asesmen_model->editNilaiMahasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            $kode = $_POST['kode_mata_kuliah'];
            redirect('asesmen/detail/'.$kode);
            var_dump($_POST);
        }
    }

    public function deleteNilai($id, $kode) {
        $this->Asesmen_model->deleteNilaiMahasiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Asesmen/detail/'.$kode);
    }

    // download format excel
    public function spreadsheet_format_download() {
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Tes123 format import.xlsx"');
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $activeWorksheet->setCellValue('A1', 'No');
        $activeWorksheet->setCellValue('B1', 'NIM');
        $activeWorksheet->setCellValue('C1', 'Nama');
        $activeWorksheet->setCellValue('D1', 'Q1');
        $activeWorksheet->setCellValue('E1', 'Q2');
        $activeWorksheet->setCellValue('F1', 'P1');
        $activeWorksheet->setCellValue('G1', 'P2');
        $activeWorksheet->setCellValue('H1', 'P3');
        $activeWorksheet->setCellValue('I1', 'P4');
        $activeWorksheet->setCellValue('J1', 'P5');
        $activeWorksheet->setCellValue('K1', 'A1');
        $activeWorksheet->setCellValue('L1', 'A2');
        $activeWorksheet->setCellValue('M1', 'A3');
        $activeWorksheet->setCellValue('N1', 'A4');
        $activeWorksheet->setCellValue('O1', 'A5');
        $activeWorksheet->setCellValue('P1', 'MSE');
        $activeWorksheet->setCellValue('Q1', 'FSE');
        $activeWorksheet->setCellValue('R1', 'PP1');
        $activeWorksheet->setCellValue('S1', 'PP2');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }

    // import spreadsheet file
    public function spreadsheet_import($kode_mata_kuliah) {
        $upload_file = $_FILES['upload_file']['name'];
        $extension = pathinfo($upload_file, PATHINFO_EXTENSION);

        // CEK
        if($extension == "csv") {
            $reader = new PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else if($extension == "xls") {
            $reader = new PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $reader = new PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $reader->load($_FILES['upload_file']['tmp_name']);
        $sheetdata = $spreadsheet->getActiveSheet()->toArray();
        $sheetcount = count($sheetdata);
        // echo '<pre>';
        // print_r($sheetdata);

        if($sheetcount > 1) {
            $data = array();
            for($i = 1; $i < $sheetcount; $i++) {
                // echo $sheetdata[$i][1];
                $nim = $sheetdata[$i][1];
                $nama = $sheetdata[$i][2];
                $q1 = $sheetdata[$i][3];
                $q2 = $sheetdata[$i][4];
                $p1 = $sheetdata[$i][5];
                $p2 = $sheetdata[$i][6];
                $p3 = $sheetdata[$i][7];
                $p4 = $sheetdata[$i][8];
                $p5 = $sheetdata[$i][9];
                $a1 = $sheetdata[$i][10];
                $a2 = $sheetdata[$i][11];
                $a3 = $sheetdata[$i][12];
                $a4 = $sheetdata[$i][13];
                $a5 = $sheetdata[$i][14];
                $mse = $sheetdata[$i][15];
                $fse = $sheetdata[$i][16];
                $pp1 = $sheetdata[$i][17];
                $pp2 = $sheetdata[$i][18];

                // nilai akhir
                $nilai_akhir = (0.10 * ($q1 + $q2) / 2) + (0.30 * ($p1 + $p2 + $p3 + $p4 + $p5) / 5) + (0.20 * ($a1 + $a2 + $a3 + $a4 + $a5) / 5) + (0.30 * ($mse + $fse) / 2) + (0.10 * ($pp1 + $pp2) / 2);

                // nilai huruf
                if($nilai_akhir >= 86 && $nilai_akhir <= 100) {
                    $nilai_huruf = 'A';
                } elseif($nilai_akhir >= 80 && $nilai_akhir <= 85) {
                    $nilai_huruf = 'A-';
                } elseif($nilai_akhir >= 75 && $nilai_akhir <= 79) {
                    $nilai_huruf = 'B+';
                } elseif($nilai_akhir >= 70 && $nilai_akhir <= 74) {
                    $nilai_huruf = 'B';
                } elseif($nilai_akhir >= 65 && $nilai_akhir <= 69) {
                    $nilai_huruf = 'B-';
                } elseif($nilai_akhir >= 60 && $nilai_akhir <= 64) {
                    $nilai_huruf = 'C+';
                } elseif($nilai_akhir >= 55 && $nilai_akhir <= 59) {
                    $nilai_huruf = 'C';
                } elseif($nilai_akhir >= 50 && $nilai_akhir <= 54) {
                    $nilai_huruf = 'C-';
                } else if($nilai_akhir >= 45 && $nilai_akhir <= 49) {
                    $nilai_huruf = 'D+';
                } else if($nilai_akhir >= 40 && $nilai_akhir <= 44) {
                    $nilai_huruf = 'D';
                } else if($nilai_akhir >= 0 && $nilai_akhir <= 39) {
                    $nilai_huruf = 'E';
                }
                $data[] = array(
                    'kode_mata_kuliah' => $kode_mata_kuliah,
                    'nim' => $nim,
                    'nama_mahasiswa' => $nama,
                    'q1' => $q1,
                    'q2' => $q2,
                    'p1' => $p1,
                    'p2' => $p2,
                    'p3' => $p3,
                    'p4' => $p4,
                    'p5' => $p5,
                    'a1' => $a1,
                    'a2' => $a2,
                    'a3' => $a3,
                    'a4' => $a4,
                    'a5' => $a5,
                    'mse' => $mse,
                    'fse' => $fse,
                    'pp1' => $pp1,
                    'pp2' => $pp2,
                    'nilai_akhir' => $nilai_akhir,
                    'nilai_huruf' => $nilai_huruf
                );
            }
            $insert_data = $this->Asesmen_model->insert_batch($data);
        }

        if($insert_data) {
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('asesmen/detail/'.$kode_mata_kuliah);
        }
        // else {
        //     $this->session->set_flashdata('flash', 'Ditambahkan');
        //     redirect('asesmen/detail/' . $kode_mata_kuliah);
        // }


    }

}