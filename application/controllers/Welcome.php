<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Dashboard');
		$this->load->view('layouts/footer');
	}

	public function login ()
	{
		$this->load->view("admin/login");
	}
}
