<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	
	public function index()
	{
		if($this->input->post('q')){
			$data['hotels_tashkent'] = $this->db->like('name', htmlentities($this->input->post('q')))->get('hotels_tashkent')->result();
			$data['hotels_samarkand'] = $this->db->like('name', htmlentities($this->input->post('q')))->get('hotels_samarkand')->result();
			$data['museums'] = $this->db->like('title', htmlentities($this->input->post('q')))->get('museums_tashkent')->result();
			$data['universities'] = $this->db->like('otm_nomi', htmlentities($this->input->post('q')))->get('universities')->result();
		}
		$this->load->view('search.php', $data);
		
	}
}
