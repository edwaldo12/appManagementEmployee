<?php

class Cuti extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "pegawai/cuti";
		$this->load->view('layouts/index', $data);
	}

	public function inputCuti()
	{
		$loginUser = $this->session->userdata('user')['id'];
		$data =
			[
				'id_pengguna' => $loginUser,
				'tanggal_mulai' => $this->input->post('awalcuti'),
				'tanggal_selesai' => $this->input->post('akhircuti'),
				'alasan' => $this->input->post('alasan')
			];
		$this->session->set_flashdata("cuti", $this->cuti_model->addCuti($data));
		redirect('Cuti/index');
	}

	public function riwayatCuti()
	{
		$data['_view'] = "pegawai/riwayat_cuti";
		$loginUser = $this->session->userdata('user')['id'];
		$data['riwayat_ct'] = $this->cuti_model->getRiwayatCuti($loginUser);
		$this->load->view('layouts/index', $data);
	}
}
