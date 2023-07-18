<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;

class TelegramBotController extends Controller
{

    private function bot($method, $datas=[]){
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
    }
    public function sendMessage(Request $req) {
        #variable
        $name = $req->input('name');
        $email = $req->input('email');
        $theme = $req->input('theme');
        $msg = $req->input('msg');

        $message = "Salom admin sizga botdan xabar keldi.\nIsmi: $name\nEmail: $email\nMavzu: $theme\n\nXabar matni: $msg";

        $this->bot('sendMessage',[
            'chat_id'=>'1561051170',
            'text'=>$message
        ]);
        return redirect()->back()->with('sucess', 'Xabar muvoffaqiyatli yuborildi');
    }
}
