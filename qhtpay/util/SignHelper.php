<?php
namespace qhtpay\util;
use qhtpay\constants\ApiConstants;

class SignHelper{
    public static function md5_sign($params=array(),$key=''){
        ksort($params);
        if($key==''){
            $str=self::getSignContent($params).'&sign_key='.ApiConstants::PUBLIC_KEY;
        }else{
            $str=self::getSignContent($params)."&sign_key=$key";
        }

        return md5($str);
    }

    public static function verify_md5_sign($params='',$key=''){
        $params=json_decode($params,true);
        ksort($params);

        $merchant_sign=$params['sign'];

        unset($params['sign']);

        $api_sign=self::md5_sign($params,$key);

        if($merchant_sign==$api_sign)return true;
        return false;
    }

    //私钥签名
    public static function rsa_sign($params=array()){
        $res=openssl_get_privatekey(ApiConstants::RSA_PRIVATE_KEY);//获取私钥
        $res_data = self::getSignContent($params);//获取字典拼接字符串
        openssl_sign($res_data, $sign, $res);//进行签名。
        openssl_free_key($res);
        $sign = base64_encode($sign);
        return $sign;//返回签名sign
    }

    //公钥验签
    public static function verify_rsa_sign($params,$sign){
        //转换公钥
        $res=openssl_get_publickey(ApiConstants::RSA_PUBLIC_KEY);
        //调用openssl内置方法验签
        $result=(bool)openssl_verify($params,base64_decode($sign),$res);
        //释放资源
        openssl_free_key($res);
        //返回资源是否成功
        return $result;
    }

    private static function getSignContent($params=array()){
        ksort($params);//按照字典进行排序
        $stringToBeSigned = "";
        $i = 0;
        foreach ($params as $k => $v) {
            if ($i == 0) {
                $stringToBeSigned .= "$k" . "=" . "$v";
            } else {
                $stringToBeSigned .= "&" . "$k" . "=" . "$v";
            }
            $i++;
        }
        unset ($k, $v);
        return $stringToBeSigned;//返回字典拼接字符串
    }
}