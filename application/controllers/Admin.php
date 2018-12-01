<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function panoramas()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_table('panoramas');
			$crud->set_subject('Panoramas');
            $crud->set_field_upload('path','assets/panoramas');
            $crud->callback_after_upload(array($this,'thumb_create'));

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
    
    function thumb_create($uploader_response,$field_info, $files_to_upload)
    {
        $this->load->library('image_moo');
         
        //Is only one file uploaded so it ok to use it with $uploader_response[0].
        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name;
        $thumbnail_name = str_replace(".jpg","_thumbnail.jpg",$file_uploaded);
        $preview_name = str_replace(".jpg","_preview.jpg",$file_uploaded);
        $this->image_moo->load($file_uploaded)->resize(124,80)->save($thumbnail_name,true);
        $this->image_moo->load($file_uploaded)->resize(512,256)->save($preview_name,true);
        
        return true;
    }
}
