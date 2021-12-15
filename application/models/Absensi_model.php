<?php

class Absensi_Model extends CI_Model
{
	public function getNP($start_date = null, $end_date = null)
	{
		$this->db->select('a.id,p.nama,p.role,a.keterangan_waktu,a.jam_datang,a.jam_pulang');
		$this->db->from('pengguna as p');
		$this->db->join('absen as a', 'p.id = a.id_pengguna', "right");
		if ($start_date != null) {
			$this->db->where('a.keterangan_waktu >=', $start_date);
			$this->db->where('a.keterangan_waktu <=', $end_date);
		}
		$this->db->group_by('a.id');
		return $this->db->get('pengguna')->result_array();
	}

	public function getAbsensi($id)
	{
		$this->db->select("a.id,p.nama,p.role,a.keterangan_waktu,a.jam_datang,a.jam_pulang");
		$this->db->from('pengguna as p');
		$this->db->where(['p.id' => $id]);
		$this->db->join('absen as a', 'p.id = a.id_pengguna', 'right');
		$this->db->group_by('jam_datang');
		return $this->db->get('pengguna')->result_array();
	}

	public function getAbsensiOnePerson($id)
	{
		$this->db->select("p.id,p.nama,p.role,a.keterangan_waktu,a.jam_datang,a.jam_pulang");
		$this->db->from('pengguna as p');
		$this->db->where(['p.id' => $id]);
		$this->db->join('absen as a', 'p.id = a.id_pengguna', 'right');
		$this->db->group_by('jam_datang');
		return $this->db->get('pengguna')->row_array();
	}

	public function addAbsensi($data)
	{
		return $this->db->insert('absen', $data);
	}

	public function update($data)
	{
		extract($data);
		$this->db->where('id', $id);
		return $this->db->update('absen', array('jam_pulang' => $jam_pulang));
	}
}
