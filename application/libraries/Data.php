<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Data{
    
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
}