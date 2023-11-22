<?php
class MetodeAsesmen_model extends CI_Model
{

    // get all metode asesmen ke tabel 
    public function getAllMetodeAsesmen()
    {
        return $this->db->order_by('metode_asesmen', 'asc')->get('tbl_metode_asesmen')->result_array();
    }

    // add asesmen
    public function addMetodeAsesmen()
    {
        $data = [
            "metode_asesmen" => $this->input->post("metode_asesmen", true),
        ];
        $this->db->insert('tbl_metode_asesmen', $data);
    }

    // edit asesmen
    public function editMetodeAsesmen()
    {
        $data = [
            "metode_asesmen" => $this->input->post("metode_asesmen", true)
        ];
        return $this->db->update('tbl_metode_asesmen', $data, ['id' => $this->input->post('id')]);
    }

    // delete 
    public function deleteMetodeAsesmen($id)
    {
        $this->db->delete('tbl_metode_asesmen', ['id' => $id]);
    }

}

?>