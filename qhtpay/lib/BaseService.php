<?php

namespace qhtpay\lib;
class BaseService
{
    public static function request($url,$params,$timeout=10)
    {
        if(empty($params)){
            $params=[];
        }

        $curl=Curl::init();
        $result=$curl->post($params)->submit($url);
        echo $url.'<hr/><pre>';
        var_dump($result);
        exit;
        if($result['error']=='0'){
            return $result['body'];
        }else{
            return null;
        }
    }
}