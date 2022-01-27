<?php

class ket_phk extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "pegawai/ket_phk";
		$loginUser = $this->session->userdata('user')['id'];
		$data['keterangan_phk'] = $this->phk_model->getDaftarPHK($loginUser);
		$this->load->view('layouts/index', $data);
	}
}
