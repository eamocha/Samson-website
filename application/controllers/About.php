<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{
		$data['active'] = "about";
		$data['title'] = "Samson and associates|About us";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/files/about');
		$this->load->view('default/partials/footer');
	}
}
