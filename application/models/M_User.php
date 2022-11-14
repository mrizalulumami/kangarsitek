<?php

class M_User extends CI_Model
{
   
    public function data_user()
    {
        $hasil = $this->db->query("Select * from users as a, users as b where a.id_petugas=b.id_petugas");
        return $hasil->result_array();
    }
    public function data_user_by_id($id) 
    {
        $hasil = $this->db->query("Select * from users as a, users as b where a.id_petugas=id");
        return $hasil->result_array();
    }
    public function data_user_by_username($username) 
    {
        $hasil = $this->db->query("Select * from users where username='$username'");
        return $hasil->row_array();
    }
    public function hitung_tot_user()
    {
        $hasil = $this->db->query("SELECT COUNT(*) AS total_user FROM users");
        return $hasil->row();
    }
    // public function hapus_pake($id)
    // {
        // $this->db->where('id_paket', $id);
        // $hapus = $this->db->delete('tb_paket');
        // if ($hapus) {
            // return "berhasil";
        // } else {
            // return "gagal";
        // }
    // }
    public function tambah_user($data){
        $this->db->set($data);
        $this->db->insert('users');
    }

    public function edit_user($data, $id){
        $this->db->where('id_petugas', $id);
        $this->db->update('users', $data);
    }
    public function drop_user()
    {
        $hasil = $this->db->query("Select * from users" );
        return $hasil->result_array();
    }
}