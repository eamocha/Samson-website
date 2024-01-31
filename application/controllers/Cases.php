<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cases extends CI_Controller {

	
	public function index()
	{
		$data['active'] = "cases";
		$data['title'] = "Samson and associates|Case studies";
		$this->load->view('default/partials/header',$data);
		
		$this->load->view('default/files/cases');
		$this->load->view('default/partials/footer');
	}
}
