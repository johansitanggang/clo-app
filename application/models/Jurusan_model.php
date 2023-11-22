<?php
class Jurusan_model extends CI_Model
{

    // get ke tabel
    public function getAllJurusan()
    {
        $query = $this->db->get('tbl_jurusan');
        return $query->result_array();
    }

    // tambah
    public function addJurusan()
    {
        $data = [
            "jurusan" => $this->input->post("jurusan", true),
            "jumlah_program_studi" => $this->input->post("jumlah_program_studi", true)
        ];
        $this->db->insert('tbl_jurusan', $data);
    }

    // edit
    public function editJurusan()
    {
        $data = [
            'jurusan' => $this->input->post('jurusan', true),
            'jumlah_program_studi' => $this->input->post('jumlah_program_studi', true)
        ];
        return $this->db->update('tbl_jurusan', $data, ['id' => $this->input->post('id')]);
    }

    // delete 
    public function deleteJurusan($id)
    {
        $this->db->delete('tbl_jurusan', ['id' => $id]);
    }
}

