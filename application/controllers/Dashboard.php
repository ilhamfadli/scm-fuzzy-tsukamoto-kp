<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function point_of_sale()
	{
		return $this->load->view('pages/dashboard_point_of_sale');
	}
}
