<?php

class Daftar_Absensi extends CI_Controller
{
	public function index()
	{
		$data['daftarnama'] =  array_filter($this->absen_model->getNP($this->input->get('start_date'), $this->input->get('end_date')), function ($pegawai) {
			return $pegawai['role'] == "Pegawai";
		});
		$data['_view'] = "admin/daftar_absensi";
		$this->load->view('layouts/index', $data);
	}

	public function getNama()
	{
		$data['pegawai'] =  $this->pengguna->getAllPengguna();
		$this->load->view('layouts/index', $data);
	}
}
