<?php

class Cuti extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "pegawai/cuti";
		$loginUser = $this->session->userdata('user')['id'];
		$data['hari_cuti'] = $this->cuti_model->getCutiHari($loginUser);
		$this->load->view('layouts/index', $data);
	}

	public function inputCuti()
	{
		$loginUser = $this->session->userdata('user')['id'];
		$hariCuti = $this->cuti_model->getCutiHari($loginUser);
		$tanggalInput = date_diff(new DateTime($this->input->post('akhircuti')), new DateTime(
			$this->input->post('awalcuti')
		));
		if ($tanggalInput->d > (12 - $hariCuti)) {
			$this->session->set_flashdata("cuti_tidak_dapat", "Maaf cuti tidak dapat diajukan!");
			redirect('Cuti/index');
		}
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
