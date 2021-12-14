<?php

class punishment extends CI_Controller
{
	public function index()
	{
		$data['nama'] =  array_filter($this->punishment->getNamaPeg(), function ($pegawai) {
			return $pegawai['role'] == "Pegawai";
		});
		$data['_view'] = "admin/punishment";
		$this->load->view('layouts/index', $data);
	}

	public function getNama()
	{
		$data['pegawai'] =  $this->pengguna->getAllPengguna();
		$this->load->view('layouts/index', $data);
	}

	public function upload_sp($id)
	{
		$data['_view'] = "admin/upload_suratperingatan";
		$data['surat_sp'] = $this->punishment->getPunishment($id);
		$this->load->view('layouts/index', $data);
	}

	public function add_sp($id)
	{
		$config['upload_path']          = './suratperingatan/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 1000;
		$config['max_width']            = 3200;
		$config['max_height']           = 3200;
		$config['encrypt_name']			= FALSE;
		$config['overwrite']			= FALSE;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload_sp')) {
			$data = [
				'id_pengguna' => $id,
				"punishment" => $this->upload->data()['file_name']
			];
			$this->session->set_flashdata("uploadsp", $this->punishment->update($data));
			redirect('punishment/index');
		} else {
			$this->session->set_flashdata("error_uploadsp", $this->upload->display_errors());
			redirect('punishment/index');
		}
	}

	public function riwayatPunishment($id)
	{
		$data['_view'] = "admin/riwayat_punishment";
		$data['riwayat_sp'] = $this->punishment->getRiwayatPunishment($id);
		$this->load->view('layouts/index', $data);
	}
}
