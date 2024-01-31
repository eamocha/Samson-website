<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	
	public function index()
	{
		$data['active'] = "services"; 
		$data['title'] = "Samson and associates | Our services";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/files/services');
		$this->load->view('default/partials/footer');
	}
}
