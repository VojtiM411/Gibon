<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('skoly');
	}
	public function skoly()
	{
        $this->load->model("Main");
        $dataSkoly["getSkoly"] = $this->MainModel->getSkoly();
        $this->load->view("header");
        $this->load->view("skola", $dataSkoly);
	}
}