<?php
class Pengguna_Model extends CI_Model
{

    public function getAllPengguna()
    {
        $this->db->select("p.username,r.tanggal_lahir,p.role,p.status,j.jabatan,r.telepon,r.alamat,p.nama,r.jenis_kelamin,r.agama,r.warga_negara,r.pendidikan_terakhir,r.status_pernikahan");
        $this->db->join("jabatan as j","j.id = p.id_jabatan");
        $this->db->join("rekrutmen as r","r.id_pengguna = p.id","left");
        return $this->db->get("pengguna as p")->result_array();
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
    public function savePengguna($pengguna)
    {
        return $this->db->insert('pengguna',$pengguna);
    }
}
