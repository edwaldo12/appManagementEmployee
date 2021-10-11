<?php
class Pengguna_Model extends CI_Model
{

    public function getAllPengguna()
    {
        return $this->db->get("pengguna")->result_array();
    }

    public function getPengguna($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('pengguna')->row_array();
    }
    public function getPenggunaByUsername($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('pengguna')->row_array();
    }
}
