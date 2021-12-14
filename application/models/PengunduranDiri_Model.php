<?php

class PengunduranDiri_Model extends CI_Model
{
	public function getAllPengunduranDiri()
	{
		$this->db->select("
		pengguna.nama, 
		pengunduran_diri.id, 
		pengunduran_diri.upload_surat_pd, 
		pengunduran_diri.file");
		$this->db->from("pengunduran_diri");
		$this->db->join("pengguna", "pengunduran_diri.id_pengguna = pengguna.id");
		return $this->db->get()->result_array();
	}

	public function tambahPengunduranDiri($data)
	{
		return $this->db->insert('pengunduran_diri', $data);
	}

	public function getPD($izin_undur)
	{
		$this->db->where(['id' => $izin_undur]);
		return $this->db->get('pengunduran_diri')->row_array();
	}

	public function getFileKaryawan($id)
	{
		$this->db->where(['id_pengguna' => $id]);
		return $this->db->get('pengunduran_diri')->row_array();
	}

	public function update($data)
	{
		extract($data);
		$this->db->where('id', $id);
		$this->db->update('pengunduran_diri', array('file' => $file));
	}
}
