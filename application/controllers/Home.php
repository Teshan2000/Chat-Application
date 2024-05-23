<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
		$this->load->helper('url', 'form');
        $this->load->library('form_validation');
		$this->load->view('register');
	}

	public function home() 
	{
		$this->load->helper('url');
		$this->load->view('dashboard');
	}

	public function login() 
	{
		$this->load->helper('url');
		$this->load->view('login');
	}

	public function register() 
	{
		$this->load->helper('url');
		$this->load->view('register');
	}
}
