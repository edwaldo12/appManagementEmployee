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
        $this->load->view('layouts/index', $data);
    }
}
