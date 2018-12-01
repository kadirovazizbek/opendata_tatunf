<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single extends CI_Controller {

	
	public function index()
	{
		
		$this->load->view('single.php');
		
	}
}
