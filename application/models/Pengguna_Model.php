<?php
class Pengguna_Model extends CI_Model
{

    public function getAllPengguna()
    {
        $this->db->select("p.id,p.username,r.tanggal_lahir,p.role,p.status,j.jabatan,r.telepon,r.alamat,p.nama,r.jenis_kelamin,r.agama,r.warga_negara,r.pendidikan_terakhir,r.status_pernikahan");
        $this->db->join("jabatan as j", "j.id = p.id_jabatan");
        $this->db->join("rekrutmen as r", "r.id_pengguna = p.id", "left");
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
        return $this->db->insert('pengguna', $pengguna);
    }
    public function updatePengguna($data)
    {
        extract($data);
        $this->db->where('id', $id);
        $this->db->update(
            'pengguna',
            array(
                'nama' => $nama,
                'password' => $password,
                'status' => $status,
                'id_jabatan' => $id_jabatan,
                'username' => $username
            )
        );
    }

    public function delete($data)
    {
        return $this->db->delete('pengguna', array('id' => $data));
    }

    public function getPenggunaJabatan($id)
    {
        $this->db->select('jabatan');
        $this->db->from('jabatan');
        $this->db->join('pengguna', 'jabatan.id = pengguna.id_jabatan');
        $this->db->where('jabatan.id ', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }
}
