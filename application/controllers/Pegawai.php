<?php

class Pegawai extends CI_Controller
{
    public function index()
    {
        $data['pegawai'] = array_filter($this->pengguna->getAllPengguna(), function ($pengguna) {
            return $pengguna['role'] == "Pegawai";
        });
        $data['_view'] = "admin/pegawai";
        $this->load->view('layouts/index', $data);
    }
    public function editProfil($id)
    {
        $data['_view'] = "admin/edit_profile";
        $login = $this->session->userdata('user');
        $data['jabatan'] = $this->pengguna->getPenggunaJabatan($login['id_jabatan']);
        $data['pengguna'] = $this->pengguna->getPengguna($id);
        $this->load->view('layouts/index', $data);
    }
    public function updateProfile($id)
    {
        $data['pengguna'] = $this->pengguna->getPengguna($id);
        die;
        if (empty($this->input->post('password'))) {
            $data = [
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'password' =>  $data['pengguna']['password'],
                'username' => $this->input->post('username'),
            ];
        } else {
            $data = [
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'password' => $this->input->post('password'),
                'username' => $this->input->post('username'),
            ];
        }
        $this->session->set_flashdata("update_pengguna", $this->pengguna->updatePengguna($data));
        redirect('/');
    }
}
