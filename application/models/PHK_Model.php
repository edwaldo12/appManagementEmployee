<?php

class PHK_Model extends CI_Model
{
	public function getNamaPegawai()
	{
		$this->db->select('p.id,p.nama,p.role,phk.file');
		$this->db->from('pengguna as p');
		$this->db->join('phk as phk', 'p.id = phk.id_pengguna', "left");
		$this->db->group_by('p.nama');
		return $this->db->get('pengguna')->result_array();
	}

	public function getPHK($id)
	{
		$this->db->select("p.id,phk.file,phk.id_pengguna");
		$this->db->from('pengguna as p');
		$this->db->where(['p.id' => $id]);
		$this->db->join('phk as phk', 'p.id = phk.id_pengguna', 'left');
		return $this->db->get('pengguna')->row_array();
	}

	public function update($data)
	{
		return $this->db->insert('phk', $data);
	}

	public function getDaftarPHK($id)
	{
		$this->db->where(['id_pengguna' => $id]);
		return $this->db->get('phk')->row_array();
	}
}
