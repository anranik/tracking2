<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function response($status,$message,$data = ''){

        $response['status'] = $status;
        $response['message'] = $message;
        if($data == null){
            $response['data'] =  null;
        } else {
            $response['data'] = $data;

        }

        return response($response, 200)->header('Content-Type', 'application/json');
    }

    function responseDefaultIsArray($status,$message,$data = []){

        $response['status'] = $status;
        $response['message'] = $message;
        if($data == null){
            $response['data'] =  array();
        } else {
            $response['data'] = $data;

        }
        return response($response, 200)->header('Content-Type', 'application/json');
    }

    function validationHandle($validation){
//        return $validation;
        foreach ($validation->getMessages() as $field_name => $messages){
            if(!isset($firstError)){
                $firstError        =$messages[0];
                $error[$field_name]=$messages[0];
            }
        }
        return $firstError;
    }
    function convert($string) {
        $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
        $num = range(0, 9);
        $englishNumbersOnly = str_replace($arabic, $num, $string);
        return $englishNumbersOnly;
    }
}
