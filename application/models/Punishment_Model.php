<?php

class Punishment_Model extends CI_Model
{
	public function getNamaPeg()
	{
		$this->db->select('p.id,p.nama,p.role,punishment.id_pengguna,punishment.punishment_file');
		$this->db->from('pengguna as p');
		$this->db->join('punishment as punishment', 'p.id = punishment.id_pengguna', "left");
		$this->db->group_by('p.nama');
		return $this->db->get('pengguna')->result_array();
	}

	public function getPunishment($id)
	{
		$this->db->select("p.id,punishment.punishment_file,punishment.id_pengguna");
		$this->db->from('pengguna as p');
		$this->db->where(['p.id' => $id]);
		$this->db->join('punishment as punishment', 'p.id = punishment.id_pengguna', 'left');
		return $this->db->get('pengguna')->row_array();
	}

	public function update($data)
	{
		return $this->db->insert('punishment', $data);
	}

	public function getRiwayatPunishment($id)
	{
		$this->db->where(['id_pengguna' => $id]);
		return $this->db->get('punishment')->result_array();
	}
}
