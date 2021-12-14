<?php
class Jabatan extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "jabatan/index";
		$data['jabatan'] = $this->jabatan->getAllJabatan();
		$this->load->view('layouts/index', $data);
	}

	public function halamanTambah()
	{
		$data['_view'] = "jabatan/create";
		$this->load->view('layouts/index', $data);
	}

	public function storeJabatan()
	{
		$data = [
			'jabatan' => $this->input->post('jabatan')
		];
		$this->session->set_flashdata("tambah_jabatan", $this->jabatan->addNewJabatan($data));
		redirect('jabatan/index');
	}

	public function halamanEdit($id)
	{
		$data['_view'] = "jabatan/edit";
		$data['jabatan'] = $this->jabatan->getJabatan($id);
		$this->load->view('layouts/index', $data);
	}
	public function delete($data)
	{
		$this->session->set_flashdata("hapus_jabatan", $this->jabatan->delete($data));
		redirect('jabatan/index');
	}

	public function update($id)
	{
		$data = [
			'id' => $id,
			'jabatan' => $this->input->post('jabatan')
		];
		$this->session->set_flashdata("update_jabatan", $this->jabatan->update($data));
		redirect('jabatan/index');
	}
}
