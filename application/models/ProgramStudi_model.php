<?php
class ProgramStudi_model extends CI_Model
{


    // get ke tabel
    public function getAllProgramStudi()
    {
        $query = $this->db->get('tbl_program_studi');
        return $query->result_array();
    }

    // tambah
    public function addProgramStudi()
    {
        $data = [
            "jurusan" => $this->input->post("jurusan", true),
            "program_studi" => $this->input->post("program_studi", true)
        ];
        $this->db->insert('tbl_program_studi', $data);
    }

    // edit
    public function editProgramStudi()
    {
        $data = [
            'jurusan' => $this->input->post('jurusan', true),
            'program_studi' => $this->input->post('program_studi', true)
        ];
        return $this->db->update('tbl_program_studi', $data, ['id' => $this->input->post('id')]);
    }

    // delete 
    public function deleteProgramStudi($id)
    {
        $this->db->delete('tbl_program_studi', ['id' => $id]);
    }

}