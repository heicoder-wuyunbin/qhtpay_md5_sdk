<?php
namespace qhtpay\service;
use function PHPSTORM_META\type;
use qhtpay\lib\BaseService;
use qhtpay\constants\ApiConstants;
use qhtpay\util\SignHelper;

class PayService extends BaseService{


    /**
     * @param array $params
     * @return null|string
     */
    public static function quick_pay($params=array()){
        $params['request_id']=uniqid();
        $params['sign']=SignHelper::md5_sign($params,ApiConstants::KEY);
        $response= parent::request(ApiConstants::QUICK_PAY_URL,json_encode($params));
        if(SignHelper::verify_md5_sign($response,ApiConstants::KEY)){
            return $response;
        }else{
            exit;
        }
    }

    /**
     * @function 扫码支付
     * @param array $params
     */
    public static function scan_code_pay($params=array()){
        $params['request_id']=uniqid();
        $params['sign']=SignHelper::md5_sign($params,ApiConstants::KEY);
        $response= parent::request(ApiConstants::SCAN_CODE_URL,json_encode($params));
        if(SignHelper::verify_md5_sign($response,ApiConstants::KEY)){
            return $response;
        }else{
            exit;
        }
    }

    /**
     * @function 条码支付
     * @param array $params
     */
    public static function bar_code_pay($params=array()){
        $params['request_id']=uniqid();
        $params['sign']=SignHelper::md5_sign($params,ApiConstants::KEY);
        $response= parent::request(ApiConstants::BAR_CODE_URL,json_encode($params));
        if(SignHelper::verify_md5_sign($response,ApiConstants::KEY)){
            return $response;
        }else{
            exit;
        }
    }

    /**
     * @function 便民支付
     * @param array $params
     */
    public static function convenient_pay($params=array()){
        $params['request_id']=uniqid();
        $params['sign']=SignHelper::md5_sign($params,ApiConstants::KEY);
        $response= parent::request(ApiConstants::CONVENIENT_PAY_URL,json_encode($params));

        if(SignHelper::verify_md5_sign($response,ApiConstants::KEY)){
            $response_arr=json_decode($response,true);
            return $response_arr['html'];
        }else{
            exit;
        }
    }
}