<?php

class Cuti_Model extends CI_Model
{
	public function getAllCuti()
	{
		$this->db->select("
		pengguna.nama, 
		cuti.id, 
		cuti.tanggal_mulai, 
		cuti.tanggal_selesai,
		cuti.alasan,
		cuti.file");
		$this->db->from("cuti");
		$this->db->join("pengguna", "cuti.id_pengguna = pengguna.id");
		return $this->db->get()->result_array();
	}

	public function addCuti($data)
	{
		return $this->db->insert('cuti', $data);
	}

	public function getCutiHari($id_pengguna)
	{
		$this->db->select("SUM(DATEDIFF(
		cuti.tanggal_selesai,
		cuti.tanggal_mulai
		)) AS lama_cuti");
		$this->db->from("cuti");
		$this->db->where('id_pengguna', $id_pengguna);
		return $this->db->get()->row('lama_cuti');
	}

	public function getCuti($izin_cuti)
	{
		$this->db->where(['id' => $izin_cuti]);
		return $this->db->get('cuti')->row_array();
	}

	public function update($data)
	{
		extract($data);
		$this->db->where('id', $id);
		$this->db->update('cuti', array('file' => $file));
	}

	public function getRiwayatCuti($id)
	{
		$this->db->where(['id_pengguna' => $id]);
		return $this->db->get('cuti')->result_array();
	}
}
