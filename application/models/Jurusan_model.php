<?php
class Jurusan_model extends CI_Model
{

    // get ke tabel
    public function getAllJurusan()
    {
        // Mendapatkan data jurusan beserta jumlah program studi
        $this->db->select('tbl_jurusan.id, tbl_jurusan.jurusan, COUNT(tbl_program_studi.program_studi) as jumlah_program_studi');
        $this->db->from('tbl_jurusan');
        $this->db->join('tbl_program_studi', 'tbl_jurusan.jurusan = tbl_program_studi.jurusan', 'left');
        $this->db->group_by('tbl_jurusan.id, tbl_jurusan.jurusan');

        $query = $this->db->get();
        return $query->result_array();
    }

    // tambah
    public function addJurusan()
    {
        $data = [
            "jurusan" => $this->input->post("jurusan", true),
        ];
        $this->db->insert('tbl_jurusan', $data);
    }

    // edit
    public function editJurusan()
    {
        $data = [
            'jurusan' => $this->input->post('jurusan', true),
        ];
        return $this->db->update('tbl_jurusan', $data, ['id' => $this->input->post('id')]);
    }

    // delete 
    public function deleteJurusan($id)
    {
        $this->db->delete('tbl_jurusan', ['id' => $id]);
    }
}

