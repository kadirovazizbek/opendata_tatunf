<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Temperature extends CI_Controller {

	public function index() {
		$data['weather'] = json_decode(file_get_contents('http://www.meteo.uz/api/v2/current-weather_ru.json'));
		$this->load->view('current_weather',$data);
		
	}

}