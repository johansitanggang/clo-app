<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Asesmen_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    // get all asesmen ke tabel 
    public function getAllAsesmen() {
        $query = $this->db->get_where('tbl_asesmen', ['nip_dosen' => $this->session->userdata('nip_dosen')]);
        return $query->result_array();
    }

    // ambil data course code dan course name dari tbl_course
    public function getAllCourse() {
        $query = $this->db->get_where('tbl_course', ['nip_dosen' => $this->session->userdata('nip_dosen')]);
        return $query->result_array();
    }

    // add asesmen
    public function addAsesmen() {
        // get kode berdasarkan nama mata kuliah nya dari tbl_course
        $kode = $this->db->get_where("tbl_course", ['nama_mata_kuliah' => $this->input->post('nama_mata_kuliah')])->row_array();
        $kode_mata_kuliah = $kode['kode_mata_kuliah'];

        $data = [
            "kode_mata_kuliah" => $kode_mata_kuliah,
            "nama_mata_kuliah" => $this->input->post("nama_mata_kuliah", true),
            "nip_dosen" => $this->input->post("nip_dosen", true),
            "nama_dosen" => $this->input->post("nama_dosen", true),
            "tahun_ajaran" => $this->input->post("tahun_ajaran", true),
            "semester" => $this->input->post("semester", true),
            "kelas" => $this->input->post("kelas", true),
        ];
        $this->db->insert('tbl_asesmen', $data);
    }

    // edit asesmen
    public function editAsesmen() {

        // get kode berdasarkan nama mata kuliah nya dari tbl_course
        $kode = $this->db->get_where("tbl_course", ['nama_mata_kuliah' => $this->input->post('nama_mata_kuliah')])->row_array();
        $kode_mata_kuliah = $kode['kode_mata_kuliah'];

        $data = [
            "kode_mata_kuliah" => $kode_mata_kuliah,
            "nama_mata_kuliah" => $this->input->post("nama_mata_kuliah", true),
            "nip_dosen" => $this->input->post("nip_dosen", true),
            "nama_dosen" => $this->input->post("nama_dosen", true),
            "tahun_ajaran" => $this->input->post("tahun_ajaran", true),
            "semester" => $this->input->post("semester", true),
            "kelas" => $this->input->post("kelas", true),
        ];

        return $this->db->update('tbl_asesmen', $data, ['id' => $this->input->post('id')]);
    }

    // delete 
    public function deleteAsesmen($id) {
        $this->db->delete('tbl_asesmen', ['id' => $id]);
    }

    // get data asesmen by kode mata kuliah
    public function getAsesmenByCode($kode_mata_kuliah) {
        $this->db->select('*')->from('tbl_asesmen')->join('tbl_course', 'tbl_asesmen.kode_mata_kuliah = tbl_course.kode_mata_kuliah')->where('tbl_asesmen.kode_mata_kuliah', $kode_mata_kuliah);
        return $this->db->get()->row_array();
    }

    // get nilai mahasiswa by kode mata kuliah
    public function getNilaiMahasiswaByCode($kode_mata_kuliah) {
        return $this->db->get_where("tbl_nilai_mahasiswa", ['kode_mata_kuliah' => $kode_mata_kuliah])->result_array();
    }

    // add nilai mahasiswa
    public function addNilaiMahasiswa() {
        // perhitungan nilai akhir
        $q1 = $this->input->post("q1", true);
        $q2 = $this->input->post("q2", true);
        $p1 = $this->input->post("p1", true);
        $p2 = $this->input->post("p2", true);
        $p3 = $this->input->post("p3", true);
        $p4 = $this->input->post("p4", true);
        $p5 = $this->input->post("p5", true);
        $a1 = $this->input->post("a1", true);
        $a2 = $this->input->post("a2", true);
        $a3 = $this->input->post("a3", true);
        $a4 = $this->input->post("a4", true);
        $a5 = $this->input->post("a5", true);
        $mse = $this->input->post("mse", true);
        $fse = $this->input->post("fse", true);
        $pp1 = $this->input->post("pp1", true);
        $pp2 = $this->input->post("pp2", true);
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

        $data = [
            "kode_mata_kuliah" => $this->input->post("kode_mata_kuliah", true),
            "nim" => $this->input->post("nim", true),
            "nama_mahasiswa" => $this->input->post("nama_mahasiswa", true),
            "q1" => $this->input->post("q1", true),
            "q2" => $this->input->post("q2", true),
            "p1" => $this->input->post("p1", true),
            "p2" => $this->input->post("p2", true),
            "p3" => $this->input->post("p3", true),
            "p4" => $this->input->post("p4", true),
            "p5" => $this->input->post("p5", true),
            "a1" => $this->input->post("a1", true),
            "a2" => $this->input->post("a2", true),
            "a3" => $this->input->post("a3", true),
            "a4" => $this->input->post("a4", true),
            "a5" => $this->input->post("a5", true),
            "mse" => $this->input->post("mse", true),
            "fse" => $this->input->post("fse", true),
            "pp1" => $this->input->post("pp1", true),
            "pp2" => $this->input->post("pp2", true),
            "nilai_akhir" => $nilai_akhir,
            "nilai_huruf" => $nilai_huruf
        ];
        $this->db->insert('tbl_nilai_mahasiswa', $data);
    }

    public function editNilaiMahasiswa() {
        // perhitungan nilai akhir
        $q1 = $this->input->post("q1", true);
        $q2 = $this->input->post("q2", true);
        $p1 = $this->input->post("p1", true);
        $p2 = $this->input->post("p2", true);
        $p3 = $this->input->post("p3", true);
        $p4 = $this->input->post("p4", true);
        $p5 = $this->input->post("p5", true);
        $a1 = $this->input->post("a1", true);
        $a2 = $this->input->post("a2", true);
        $a3 = $this->input->post("a3", true);
        $a4 = $this->input->post("a4", true);
        $a5 = $this->input->post("a5", true);
        $mse = $this->input->post("mse", true);
        $fse = $this->input->post("fse", true);
        $pp1 = $this->input->post("pp1", true);
        $pp2 = $this->input->post("pp2", true);
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

        $data = [
            "kode_mata_kuliah" => $this->input->post("kode_mata_kuliah", true),
            "nim" => $this->input->post("nim", true),
            "nama_mahasiswa" => $this->input->post("nama_mahasiswa", true),
            "q1" => $this->input->post("q1", true),
            "q2" => $this->input->post("q2", true),
            "p1" => $this->input->post("p1", true),
            "p2" => $this->input->post("p2", true),
            "p3" => $this->input->post("p3", true),
            "p4" => $this->input->post("p4", true),
            "p5" => $this->input->post("p5", true),
            "a1" => $this->input->post("a1", true),
            "a2" => $this->input->post("a2", true),
            "a3" => $this->input->post("a3", true),
            "a4" => $this->input->post("a4", true),
            "a5" => $this->input->post("a5", true),
            "mse" => $this->input->post("mse", true),
            "fse" => $this->input->post("fse", true),
            "pp1" => $this->input->post("pp1", true),
            "pp2" => $this->input->post("pp2", true),
            "nilai_akhir" => $nilai_akhir,
            "nilai_huruf" => $nilai_huruf
        ];
        return $this->db->update('tbl_nilai_mahasiswa', $data, ['id' => $this->input->post('id')]);
    }


    // delete nilai mahasiswa
    public function deleteNilaiMahasiswa($id) {
        $this->db->delete('tbl_nilai_mahasiswa', ['id' => $id]);
    }

    // count excellent
    public function countExcellentStudentsByTask($kode_mata_kuliah) {
        $tasks = ['q1', 'q2', 'p1', 'p2', 'p3', 'p4', 'p5', 'a1', 'a2', 'a3', 'a4', 'a5', 'mse', 'fse', 'pp1', 'pp2'];
        $result = [];

        foreach($tasks as $task) {
            // hitung total mahasiswa yang berada dalam mata kuliah yang sama
            $total_students = $this->db
                ->select("COUNT(*) as total_students")
                ->from("tbl_nilai_mahasiswa")
                ->where("kode_mata_kuliah", $kode_mata_kuliah)
                ->get()
                ->row()->total_students;

            // hitung jumlah mahasiswa yg berada di kategori excellent
            $result[$task] = ($total_students > 0)
                ? number_format(($this->db
                    ->select("SUM(CASE WHEN $task >= 86 AND $task <= 100 THEN 1 ELSE 0 END) as $task")
                    ->from("tbl_nilai_mahasiswa")->where("kode_mata_kuliah", $kode_mata_kuliah)
                    ->get()
                    ->row()->$task / $total_students) * 100, 2) : 0;
        }
        return $result;
    }

    // count very good 
    public function countVeryGoodStudentsByTask($kode_mata_kuliah) {
        $tasks = ['q1', 'q2', 'p1', 'p2', 'p3', 'p4', 'p5', 'a1', 'a2', 'a3', 'a4', 'a5', 'mse', 'fse', 'pp1', 'pp2'];
        $result = [];

        foreach($tasks as $task) {
            // hitung total mahasiswa yang berada dalam mata kuliah yang sama
            $total_students = $this->db
                ->select("COUNT(*) as total_students")
                ->from("tbl_nilai_mahasiswa")
                ->where("kode_mata_kuliah", $kode_mata_kuliah)
                ->get()
                ->row()->total_students;

            // hitung jumlah mahasiswa yg berada di kategori very good
            $result[$task] = ($total_students > 0)
                ? number_format(($this->db
                    ->select("SUM(CASE WHEN $task >= 75 AND $task <= 85 THEN 1 ELSE 0 END) as $task")
                    ->from("tbl_nilai_mahasiswa")->where("kode_mata_kuliah", $kode_mata_kuliah)
                    ->get()
                    ->row()->$task / $total_students) * 100, 2) : 0;
        }
        return $result;
    }

    // count good
    public function countGoodStudentsByTask($kode_mata_kuliah) {
        $tasks = ['q1', 'q2', 'p1', 'p2', 'p3', 'p4', 'p5', 'a1', 'a2', 'a3', 'a4', 'a5', 'mse', 'fse', 'pp1', 'pp2'];
        $result = [];

        foreach($tasks as $task) {
            // hitung total mahasiswa yang berada dalam mata kuliah yang sama
            $total_students = $this->db
                ->select("COUNT(*) as total_students")
                ->from("tbl_nilai_mahasiswa")
                ->where("kode_mata_kuliah", $kode_mata_kuliah)
                ->get()
                ->row()->total_students;

            // hitung jumlah mahasiswa yg berada di kategori good
            $result[$task] = ($total_students > 0)
                ? number_format(($this->db
                    ->select("SUM(CASE WHEN $task >= 65 AND $task <= 74 THEN 1 ELSE 0 END) as $task")
                    ->from("tbl_nilai_mahasiswa")->where("kode_mata_kuliah", $kode_mata_kuliah)
                    ->get()
                    ->row()->$task / $total_students) * 100, 2) : 0;
        }
        return $result;
    }

    // count fair
    public function countFairStudentsByTask($kode_mata_kuliah) {
        $tasks = ['q1', 'q2', 'p1', 'p2', 'p3', 'p4', 'p5', 'a1', 'a2', 'a3', 'a4', 'a5', 'mse', 'fse', 'pp1', 'pp2'];
        $result = [];

        foreach($tasks as $task) {
            // hitung total mahasiswa yang berada dalam mata kuliah yang sama
            $total_students = $this->db
                ->select("COUNT(*) as total_students")
                ->from("tbl_nilai_mahasiswa")
                ->where("kode_mata_kuliah", $kode_mata_kuliah)
                ->get()
                ->row()->total_students;

            // hitung jumlah mahasiswa yg berada di kategori fair
            $result[$task] = ($total_students > 0)
                ? number_format(($this->db
                    ->select("SUM(CASE WHEN $task >= 55 AND $task <= 64 THEN 1 ELSE 0 END) as $task")
                    ->from("tbl_nilai_mahasiswa")->where("kode_mata_kuliah", $kode_mata_kuliah)
                    ->get()
                    ->row()->$task / $total_students) * 100, 2) : 0;
        }
        return $result;
    }


    // count poor
    public function countPoorStudentsByTask($kode_mata_kuliah) {
        $tasks = ['q1', 'q2', 'p1', 'p2', 'p3', 'p4', 'p5', 'a1', 'a2', 'a3', 'a4', 'a5', 'mse', 'fse', 'pp1', 'pp2'];
        $result = [];

        foreach($tasks as $task) {
            // hitung total mahasiswa yang berada dalam mata kuliah yang sama
            $total_students = $this->db
                ->select("COUNT(*) as total_students")
                ->from("tbl_nilai_mahasiswa")
                ->where("kode_mata_kuliah", $kode_mata_kuliah)
                ->get()
                ->row()->total_students;

            // hitung jumlah mahasiswa yg berada di kategori poor
            $result[$task] = ($total_students > 0)
                ? number_format(($this->db
                    ->select("SUM(CASE WHEN $task >= 0 AND $task <= 54 THEN 1 ELSE 0 END) as $task")
                    ->from("tbl_nilai_mahasiswa")->where("kode_mata_kuliah", $kode_mata_kuliah)
                    ->get()
                    ->row()->$task / $total_students) * 100, 2) : 0;
        }
        return $result;
    }

    // insert data spreadsheet
    public function insert_batch($data) {
        $this->db->insert_batch("tbl_nilai_mahasiswa", $data);
        return $this->db->affected_rows();
    }
}