<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maps extends CI_Controller {

	public function index()
	{
		$this->load->view('maps/header');
		$this->load->view('maps/index');
		$this->load->view('maps/footer');
	}
}
