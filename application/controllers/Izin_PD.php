<?php

class Izin_PD extends CI_Controller
{
	public function index()
	{
		$data['izin_undur'] = $this->pengunduran_diri_model->getAllPengunduranDiri();
		$data['_view'] = "admin/izin_pd";
		$this->load->view('layouts/index', $data);
	}

	public function upload_SPK($id)
	{
		$data['_view'] = "admin/upload_spk";
		$data['undur_diri'] = $this->pengunduran_diri_model->getPD($id);
		$this->load->view('layouts/index', $data);
	}

	public function add_surat_pk($id)
	{
		$config['upload_path']          = './suratpengalamankerja/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 1000;
		$config['max_width']            = 3200;
		$config['max_height']           = 3200;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload_spk')) {
			$data = [
				'id' => $id,
				"file" => $this->upload->data()['file_name']
			];
			$this->session->set_flashdata("uploadSPK", $this->pengunduran_diri_model->update($data));
			redirect('Izin_PD/index');
		} else {
			$this->session->set_flashdata("error_uploadSPK", $this->upload->display_errors());
			redirect('Izin_PD/index');
		}
	}
}
