<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function sendMessage(Request $request)
    {
        /////////////////////////
        ////МОЙ БОТ ДЛЯ ТЕСТА////
        /////////////////////////

        $token = "6379254091:AAFP6yC_yx7sqA7ZvSbe_Z9lZuWb8vQlqIU";

        $getQuery = array(
            "chat_id" 	=> '-1002319566303',
            "text"  	=> $request['message'],
            "parse_mode" => "html"
        );


//        $token = "7911653318:AAFog1avuSEoln1ItrCOl_nRQdMoz4EwVDQ";
//
//        $getQuery = array(
//            "chat_id" 	=> '-1002233538062',
//            "text"  	=> $request['message'],
//            "parse_mode" => "html"
//        );

        $ch = curl_init("https://api.telegram.org/bot". $token ."/sendMessage?" . http_build_query($getQuery));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $resultQuery = curl_exec($ch);
        curl_close($ch);

        return response()->json([
            'success' => 'ok',
            'message'=> $resultQuery
        ]);
    }
}
