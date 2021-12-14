<?php

class Absensi extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "pegawai/absensi";
		// $data['absen'] = $this->absen->Absensi();
		$this->load->view('layouts/index', $data);
	}
}
