<?php
class Login extends CI_Controller
{
	public function index()
	{
		return $this->load->view('guest/login');
	}

	public function loginPengguna()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->pengguna->getPenggunaByUsername($username);
		if ($user['password'] == sha1($password)) {
			if ($user['status'] == '1') {
				$this->session->set_userdata("user", $user);
				redirect('/dashboard');
			} else {
				$this->session->set_flashdata("gagalLogin", "Maaf anda telah di non-aktifkan!");
				redirect('/login');
			}
		} else {
			redirect('/guest');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
