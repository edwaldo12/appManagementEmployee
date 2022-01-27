<?php

class Absensi extends CI_Controller
{
	public function index()
	{
		$loginIdUser = $this->session->userdata('user')['id'];
		$data['_view'] = "pegawai/absensi";
		$data['absen'] = $this->absen_model->getAbsensi($loginIdUser);
		$this->load->view('layouts/index', $data);
	}

	public function absenMasuk()
	{
		$loginIdUser = $this->session->userdata('user')['id'];
		$data = [
			'id_pengguna' => $loginIdUser,
			'keterangan_waktu' => date('Y-m-d'),
			'jam_datang' => date("H:i:s"),
		];
		$this->session->set_flashdata("tambahAbsensi", $this->absen_model->addAbsensi($data));
		redirect('absensi/index');
	}

	public function absen_pulang($id)
	{
		$data = [
			'id' => $id,
			'jam_pulang' => date("H:i:s")
		];
		$this->session->set_flashdata("updateAbsensi", $this->absen_model->update($data));
		redirect('absensi/index');
	}
}
