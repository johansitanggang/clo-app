<?php

class MataKuliah_model extends CI_Model
{
    public function cariTemplateCapaianPembelajaran()
    {
        // $this->db->like('nama', 'tes1');
        // $this->db->or_like('nama', 'tes2');
        $kode_mata_kuliah = 'IF316A';
        return $this->db->get_where('data_capaian_pembelajaran', ['kode_mata_kuliah' => $kode_mata_kuliah])->result_array();
    }

    // submit 
    public function cariCapaianPembelajaran()
    {
        $kode_mata_kuliah = $this->input->post('kode_mata_kuliah');
        $this->db->order_by('no', 'ASC');
        return $this->db->get_where('data_capaian_pembelajaran', ['kode_mata_kuliah' => $kode_mata_kuliah])->result_array();
    }

    // tombol tambah
    public function tambahCapaianPembelajaran()
    {
        $data = [
            'no' => $this->input->post('tambahNoCP'),
            'kode_mata_kuliah' => $this->input->post('kode_mata_kuliah'),
            'capaian_pembelajaran' => $this->input->post('tambahCP')
        ];

        $this->db->insert('data_capaian_pembelajaran', $data);
        $this->db->order_by('no', 'ASC');
        return $this->db->get_where('data_capaian_pembelajaran', ['kode_mata_kuliah' => $data['kode_mata_kuliah']])->result_array();

    }

    // get pilih data dropdown
    public function getPilihData()
    {
        $query = $this->db->get('data_mata_kuliah');
        return $query->result_array();
    }

    // cari nama mata kuliah
    public function cariMataKuliah()
    {
        $kode_mata_kuliah = $this->input->post('kode_mata_kuliah');
        return $this->db->get_where('data_mata_kuliah', ['kode_mata_kuliah' => $kode_mata_kuliah])->result_array();

    }


    // EDIT capaian pembelajaran
    public function editCapaianPembelajaran()
    {
        $data = [
            'no' => $this->input->post('editNoCP', true),
            'capaian_pembelajaran' => $this->input->post('editCP', true),
            'kode_mata_kuliah' => $this->input->post('kode_mata_kuliah', true)
        ];

        $this->db->update('data_capaian_pembelajaran', $data, ['id_capaian_pembelajaran' => $this->input->post('id_capaian_pembelajaran')]);
        $this->db->order_by('no', 'ASC');
        return $this->db->get_where('data_capaian_pembelajaran', ['kode_mata_kuliah' => $data['kode_mata_kuliah']])->result_array();
    }

    // DELETE capaian pembelajaran
    public function hapusCapaianPembelajaran($id)
    {
        $this->db->delete('data_capaian_pembelajaran', ['id_capaian_pembelajaran' => $id]);
    }

}