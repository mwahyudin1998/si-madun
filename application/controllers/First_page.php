<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_page extends CI_Controller {

	public function index()
	{
		$this->load->view('first_page');
	}
}
