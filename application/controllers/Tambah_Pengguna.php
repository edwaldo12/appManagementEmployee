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
		$idjab = $this->db->get('jabatan')->row_array();
		$data =
			[
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'password' => sha1($this->input->post('password')),
				'id_jabatan' => $idjab
			];
		$this->session->set_flashdata("tambahpengguna", $this->pengguna->addNewPengguna($data));
		redirect('Pegawai/index');
	}
}
