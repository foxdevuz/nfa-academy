<?php

#default codes
date_default_timezone_set("Asia/Tashkent");
#bot
define("API_KEY", "6208679769:AAH7yge30QxKIKzlu6uvGo6BmH8GPQ_cgzY");
function bot($method, $datas=[]){
    $url = "https://api.telegram.org/bot6208679769:AAH7yge30QxKIKzlu6uvGo6BmH8GPQ_cgzY/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
};
function html($text){
    return str_replace(["<",">"], ["$#60","$#62"], $text);
};
?>
