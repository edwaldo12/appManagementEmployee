<?php

class PHK extends CI_Controller
{
	public function index()
	{
		$data['namapegawai'] =  array_filter($this->phk->getNamaPegawai(), function ($pegawai) {
			return $pegawai['role'] == "Pegawai";
		});
		$data['_view'] = "admin/phk";
		$this->load->view('layouts/index', $data);
	}

	public function getNama()
	{
		$data['pegawai'] =  $this->pengguna->getAllPengguna();
		$this->load->view('layouts/index', $data);
	}

	public function upload_suratket($id)
	{
		$data['_view'] = "admin/upload_suratphk";
		$data['ket_phk'] = $this->phk->getPHK($id);
		$this->load->view('layouts/index', $data);
	}

	public function add_surat_ket($id)
	{
		$config['upload_path']          = './surat_ket_phk/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 1000;
		$config['max_width']            = 3200;
		$config['max_height']           = 3200;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload_sk')) {
			$data = [
				'id_pengguna' => $id,
				"file" => $this->upload->data()['file_name']
			];
			$this->session->set_flashdata("uploadsk", $this->phk->update($data));
			redirect('PHK/index');
		} else {
			$this->session->set_flashdata("error_sk", $this->upload->display_errors());
			redirect('PHK/index');
		}
	}
}
