<?php
require '../vendor/autoload.php';
class DemoPay{
    public static function convenient_pay(){
        $req_data['merchant_no']=\qhtpay\constants\ApiConstants::MERCHANT_NO;
        $req_data['amount']='100';
        $req_data['out_order_number']=time();
        $req_data['payer_name']='陆秀姬';
        $req_data['payer_account']='6221550415652381';
        $req_data['payer_phone']='13850856402';
        $req_data['payer_id_card']='350427197809181066';
        $req_data['card_type']='credit';
        $req_data['settle']='T0';
        $req_data['sign_type']='MD5';
        $req_data['order_ip']='127.0.0.1';
        $req_data['order_title']='付款';
        $req_data['order_desc']='付款';
        $req_data['request_at']=date('YmdHis');
        $req_data['page_notify']='http://www.baidu.com';

        $result=qhtpay\service\PayService::convenient_pay($req_data);
        return $result;
    }
}

$result=DemoPay::convenient_pay();
echo $result;