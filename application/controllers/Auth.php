<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		redirect(base_url('auth/signin'));
	}

	public function signin()
	{
		$this->load->view('pages/signin');
	}

    public function signout()
    {

    }
}
