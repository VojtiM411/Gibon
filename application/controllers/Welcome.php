<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view("header");
		$this->load->view("mapa");
	}
	public function skoly()
	{
		$this->load->view("header");
		$dataSkoly["getSkoly"] = $this->MainModel->getSkoly();
        $this->load->view("skoly", $dataSkoly);
	}
	public function login()
	{
        $this->load->view("header");
		$this->load->view('auth/login');
	}
}
