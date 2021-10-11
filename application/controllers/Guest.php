<?php
class Guest extends CI_Controller
{
    public function index()
    {
        $data['_view'] = "guest/welcome_page";
        return $this->load->view('layouts/index', $data);
    }
}
