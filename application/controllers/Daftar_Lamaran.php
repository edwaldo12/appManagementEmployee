<?php

class Daftar_Lamaran extends CI_Controller{
    public function index()
    {
        $data['_view'] = "admin/daftar_lamaran";
        $data['lamaran'] = $this->rekrutmen->getAllRekrutmen();
        $this->load->view('layouts/index',$data);
    }

    public function terima($id)
    {
        $lamaran = $this->rekrutmen->terima($id);
        $this->session->set_flashdata('terima',true);
        redirect('daftar_lamaran');
    }

    public function tolak($id)
    {
        $lamaran = $this->rekrutmen->tolak($id);
        $this->session->set_flashdata('tolak',true);
        redirect('daftar_lamaran');
    }
}