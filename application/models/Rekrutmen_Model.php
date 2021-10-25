<?php
class Rekrutmen_Model extends CI_Model
{
    public function getAllRekrutmen()
    {
        return $this->db->get('rekrutmen')->result_array();
    }
    public function saveRekrutmen($data)
    {
        return $this->db->insert('rekrutmen', $data);
    }
    public function terima($id)
    {
        $this->db->where(['id' => $id]);
        $lamaran = $this->db->get('rekrutmen')->row_array();
        $pengguna = [
            'nama' => $lamaran['nama'],
            'username' => strtolower(str_replace(" ", "", $lamaran['nama'])),
            'password' => sha1(str_replace("-", "", $lamaran['tanggal_lahir'])),
            'role' => "Pegawai",
            "id_jabatan" => $lamaran['id_jabatan'],
            'status' => "1"
        ];
        $this->db->insert('pengguna', $pengguna);
        $id_pengguna = $this->db->insert_id();

        $this->db->where(['id' => $id]);
        $this->db->set(['status_rekrutmen' => "1"]);
        $this->db->set(['id_pengguna' => $id_pengguna]);
        return $this->db->update('rekrutmen');
    }
    public function tolak($id)
    {
        $this->db->where(['id' => $id]);
        $this->db->set(['status_rekrutmen' => "2"]);
        return $this->db->update('rekrutmen');
    }
}
