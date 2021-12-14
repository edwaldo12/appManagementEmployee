<?php

class Reward extends CI_Controller
{
	public function index()
	{
		$data['pengguna'] = $this->pengguna->getAllPengguna();
		$data['_view'] = "admin/reward";
		$this->load->view('layouts/index', $data);
	}
}
