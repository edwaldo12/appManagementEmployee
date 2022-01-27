<?php

class punishment_pegawai extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "pegawai/punishment_pegawai";
		$loginUser = $this->session->userdata('user')['id'];
		$data['punish_peg'] = $this->punishment_model->getRiwayatPunishment($loginUser);
		$this->load->view('layouts/index', $data);
	}
}
