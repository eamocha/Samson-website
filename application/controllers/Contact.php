<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{$data['active'] = "contact";
		$data['title'] = "Samson and associates|Contact us";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/files/contact');
		$this->load->view('default/partials/footer');
	}
}
