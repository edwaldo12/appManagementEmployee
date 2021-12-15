<?php

class Tambah_Pengguna extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "admin/tambah_pengguna";
		$data['getdata'] = $this->pengguna->getData();
		$this->load->view('layouts/index', $data);
	}

	public function tambahpengguna()
	{
		$data =
			[
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'id_jabatan' => $this->input->post('id_jabatan'),
				'status' => '1',
				'role' => "Pegawai"
			];
		$this->session->set_flashdata("tambahpengguna", $this->pengguna->addNewPengguna($data));
		redirect('Pegawai/index');
	}
}
