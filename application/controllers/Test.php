<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Test extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('data');
    }

    public function index()
    {
        $response = json_decode($this->data->watson("Suggest me a hotel in Samarkand city"));
        //var_dump(count($response->entities));die();
        if($response->intents[0]->intent == "hotel_suggestion"){
            if(is_array($response->entities) && count($response->entities)>0){
                switch(strtolower($response->entities[0]->value)){
                    case "tashkent":
                        
                        break;
                    case "samarkand":
                        break;
                }
            }
            
        }
    }
}