<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bot extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->library('bot_lib');
		$this->load->library('data_lib');
	}

	public function updates(){
		
        if(!isset($GLOBALS['HTTP_RAW_POST_DATA'])){
            //In PHP7, we should use php://input instead of HTTP_RAW_POST_DATA
            $HTTP_RAW_POST_DATA = file_get_contents("php://input");
        } else {
            $HTTP_RAW_POST_DATA = $GLOBALS['HTTP_RAW_POST_DATA'];
		}
		$f = fopen('dump1.txt','w');
		fwrite($f, $HTTP_RAW_POST_DATA);
		fclose($f);
		$item = json_decode($HTTP_RAW_POST_DATA);
        if (isset($item->edited_message->text)){
            $item->message = $item->edited_message;
        }
        if (!isset($item->message->text)){
            $item->message->text = '';
        }
        if (isset($item->edited_message)){
            die('Cant work with edited messages');
        }
        if (isset($item->callback_query)){
            $item->message = $item->callback_query->message;
            $item->message->text = $item->callback_query->data;
		}
		
		
        
		if ($item === NULL) die("No direct access");
		
		$message = trim($item->message->text);
		$chat_id = $item->message->chat->id;
		if(isset($item->message->message_id)){
			$message_id = $item->message->message_id;
		} else {
			$message_id = $item->update_id;
		}

		if (isset($item->message->voice)){
			$is_audio = 1;
            $audio_path = $this->bot_lib->get_audio($item->message->voice->file_id);
			//$this->load->library('yandex');
			
			$result = $this->bot_lib->rec('./assets/audio/'.$audio_path);
			if($result !== "Error"){
				$message = $result;
			} else {
				$message = "Ошибка распознавания";
			}
			//$this->bot_lib->send_message($chat_id, $result);
			
            
        } else {
			$is_audio = 0;
			$audio_path = "";
		}

		if (isset($item->message->chat->title))
			$chat_title = $item->message->chat->title;
		else $chat_title = "";
		if (isset($item->message->chat->username))
			$username = $item->message->chat->username;
		else if (isset($item->message->from->username))
			$username = $item->message->from->username;
		else
			$username = '';
		if (isset($item->message->chat->first_name))
			$first_name = $item->message->chat->first_name;
		else if (isset($item->message->from->first_name))
			$first_name = $item->message->from->first_name;
		else
			$first_name = '';
		if (isset($item->message->chat->last_name))
			$last_name = $item->message->chat->last_name;
		else if (isset($item->message->from->last_name))
			$last_name = $item->message->from->last_name;
		else
			$last_name = '';
		
		$insert = array(
			'message'	=>	htmlspecialchars($message),
			'username'	=>	$username,
			'first_name'	=>	$first_name,
			'last_name'	=>	$last_name,
			'message_id'=>	$message_id,
			'chat_id'	=>	$chat_id,
			'chat_title' => $chat_title,
			'is_audio' => 	$is_audio,
			'audio_src' => 	$audio_path,
		);
		$this->db->insert('bot',$insert);
		
		//if user or group is in the blacklist, then do not translate
		$blacklist = $this->db->where('chat_id',$chat_id)->get('bot_blacklist')->row_array();
		if (count($blacklist) > 0){
			$this->bot_lib->send_message($chat_id,'You were blocked by LugatBot due to reason: '.$blacklist['comment']);
			die();
		}
		
		
		if (strlen($message) > 0 && $message[0] == '/'){
            $command = $this->bot_lib->detect_command($message);
			$this->bot_lib->save_last_command($item,$command);
			switch ($command){
				case '/start':
                    $this->bot_lib->save_last_command($item,'/start');
					$this->bot_lib->send_message($chat_id,'Kursni tanlang: ',$this->keyboard_year);
					break;
                case '/stop':
                    $this->bot_lib->send_message($chat_id,'Bot toqtatildi. Aktivlestiriw ushin, /start basin');
                    break;
			}
			
		}
		else{
		}
		echo "Ok";
	}
	public function cron()
	{
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
		$this->worker();
		sleep(5);
	}
	public function worker()
	{
		$messages = $this->db->where('processed', 0)->where('in',1)->limit(3)->order_by('id','desc')->get('bot')->result();
		foreach($messages as $item){
			if(preg_match("/[а-я]/i",$item->message)){
				$item->message = $this->data_lib->translate($item->message);
				$f = fopen('translate.txt','w');
				fwrite($f, $item->message);
				fclose($f);
			}
			$response = json_decode($this->data_lib->watson($item->message));
			//print_r($response);
			$response_text = "";
			if(is_array($response->intents) && $response->intents[0]->intent == "hotel_suggestion"){
				if(is_array($response->entities) && count($response->entities)>0){

					foreach($response->entities as $entity){
						print_r($entity);
						if($entity->entity == 'city'){
							switch(strtolower($entity->value)){
								case "tashkent":
									$city = "Tashkent";
									break;
								case "samarkand":
								$city = "Samarkand";
									break;
							}
						}
	
						if($entity->entity == 'price'){
							switch(strtolower($entity->value)){
								case "cheap":
									$price = 'cheap';
									break;
								case "expensive":
									$price = 'expensive';
									break;
							}
						}
					}
					$this->bot_lib->send_message($item->chat_id, $price . " " . $city . " hotels: ");
				}
				
			}

			$update = [
				'processed' => 1,
			];
			$this->db->where('id', $item->id)->update('bot', $update);
		}
		//print_r($messages);
	}
	
	public function db(){
		if ($this->ion_auth->is_admin()){
			$this->load->library('pagination');
			$this->load->helper('text');
			$config['base_url'] = base_url().$this->lang->lang().'/bot/db/page/';

			$config['total_rows'] = $this->db->where('in',1)->count_all_results('bot');
			$config['per_page'] = 50;
			$config['uri_segment'] = 5;
			$config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';
            $config['first_link'] = '&lt;&lt; Первая';
            $config['last_link'] = 'Последняя &gt;&gt;';
            $config['next_link'] = 'Дальше &gt;';
            $config['prev_link'] = '&lt; Назад';
			$config['num_links'] = 5;
			$current_page = $this->uri->segment(5);
			
			$this->session->set_userdata('current_page',$current_page);
			$this->pagination->initialize($config); 

			$this->data['pagination'] = $this->pagination->create_links();
			$rows = $this->db->order_by('id','DESC')->where('in',1)->limit(50,$current_page)->get('bot')->result();
			$this->data['rows'] = $rows;
			$this->data['title'] = 'Сообщения';
			$this->view_lib->render_test('bot/db',$this->data);
		}
		else redirect('auth/login');
	}
	
	public function groups()
	{
		$this->data['groups'] = $this->db
			->select('chat_id,chat_title')
			->group_by('chat_id')
			->having('chat_id <', '0')
			->get('bot')
			->result();
		//echo $this->db->last_query();
		$this->view_lib->render_test('bot/groups',$this->data);
	}
	
	public function chat($chat_id = FALSE){
        if($chat_id[0] == '_') {
            $chat_id[0] = '-';
            $chat_id = intval($chat_id);
        }
		if ($this->ion_auth->is_admin()){
			$this->data['chat_id'] = $chat_id;
			$this->data['messages'] = $this->bot_lib->get_chat($chat_id);
            //print($this->db->last_query());die();
            //var_dump($this->bot_lib->get_chat($chat_id));die();
			if ($this->input->is_ajax_request()){
				echo $this->load->view('bot/chat_row',$this->data,TRUE);
			}
			else{
				$this->load->view('bot/chat_new',$this->data);
			}
		}
	}
	
	public function chat_send(){
		if($this->ion_auth->is_admin()){
			$chat_id = intval($this->input->post('chat_id'));
			$message = $this->input->post('message');
			$this->bot_lib->send_message($chat_id,$message);
		}
	}
	
	public function adv($last_prev = 0){
        redirect('/');
        die();
        $time1 = mktime();
		$users = $this->db->where('chat_id >',$last_prev)->group_by('chat_id')->order_by('chat_id')->get('bot')->result();
        //print_r ($users);die();
        $num = 0;
        if (count($users) == 0) die('The end! Last user is ' . $last_prev);
        
        //$this->bot_lib->send_message(2152388,"Дорогие друзья! Администрация LugatUz от всей души поздравляет вас с Днем независимости! Пусть наша Родина всегда процветает и пребывает в мире! \r\n\r\nHurmatli foydalanuvchilar! LugatUz sizni Mustaqillik bayrami bilan tabriklaydi! Vatanimiz Osmoni musaffo, Yurtimizda tinchlik-totuvlik bo'lsin!");
        //die();
		foreach ($users as $item){
			//$this->bot_lib->send_message(117752796,'Дорогие друзья! Администрация LugatUz от всей души поздравляет вас с Днем независимости! Пусть наша Родина всегда процветает и пребывает в мире!');
			//$this->bot_lib->send_message($item->chat_id,'Администрация Lugat.uz от всей души поздравляет всех девушек с весенним праздником, с 8 Марта! Желаем успехов, процветания и счастья!');
            $this->bot_lib->send_message($item->chat_id,"Дорогие друзья! Администрация LugatUz от всей души поздравляет вас с Днем независимости! Пусть наша Родина всегда процветает и пребывает в мире! \r\n\r\nHurmatli do'stlar! LugatUz sizni Mustaqillik bayrami bilan tabriklaydi! Vatanimiz Osmoni musaffo, Yurtimizda tinchlik-totuvlik bo'lsin!");
			//echo 'sent to: '.$item->chat_id.'<br />';
            $last = $item->chat_id;
            if ($num == 100) {
                redirect('bot/adv/'.$last);
                //die("last for now is: " . $last ."<br />Time: " . (mktime() - $time1 . " sec"));
            }
            $num++;
		}
	}
	
	public function webhook(){
		$f = fopen('test.txt','w');
		//fwrite($f,json_decode($_POST));
		fwrite($f,$GLOBALS['HTTP_RAW_POST_DATA']);
		fclose($f);
	}
	
	public function geturl()
	{
		$ch = curl_init('http://bash.im/abyssbest');
		$res = curl_exec($ch);
		echo $res;
	}
	
	
	private function process_usernames()
	{
		die();
		$chats = $this->db->group_by('chat_id')->where('username !=','')->get('bot')->result();
		
		foreach($chats as $item){
			$matches = $this->db->where('chat_id',$item->chat_id)
				->count_all_results('bot_users');
			if ($matches === 0){
				$this->db->insert('bot_users',array(
						'username'	=>	$item->username,
						'first_name' =>	$item->first_name,
						'last_name'	=>	$item->last_name,
						'chat_id'	=>	$item->chat_id,
						//'group_id'	=>	$item->group_id,
					));
			}
		}
	}
	
	public function analysis()
	{
		if (!$this->ion_auth->is_admin()) redirect('/');
		if ($this->input->post('send')){
			$date_start = date('Y-m-d 00:00:00',strtotime($this->input->post('date_start')));
			$date_end = date('Y-m-d 23:59:59',strtotime($this->input->post('date_end')));
		}
		else{
			$date_start = date('Y-m-d 00:00:00',time());
			$date_end = date('Y-m-d 23:59:59',time());
		}
			
		$this->data['data'] = $this->db->where('date >',$date_start)
		->where('date <',$date_end)
        ->where('in','1')
		->select('*,COUNT(*) AS count')
		->group_by('chat_id')
		->order_by('count','DESC')
		->get('bot')
		->result();
        
        $this->data['devices'] = $this->db->order_by('id','DESC')->limit('50')->get('device_params')->result();
        $this->data['pie'] = $this->db->select("COUNT(id) AS cnt,source")
        ->where('source !=','')
        ->where('date >',$date_start)
		->where('date <',$date_end)
        ->group_by('source')
        ->get('yandex')->result();
		
		$this->view_lib->render('bot/analysis',$this->data);
	}
	
	public function blacklist()
	{
		if (!$this->ion_auth->is_admin()) redirect('/');
		if ($this->input->post('add'))
		{
			$insert = array(
				'chat_id' => intval($this->input->post('chat_id')),
				'comment' => htmlspecialchars($this->input->post('comment')),
			);
			$this->db->insert('bot_blacklist',$insert);
			redirect('bot/blacklist');
		} elseif ($this->uri->segment(3) == 'delete'){
            $id = intval($this->uri->segment(4));
            if ($id > 0){
                $this->db->where('id',$id)->limit(1)->delete('bot_blacklist');
            }
            redirect('bot/blacklist');
        }
		$this->data['blacklist'] = $this->db->order_by('id','DESC')->get('bot_blacklist')->result();
		$this->view_lib->render('bot/blacklist',$this->data);
	}
    
    public function users()
    {
        if (!$this->ion_auth->is_admin()) redirect('/');
        
        $this->load->library('pagination');
        $config['base_url'] = 'http://timetable.tatunf.uz/bot/users/page/';
        if ($this->input->post('search')){
            $this->db->like('username',$this->input->post('username'));
        }
        if ($this->input->post('search2')){
            $this->db->like('first_name',$this->input->post('first_name'));
            $this->db->or_like('last_name',$this->input->post('first_name'));
        }
        $config['total_rows'] = $this->db->count_all_results('bot_users');
        $config['per_page'] = 50;
        $config['uri_segment'] = 4;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config['first_link'] = '&lt;&lt; Первая';
        $config['last_link'] = 'Последняя &gt;&gt;';
        $config['next_link'] = 'Дальше &gt;';
        $config['prev_link'] = '&lt; Назад';
        $config['num_links'] = 3;
        $current_page = $this->uri->segment(4);
        
        $this->session->set_userdata('current_page',$current_page);
        $this->pagination->initialize($config); 

        $this->data['pagination'] = $this->pagination->create_links();
        
        if ($this->input->post('search')){
            $this->db->like('username',$this->input->post('username'));
        }
        if ($this->input->post('search2')){
            $this->db->like('first_name',$this->input->post('first_name'));
            $this->db->or_like('last_name',$this->input->post('first_name'));
        }
        $this->db->select('bot_users.*,tbl_groups.group_name');
        $this->db->join('tbl_groups','tbl_groups.id=bot_users.group','left');
        $this->data['users'] = $this->db->order_by('bot_users.id','DESC')->limit(50,$current_page)->get('bot_users')->result();
        $this->data['total_users'] = $config['total_rows'];
        //die($this->db->last_query());
        $this->view_lib->render('bot/users',$this->data);
    }
    
    public function test()
    {
		$xml = '<?xml version="1.0" encoding="utf-8"?>
		<recognitionResults success="1">
		 <variant confidence="0">как дела</variant>
		</recognitionResults>';
		$array = simplexml_load_string($xml);
		echo $array->variant;
    }
    
    public function testinline()
    {
        $this->bot_lib->send_message('2152388','Hello');
	}
	
	public function delete_message()
	{
		if(!$this->ion_auth->is_admin())
			redirect('');
		if($this->input->is_ajax_request()){
			$chat_id = intval($this->input->post('chat_id'));
			$message_id = intval($this->input->post('message_id'));
			$this->bot_lib->delete_message($chat_id, $message_id);
		}
	}
}
