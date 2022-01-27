<?php

class Welcome_page extends CI_Controller
{
	public function index()
	{
		$data['_view'] = "guest/welcome_page";
		$this->load->view($data);
	}
}
