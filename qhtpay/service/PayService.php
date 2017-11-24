<?php
namespace qhtpay\service;
use qhtpay\lib\BaseService;
use qhtpay\constants\ApiConstants;
use qhtpay\util\SignHelper;

class PayService extends BaseService{


    /**
     * @param array $params
     * @return null|string
     */
    public static function quick_pay($params=array()){

        $params['sign_type']=='RSA'?$params['sign']=SignHelper::rsa_sign($params):SignHelper::md5_sign($params,ApiConstants::PUBLIC_KEY);
        $response_str=parent::request(ApiConstants::QUICK_PAY_URL,json_encode($params));
        //验签
        if(SignHelper::verify_md5_sign($response_str,ApiConstants::KEY)){
            return $response_str;
        }else{
            $output['msg']='签名错误';
            return json_encode($output);
        }
    }

    /**
     * @function 扫码支付
     * @param array $params
     */
    public static function scan_code_pay($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        $response_str=parent::request(ApiConstants::SCAN_CODE_URL,json_encode($params));
        //验签
        if(SignHelper::verify_md5_sign($response_str,ApiConstants::KEY)){
            return $response_str;
        }else{
            $output['msg']='签名错误';
            return json_encode($output);
        }
    }

    /**
     * @function 条码支付
     * @param array $params
     */
    public static function bar_code_pay($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        $response_str=parent::request(ApiConstants::BAR_CODE_URL,json_encode($params));
        //验签
        if(SignHelper::verify_md5_sign($response_str,ApiConstants::KEY)){
            return $response_str;
        }else{
            $output['msg']='签名错误';
            return json_encode($output);
        }
    }

    /**
     * @function 便民支付
     * @param array $params
     */
    public static function convenient_pay($params=array()){
        ksort($params);
        $params['sign']=md5(json_encode($params).'&sign_key='.ApiConstants::KEY);
        $response_str=parent::request(ApiConstants::CONVENIENT_PAY_URL,json_encode($params));
        //验签
        if(SignHelper::verify_md5_sign($response_str,ApiConstants::KEY)){
            return $response_str;
        }else{
            $output['msg']='签名错误';
            return json_encode($output);
        }
    }
}