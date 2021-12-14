<?php

class Izin_Cuti extends CI_Controller
{
	public function index()
	{
		$data['izin_cuti'] = $this->cuti->getAllCuti();
		$data['_view'] = "admin/Izin_Cuti";
		$this->load->view('layouts/index', $data);
	}

	public function upload_SKC($id)
	{
		$data['_view'] = "admin/upload_suratcuti";
		$data['izin_cuti'] = $this->cuti->getCuti($id);
		$this->load->view('layouts/index', $data);
	}

	public function add_surat_cuti($id)
	{
		$config['upload_path']          = './surat_izin_cuti/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 1000;
		$config['max_width']            = 3200;
		$config['max_height']           = 3200;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload_skc')) {
			$data = [
				'id' => $id,
				"file" => $this->upload->data()['file_name']
			];
			$this->session->set_flashdata("upload_skc", $this->cuti->update($data));
			redirect('Izin_Cuti/index');
		} else {
			$this->session->set_flashdata("error_uploadskc", $this->upload->display_errors());
			redirect('Izin_Cuti/index');
		}
	}
}
