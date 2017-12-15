<?php
namespace qhtpay\service;
use qhtpay\constants\ApiConstants;
use qhtpay\lib\BaseService;
use qhtpay\util\SignHelper;

class MerchantService extends BaseService {
    public static function import($params=array()){
        $params['request_id']=uniqid();
        $params['sign']=SignHelper::md5_sign($params,ApiConstants::PUBLIC_KEY);
        $response= parent::request(ApiConstants::IMPORT_URL,json_encode($params));

        if(SignHelper::verify_md5_sign($response,ApiConstants::PUBLIC_KEY)){
            return $response;
        }else{
            exit;
        }
    }

    public static function import_query($params=array()){
        $params['request_id']=uniqid();
        $params['sign']=SignHelper::md5_sign($params,ApiConstants::PUBLIC_KEY);
        echo json_encode($params);
        $response= parent::request(ApiConstants::IMPORT_QUERY_URL,json_encode($params));
        if(SignHelper::verify_md5_sign($response,ApiConstants::PUBLIC_KEY)){
            return $response;
        }else{
            exit;
        }
    }
}