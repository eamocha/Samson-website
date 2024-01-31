<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	
	public function index()
	{
		$data['active'] = "blog";
		$data['title'] = "Samson and associates|Our Blog";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/files/blog');
		$this->load->view('default/partials/footer');
	}
	public function view(){
		$data['active'] = "blog";
		$data['title'] = "Samson and associates|Our Blog";
		$this->load->view('default/partials/header',$data);
		$this->load->view('default/files/blog-single');
		$this->load->view('default/partials/footer');
	}
}
