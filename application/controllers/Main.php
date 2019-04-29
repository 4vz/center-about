<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index()
	{		
		echo 'debug controller';
		$this->load->view($this->config->item('theme_name').'about');
	}
}
