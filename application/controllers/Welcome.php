<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout("template1");
		$this->load->moldel('User_model_admin');
	}
	public function ver()
	
	{

		$this->layout->setMensaje("");
		$this->layout->view("ver");
	}
}