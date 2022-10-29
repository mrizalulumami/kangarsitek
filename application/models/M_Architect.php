<?php

class M_Architect extends CI_Model
{
    public function architect_data()
    {
        $hasil = $this->db->query("Select * from tb_arsitek");
        return $hasil->result_array();
    }
    public function hitung_tot_arsitek()
    {
        $hasil = $this->db->query("SELECT COUNT(*) AS total_arsitek FROM tb_arsitek");
        return $hasil->row();
    }
    public function hapus_arsitek($id)
    {
        $this->db->where('id_arsitek', $id);
        $hapus = $this->db->delete('tb_arsitek');
        if ($hapus) {
            return "berhasil";
        } else {
            return "gagal";
        }
    }
    public function tambah_arsitek($data)
    {
        $this->db->set($data);
        $this->db->insert('tb_arsitek');
    }
}