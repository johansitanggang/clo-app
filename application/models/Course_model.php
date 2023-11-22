<?php
class Course_model extends CI_Model
{

    // get ke tabel
    public function getAllCourse()
    {
        $query = $this->db->get('tbl_course');
        return $query->result_array();
    }

    // get course by id 
    public function getCourseByCode($kode)
    {
        return $this->db->get_where("tbl_course", ['kode_mata_kuliah' => $kode])->row_array();
    }

    // tambah
    public function addCourse()
    {
        $data = [
            "kode_mata_kuliah" => $this->input->post("kode_mata_kuliah", true),
            "nama_mata_kuliah" => $this->input->post("nama_mata_kuliah", true),
            "program_studi" => $this->input->post("program_studi", true),
            "sks" => $this->input->post("sks", true),
            "total_clo" => $this->input->post("total_clo", true),
        ];
        $this->db->insert('tbl_course', $data);
    }

    // edit
    public function editCourse()
    {
        $data = [
            "kode_mata_kuliah" => $this->input->post("kode_mata_kuliah", true),
            "nama_mata_kuliah" => $this->input->post("nama_mata_kuliah", true),
            "program_studi" => $this->input->post("program_studi", true),
            "sks" => $this->input->post("sks", true),
            "total_clo" => $this->input->post("total_clo", true),
        ];
        return $this->db->update('tbl_course', $data, ['id' => $this->input->post('id')]);
    }

    // delete 
    public function deleteCourse($id)
    {
        $this->db->delete('tbl_course', ['id' => $id]);
    }



    // get CLO By Code
    public function getCLOByCode($kode)
    {
        $this->db->order_by('kode_clo', 'ASC');
        return $this->db->get_where("tbl_course_learning_outcome", ['kode_mata_kuliah' => $kode])->result_array();
    }


    // add Course Learning Outcome
    public function addCourseLearningOutcome()
    {
        $data = [
            "kode_mata_kuliah" => $this->input->post("kode_mata_kuliah", true),
            "kode_clo" => $this->input->post("kode_clo", true),
            "course_learning_outcome" => $this->input->post("course_learning_outcome", true),
            "metode_asesmen" => $this->input->post("metode_asesmen", true)
        ];
        $this->db->insert('tbl_course_learning_outcome', $data);
    }

    // edit course learning outcome 
    public function editCourseLearningOutcome()
    {
        $data = [
            "kode_mata_kuliah" => $this->input->post("kode_mata_kuliah", true),
            "kode_clo" => $this->input->post("kode_clo", true),
            "course_learning_outcome" => $this->input->post("course_learning_outcome", true),
            "metode_asesmen" => $this->input->post("metode_asesmen", true)
        ];
        return $this->db->update('tbl_course_learning_outcome', $data, ['id' => $this->input->post('id')]);
    }

    // delete course learning outcome
    public function deleteCourseLearningOutcome($id)
    {
        $this->db->delete('tbl_course_learning_outcome', ['id' => $id]);
    }

}