<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->database();
	}

	function index()
	{
		$this->load->helper('captcha');

		$chars = "ACDHKNPUX3456789"; /* набор символов */
		$num_chars = strlen($chars);
		$count = 5;
		$text = '';
		for ($i=0; $i<$count; $i++)
		{
			$text .= $chars[rand(0, $num_chars-1)];
		}

		$prefs = array(				// настройки капчи, все элементы являются необязательными
			'word'	 => $text,
			'img_width' => 128,			// ширина изображения (int)
			'img_height' => 32,			// высота изображения (int)
			'random_str_length' => 5,		// длина случайной строки (int)
			'border' => FALSE,			// добавлять рамку (bool)
            'font_size' => 14,
			'font_path' => './images/fonts/AhnbergHand.ttf'	// путь к файлу шрифта
			);

		$word = create_captcha_stream($prefs);
		$this->session->set_flashdata('captcha', $word);
	}
}