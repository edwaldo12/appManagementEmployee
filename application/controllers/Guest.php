<?php
class Guest extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "guest/welcome_page";
		$this->load->view('layouts/index', $data);
	}

	public function login()
	{
		$this->load->view('guest/login');
	}
	public function ajukan_lamaran()
	{
		$data['_view'] = 'guest/ajukan_lamaran';
		$data['jabatan'] = $this->jabatan->getAllJabatan();
		$this->load->view('layouts/index', $data);
	}
	public function upload_lamaran()
	{
		$config['upload_path']          = './cv/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['max_size']             = 1000;
		$config['max_width']            = 3200;
		$config['max_height']           = 3200;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('upload_cv')) {
			$data = [
				'nama' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'agama' => $this->input->post('agama'),
				'warga_negara' => $this->input->post('warga_negara'),
				'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
				'status_pernikahan' => $this->input->post('status_pernikahan'),
				'status_rekrutmen' => '0',
				'id_jabatan' => $this->input->post('id_jabatan'),
				'upload_cv' => $this->upload->data()['file_name']
			];

			$this->session->set_flashdata("upload_lamaran", $this->rekrutmen->saveRekrutmen($data));
			redirect('guest/ajukan_lamaran');
		} else {
			var_dump($this->upload->display_errors());
			die;
		}
	}
}
