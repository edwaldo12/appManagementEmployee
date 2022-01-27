<?php

class PengunduranDiri extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "pegawai/pengundurandiri";
		$loginUser = $this->session->userdata('user')['id'];
		$data['pengunduran_diri'] = $this->pengunduran_diri_model->getFileKaryawan($loginUser);
		$this->load->view('layouts/index', $data);
	}

	public function ajukan()
	{
		$loginUser = $this->session->userdata('user')['id'];

		$config['upload_path']          = './surat_pd/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 1000;
		$config['max_width']            = 3200;
		$config['max_height']           = 3200;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload_pd')) {
			$data = [
				"id_pengguna" => $loginUser,
				"upload_surat_pd" => $this->upload->data()['file_name']
			];
			$this->session->set_flashdata("izin", $this->pengunduran_diri_model->tambahPengunduranDiri($data));
			redirect('PengunduranDiri/index');
		} else {
			$this->session->set_flashdata("error_izin", $this->upload->display_errors());
			redirect('PengunduranDiri/index');
		}
	}
}
