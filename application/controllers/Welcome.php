<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['panoramas'] = $this->db->get('panoramas')->result();
		$this->load->view('homepage.php',$data);
		
	}
}
