<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$data = array();
		if($this->input->post('q')){
			$data['hotels_tashkent'] = $this->db->like('name', $this->input->post('q'))->get('hotel_tashkent')->result();
			$data['hotels_samarkand'] = $this->db->like('name', $this->input->post('q'))->get('hotel_samarkand')->result();
			$data['museums'] = $this->db->like('title', $this->input->post('q'))->get('museums_tashkent')->result();
			$data['universities'] = $this->db->select('otm_nomi')->like('otm_nomi', $this->input->post('q'))->group_by('otm_nomi')->get('universities')->result();
		}
		$this->load->view('search.php', $data);
		
	}
}
