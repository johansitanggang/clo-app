<?php
// Nilai_model.php (Model)
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{

    public function import_data($data)
    {
        foreach ($data as $row) {
            $nilai_data = array(
                'kode_mata_kuliah' => $row['A'],
                'nim' => $row['B'],
                'nama' => $row['C'],
                'q1' => $row['D'],
                'q2' => $row['E'],
                'p1' => $row['F'],
                'p2' => $row['G'],
                'p3' => $row['H'],
                'p4' => $row['I'],
                'p5' => $row['J'],
                'a1' => $row['K'],
                'a2' => $row['L'],
                'a3' => $row['M'],
                'a4' => $row['N'],
                'a5' => $row['O'],
                'mse' => $row['P'],
                'fse' => $row['Q'],
                'pp1' => $row['R'],
                'pp2' => $row['S'],
                'nilai_akhir' => $row['T'],
                'nilai_huruf' => $row['U'],
            );

            // Simpan data ke database
            $this->db->insert('tbl_nilai_mahasiswa', $nilai_data);
        }
    }
}
