<?php
require '../vendor/autoload.php';
class DemoOrder{
    public static  function order_query(){
        $req_data['merchant_no']=\qhtpay\constants\ApiConstants::MERCHANT_NO;
        $req_data['out_order_number']='2424245424';
        $req_data['sign_type']='MD5';
        $result=\qhtpay\service\OrderService::order_query($req_data);
        return $result;
    }
}

$query_result=DemoOrder::order_query();
echo "<pre>";
var_dump($query_result);