<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		if ($this->input->post('send'))
		{
			$this->form_validation->set_rules('from','Ваше имя','required|trim');
			$this->form_validation->set_rules('email','Email','valid_email|required');
			$this->form_validation->set_rules('title','Тема','required|trim');
			$this->form_validation->set_rules('text','Текст','required|trim');
			$this->form_validation->set_rules('captcha','Защитный код','required|callback_captcha_check');
			if ($this->form_validation->run()==TRUE)
			{
				$from = htmlspecialchars($this->input->post('from'));
				$email = htmlspecialchars($this->input->post('email'));
				$title = htmlspecialchars($this->input->post('title'));
				$text = htmlspecialchars($this->input->post('text'));
				$date = date('Y-m-d H:i:s');
				$insert = array(
					'title' => $title,
					'text' => $text,
					'date' => $date,
					'email' => $email,
					'from' => $from,
				);
				$this->db->insert('feedback',$insert);
				
				$this->load->library('email');
				$this->email->initialize(array('mailtype'=>'html'));
				$this->email->from("admin@test.kkaetk.uz", $from);
				$this->email->to('jollibaev86@mail.ru');
				
				$this->email->subject('test.kkaetk.uz: '.$title);
				$this->email->message('Здравствуйте! Сегодня, '.$date.' поступило сообщение от '.$from.' следующего содержания:<br /><br /><strong>'.$text.'</strong>');
				
				$this->email->send();
				
				$this->session->set_flashdata('message','<div class="alert alert-success">Сообщение успешно отправлено!</div>');
				redirect('feedback','location');
			}
			else
			{
				$data['title'] = 'Обратная связь';
				$this->view_lib->render('feedback/feedback',$data);
			}
		}
		else
		{
			$data['title'] = 'Обратная связь';
			$this->view_lib->render('feedback/feedback',$data);
		}
	}
	
	public function captcha_check($word)
	{
		if ($word == trim(strtolower($this->session->flashdata('captcha')))) 
		{
			return true;
		}
		else 
		{
			$this->form_validation->set_message('captcha_check', 'Защитный код введен неправильно!');
			return false;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */