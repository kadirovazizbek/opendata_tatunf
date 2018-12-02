<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data_lib{
    
    private $CI;
    
    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function getData($dataset, $version, $format='json')
    {
        if($dataset === false){
            return false;
        }
        $url = "https://data.gov.uz/ru/api/v1/".$format."/dataset/".intval($dataset)."/version/".$version."?access_key=265cb8c6a741d74a1d51e71d3084ace5";
        //echo $url;
        //$url = "https://data.gov.uz/ru/datasets/download/".intval($dataset)."/".$format;
        //echo $url;
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);    // прервать процесс, если возникнет ошибка
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // возврат данных в переменную
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); // разрешить перенаправления
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);       // таймаут 3 секунды
        // отключаем проверку SSL 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch);
        $err = curl_errno($ch);
        if($err !== 0){
            $f = @fopen('dump_error.txt', 'a');
            @fwrite($f, $err . "\n");
            @fclose($f);
            return false;
        }
        //echo $result;die();
        return json_decode($result);
    }

    public function getVersion($dataset)
    {
        $url = "https://data.gov.uz/ru/api/v1/json/dataset/".intval($dataset)."/version?access_key=265cb8c6a741d74a1d51e71d3084ace5";
        //$url = "https://data.gov.uz/ru/datasets/download/".intval($dataset)."/".$format;
        //echo $url;
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);    // прервать процесс, если возникнет ошибка
        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // возврат данных в переменную
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0); // разрешить перенаправления
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);       // таймаут 3 секунды
        // отключаем проверку SSL 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $result = curl_exec($ch);
        $err = curl_errno($ch);
        if($err !== 0){
            $f = @fopen('dump_error.txt', 'a');
            @fwrite($f, $err . "\n");
            @fclose($f);
            return false;
        }
        $array = json_decode($result);
        return $array[0]->ds_structure_id;
    }

    public function query($dataset = false, $format = 'json', $version = 1)
    {
        
    }

    public function watson($text = "")
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://gateway-syd.watsonplatform.net/assistant/api/v1/workspaces/9876daa5-7997-4434-80fb-de55fcadb19d/message?version=2018-09-20",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"input\": {\"text\": \"".$text."\"}}",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Basic YXBpa2V5OjFLeG1QNU5ZWEkzbmR1Q245bElVdUl4N3R5V0FnOFI0Tno1WXl2MzdtQWlu",
            "Cache-Control: no-cache",
            "Content-Type: application/json",
            "Postman-Token: 06bc8851-acc6-4116-880b-f5ccc1ffd3c8"
        ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }

    function translate($text="",$lang_from="ru",$lang_to="en")
    {
		$CI = & get_instance();
		$CI->load->helper('text');
		//$this->load->helper('functions_helper');
        $api_key = "trnsl.1.1.20150421T034735Z.a8f30724cffc2df0.1318e01114356a922eceeda1828095e73a8fda26";
		
		$translate_query = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=".$api_key."&text=".urlencode($text)."&lang=".$lang_from."-".$lang_to."&format=plain";
		//var_dump($translate_query); 
        
        $curl = curl_init();
    	curl_setopt($curl, CURLOPT_URL,$translate_query);
    	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // разрешить перенаправления
    	curl_setopt($curl, CURLOPT_TIMEOUT, 5);        // таймаут 10 секунд
    	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    	$result = curl_exec($curl);
    	$curl_error = curl_error($curl);
        $curl_errno = curl_errno($curl);
    	curl_close($curl);
            
        $decoded = json_decode($result);
		//var_dump ($curl_error);
		if(isset($decoded) && isset($decoded->text[0]) )
			$transl = $decoded->text[0];
		else $transl = "";
        $result = json_decode($result);
        //var_dump($result);
		return $result->text[0];
    }
    
    public function analyzeAndSendResponse($text)
    {
        $CI = & get_instance();
        if(preg_match("/[а-я]/i",$text)){
            $text = $this->translate($text);
            $f = fopen('translate.txt','w');
            fwrite($f, $text);
            fclose($f);
        }
        $response = json_decode($this->watson($text));
        //print_r($response);
        $response_text = "";
        $city = "";
        $price = "";
        if(is_array($response->intents) && $response->intents[0]->intent == "hotel_suggestion"){
            if(is_array($response->entities) && count($response->entities)>0){

                foreach($response->entities as $entity){
                    //print_r($entity);
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

                if($city == 'Samarkand') {
                    if($price == 'cheap') 
                        $hotels = $CI->db->query("select name,level,tel from `hotel_samarkand` where level='B&B' or level='*' limit 10")->result();
                    else
                        $hotels = $CI->db->query("select name,level,tel from `hotel_samarkand` where level='**' or level='***' or level='****' order by length(level) desc limit 10")->result();
                }
                else {
                    if($price == 'expensive')
                        $hotels = $CI->db->query("select name,tel from `hotel_tashkent` order by id asc limit 5")->result();
                    else
                        $hotels = $CI->db->query("select name,tel from `hotel_tashkent` order by id desc limit 5")->result();
                }

                $response_text = "";
                foreach ($hotels as $h) {
                    if($city == 'Samarkand') $response_text .= "\r\n".$h->name." ".$h->level."(".$h->tel.")";
                    else $response_text .= "\r\n".$h->name." (".$h->tel.")";
                }
                
                
                //$CI->bot_lib->send_message($item->chat_id, $price . " " . $city . " hotels: ");
            }
            
        }


        $x = 41.3384986;
        $y = 69.333828;
        $response_text = "";
        if(is_array($response->intents) && $response->intents[0]->intent == "museum_suggestion"){

            $museums = $CI->db->get('museums_tashkent')->result_array();
            $distances = array();
            foreach($museums as $item){
                $distance = sqrt(pow($x-$item['lat'],2)+pow($y-$item['lon'],2));
                $distances[$item['title'] . " " . $item['address'] . " " . $item['phone_number']] = $distance;
            }
            asort($distances);
            //return json_encode($distances);
            $distances = array_slice($distances,0,5,true);
            foreach($distances as $key=>$item){
                $response_text .= $key . "\r\n";
            }

            
            //$CI->bot_lib->send_message($item->chat_id, $price . " " . $city . " hotels: ");
        }
            
        



        return $response_text;
    }
}