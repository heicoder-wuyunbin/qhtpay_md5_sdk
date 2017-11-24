<?php
namespace qhtpay\service;
use qhtpay\lib\BaseService;
use qhtpay\constants\ApiConstants;
use qhtpay\util\SignHelper;
class OrderService extends BaseService{

    public static function order_query($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        $response_str=parent::request(ApiConstants::ORDER_QUERY_URL,json_encode($params));
        //验签
        if(SignHelper::verify_md5_sign($response_str,ApiConstants::KEY)){
            return $response_str;
        }else{
            $output['msg']='签名错误';
            return json_encode($output);
        }
    }
}