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
        $login = $this->session->userdata('user');
        $data['_view'] = "admin/edit_profile";
        $data['jabatan'] = $this->pengguna->getPenggunaJabatan($login['id_jabatan']);
        $data['pengguna'] = $this->pengguna->getPengguna($id);
        $this->load->view('layouts/index', $data);
    }
    public function updateProfile($id)
    {
        $data['pengguna'] = $this->pengguna->getPengguna($id);
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
                'password' => sha1($this->input->post('password')),
                'username' => $this->input->post('username'),
            ];
        }
        $this->session->set_flashdata("update_pengguna", $this->pengguna->updatePengguna($data));
        redirect('pegawai/index');
    }

    public function halamanEdit($id)
    {
        $data['_view'] = "admin/edit_pegawai";
        $data['pengguna'] = $this->pengguna->getPengguna($id);
        $data['jabatan'] = $this->jabatan->getAllJabatan();
        $this->load->view('layouts/index', $data);
    }
    public function delete($data)
    {
        $this->session->set_flashdata("hapus_pengguna", $this->pengguna->delete($data));
        redirect('pegawai/index');
    }

    public function update($id)
    {
        $password_lama = $this->pengguna->getPengguna($id);
        if (empty($this->input->post('password'))) {
            $data = [
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'password' => sha1($this->input->post('password')),
                'role' => $this->input->post('role'),
                'status' => $this->input->post('status'),
                'id_jabatan' => $this->input->post('id_jabatan'),
                'username' =>  $this->input->post('username')
            ];
        } else {
            $data = [
                'id' => $id,
                'nama' => $this->input->post('nama'),
                'password' => $password_lama['password'],
                'role' => $this->input->post('role'),
                'status' => $this->input->post('status'),
                'id_jabatan' => $this->input->post('id_jabatan'),
                'username' =>  $this->input->post('username')
            ];
        }

        $this->session->set_flashdata("update_pengguna", $this->pengguna->updatePengguna($data));
        redirect('pegawai/index');
    }
}
