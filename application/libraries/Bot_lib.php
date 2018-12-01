<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bot_lib {
    
    private $chat_id;
    private $last_id;
    private $CI;
    private $api_key;
    /**
    * 
    * @param int $chat_id
    * @param string $message
    * 
    * @return
    */
    function __construct(){
        $CI = &get_instance();
        $this->api_key = $CI->config->item('API_KEY');
    }
    
    public function send_message($chat_id,$message = '',$reply_markup = FALSE){
        //$time1 = microtime(get_as_float);
        $opts = array(
                'chat_id'=>$chat_id,
                'text'=>$message,
                'parse_mode'=>'HTML',
            );
        if ($reply_markup !== FALSE) $opts['reply_markup'] = $reply_markup;
        else {
            $opts['reply_markup'] = json_encode(array('hide_keyboard'=>true));
        }
        $CI = &get_instance();
        $insert = array(
            'message'    =>    $message,
            'username'    =>    'Admin',
            'first_name'    =>    'Lugat',
            'last_name'    =>    'Admin',
            'message_id'=>    0,
            'chat_id'    =>    $chat_id,
            'in'        =>    0,
        );
        $CI->db->insert('bot',$insert);
        $this->call_curl('sendMessage',$opts);
        //$time2 = microtime(get_as_float);
        //$f=fopen('time.txt','w');fwrite($f,$time1.' - ' . $time2 . ' : ' .($time2-$time1));fclose($f);
    }
    
    public function edit_message($chat_id,$message_id,$message = '',$reply_markup=FALSE){
        $opts = array(
                'chat_id'=>$chat_id,
                'message_id'=>$message_id,
                'text'=>$message,
                'parse_mode'=>'Markdown',
            );
        if ($reply_markup !== FALSE) $opts['reply_markup'] = $reply_markup;
        else {
            $opts['reply_markup'] = json_encode(array('hide_keyboard'=>true));
        }
        $this->call_curl('editMessageText',$opts);
    }

    public function delete_message($chat_id,$message_id){
        $opts = array(
                'chat_id'=>$chat_id,
                'message_id'=>$message_id,
            );
        
        $this->call_curl('deleteMessage',$opts);
        $CI = &get_instance();
        $CI->db->where('message_id',$message_id)->where('chat_id',$chat_id)->delete('bot');
    }
    
    /**
    * 
    * @param int $last_id
    * 
    * @return array of messages
    */
    public function get_last_updates($last_id = FALSE){
        if ($last_id === FALSE){
            $last_id = $this->get_last_id();
        }
        else {
            $last_id = intval($last_id);
        }
        $message = json_decode($this->call_curl('getUpdates',array('offset'=>$last_id)));
        return $message;
    }
    
    /**
    * Gets file and saves it on server in https://api.telegram.org/file/bot-token/file_path
    * @param string $file_id
    * 
    * @return file path
    */
    public function get_file($file_id){
        $result = json_decode($this->call_curl('getFile',array('file_id'=>$file_id)));
        //print_r ($result);
        //$filename = mktime().'.jpg';
        $filename = date('Y-m-d__H-i-s') . substr($result->result->file_path,strrpos($result->result->file_path,'.'));
        $ch = curl_init('https://api.telegram.org/file/bot'.$this->api_key.'/'.$result->result->file_path);
        $fp = fopen('./files/'.$filename, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        return $filename;
    }
    
    public function get_audio($file_id){
        $result = json_decode($this->call_curl('getFile',array('file_id'=>$file_id)));
        //print_r ($result);
        $filename = time().'.ogg';
        $ch = curl_init('https://api.telegram.org/file/bot'.$this->api_key.'/'.$result->result->file_path);
        $fp = fopen('./assets/audio/'.$filename, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        return $filename;
    }
    
    /**
    * 
    * @param integer $chat_id
    * 
    * @return username
    */
    public function get_username($chat_id = false){
        if ($chat_id){
            $CI = &get_instance();
            $CI = $this->db->where('chat_id',$chat_id)
                ->limit(1)
                ->get('bot_users')
                ->row();
            return $user->username;
        }
        else return false;
    }
    
    /**
    * 
    * @param string $username
    * 
    * @return integer chat_id
    */
    public function get_chat_id($username = false){
        if ($username){
            $CI = &get_instance();
            $user = $CI->db->where('username',$username)
                ->limit(1)
                ->get('bot_users')
                ->row();
            return $user->chat_id;
        }
        else return false;
    }
    
    /**
    * 
    * @param string $method
    * @param array $params
    * 
    * @return
    */
    public function call_curl($method='',$params = array()){
        $url = 'https://api.telegram.org/bot'.$this->api_key.'/'.$method;
        $encoded = '';
        foreach($params as $name => $value) {
          $encoded .= urlencode($name).'='.urlencode($value).'&';
        }
        
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, $url); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_POSTFIELDS,$encoded);
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);    // прервать процесс, если возникнет ошибка
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);  // возврат данных в переменную
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); // разрешить перенаправления
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);        // таймаут 3 секунды
        curl_setopt($ch, CURLOPT_POST, 1);           // метод передачи POST
        // отключаем проверку SSL 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        // $output contains the output string 
        $output = curl_exec($ch);
        
        if (curl_errno($ch) != 0){
            $f=fopen('./curlerr.txt','w');
            fwrite($f,curl_errno($ch));
            fwrite($f,"\n");
            fclose($f);
            return $this->call_curl_tasix($method,$params);
        }
        //echo curl_errno($ch);
        // close curl resource to free up system resources 
        curl_close($ch);

        return $output;
    }
    

    
    /**
    * 
    * 
    * @return last_id
    */
    public function get_last_id(){
        $CI = &get_instance();
        $info = $CI->db->where('in',1)->order_by('id','DESC')->limit(1)->get('bot')->row();
        
        if (isset($info->message_id))
            return intval($info->message_id)+1;
        else return 1;
    }
    
    
    /**
    * 
    * @param int $chat_id
    * @param int $msg_count count of messages, default 30
    * 
    * @return array of messages
    */
    public function get_chat($chat_id,$msg_count = 100){
        $CI = &get_instance();
        $messages = $CI->db
            ->select('bot.*')
            ->where('bot.chat_id',intval($chat_id))
            ->order_by('bot.id','DESC')
            ->limit($msg_count)
            ->join('bot_users','bot_users.chat_id=bot.chat_id','left')
            ->get('bot')->result();
        $messages = array_reverse($messages);
        
        return $messages;
    }
    
    public function curl_file_create($filename, $mimetype = '', $postname = '') {
        return "@$filename;filename="
            . ($postname ?: basename($filename))
            . ($mimetype ? ";type=$mimetype" : '');
    }
    
    public function generateRandomSelection($min, $max, $count)
    {
        $result=array();
        if($min>$max) return $result;
        $count=min(max($count,0),$max-$min+1);
        while(count($result)<$count) {
            $value=rand($min,$max-count($result));
            foreach($result as $used) if($used<=$value) $value++; else break;
            $result[]=dechex($value);
            sort($result);
        }
        shuffle($result);
        return $result;
    }
    
    public function recognize($file) {
        $uuid=$this->generateRandomSelection(0,30,64);
        $uuid=implode($uuid);    
        $uuid="d6fd5c111181e1ad019151112c7121e1";
        $curl = curl_init();
        $url = 'https://asr.yandex.net/asr_xml?'.http_build_query(array(
        'key'=>'a127e191-58e5-4bad-ad70-9790575428f8',
                'uuid' => $uuid,
            'topic' => 'queries',
            //'lang'=>'ru-RU'
        ));
        curl_setopt($curl, CURLOPT_URL, $url);
        $data=file_get_contents(realpath($file));
        //$this->send_message(2152388,"1: ".realpath($file));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: audio/ogg;codecs=opus'));
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        $response = simplexml_load_string(curl_exec($curl));
        if (($response !== FALSE) and ($response !== NULL) and !empty($response)){
            $result = $response->variant;
        } else {
            $err = curl_errno($curl);
            if ($err){
                $this->bot_lib->send_message(2152388,$err);
                /*$f = fopen('./audio.txt','w');
            fwrite($f, $err . "\r\n" . $response);
            fclose($f);*/
            }
            $f = fopen('audio.txt','w');
            fwrite($f, $err);
            fclose($f);
            
            $result = "Error";
        }
        
        curl_close($curl);
        
        return $result;
    }
    
    public function rec($filename){
        $result = $this->recognize($filename);
        return $result;
    }
}