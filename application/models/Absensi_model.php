<?php

class Absensi_Model extends CI_Model
{
	public function getNP()
	{
		$this->db->select('p.id,p.nama,p.role,a.keterangan_waktu,a.jam_datang,a.jam_pulang');
		$this->db->from('pengguna as p');
		$this->db->join('absen as a', 'p.id = a.id_pengguna', "left");
		$this->db->group_by('p.nama');
		return $this->db->get('pengguna')->result_array();
	}

	public function getAbsensi($id)
	{
		$this->db->select("p.id,p.nama,p.role,a.keterangan_waktu,a.jam_datang,a.jam_pulang");
		$this->db->from('pengguna as p');
		$this->db->where(['p.id' => $id]);
		$this->db->join('absen as a', 'p.id = a.id_pengguna', 'left');
		return $this->db->get('pengguna')->row_array();
	}

	public function addAbsensi($data)
	{
		return $this->db->insert('absen', $data);
	}
}
