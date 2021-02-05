<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('welcome/welcome_message');
	}

	public function survey()
	{
		$this->load->view('welcome/survey');
	}
}
