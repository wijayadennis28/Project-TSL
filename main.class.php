<?php
class Main{
    function getAPIData($url){
        $ch = curl_init();
        $headers = array(
        'Accept: application/vnd.github.v3+json',
        'Content-type: application/json'
        );
    
        curl_setopt_array($ch,[
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $url,
            CURLOPT_USERAGENT => 'Github TSL',
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => $headers
        ]);
    
        $responseString = curl_exec($ch);
        $responseArr = json_decode($responseString, true);
    
        return $responseArr;
    }

    function getReadableTimeFormat($inputTime){
        $time = date('Y-m-d h:i:s', strtotime($inputTime));

        $time = time() - $time; // to get the time since that moment
        $time = ($time<1)? 1 : $time;
        $tokens = array (
            31536000 => 'year',
            2592000 => 'month',
            604800 => 'week',
            86400 => 'day',
            3600 => 'hour',
            60 => 'minute',
            1 => 'second'
        );

        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
        }
    }
  }
?>