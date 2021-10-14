<?php

class Pegawai extends CI_Controller{
    public function index()
    {
        $data['pegawai'] = array_filter($this->pengguna->getAllPengguna(),function($pengguna){
            return $pengguna['role'] == "Pegawai";
        });
        $data['_view'] = "admin/pegawai";
        $this->load->view('layouts/index',$data);
    }
}