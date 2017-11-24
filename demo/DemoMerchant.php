<?php
require '../vendor/autoload.php';
class DemoMerchant
{
    public static function import()
    {
        $req_data = array(
            'cellphone' => '15116998567',
            'id_card' => '441427198801011245',
            'id_card_start_at'=>'1987-08-15',
            'id_card_end_at'=>'2017-10-01',
            'merchant_name' => '大圣',
            'province' => '广东省',
            'city' => '梅州市',
            'district' => '蕉岭县',
            'province_code' => '440000',
            'city_code' => '441400',
            'district_code' => '441427',
            'bank_account' => '123556766666',
            'account_name' => '大圣',
            'bank_phone' => '15116998567',
            'bank' => '中国农业银行',
            'branch' => '农业银行嘉大支行',
            'bank_code' => '123465789',
            'bank_province' => '广东省',
            'bank_city' => '梅州市',
            'bank_district' => '蕉岭县',
            'bank_province_code' => '440000',
            'bank_city_code' => '441400',
            'bank_district_code' => '441427',
            'sign_type' => 'MD5',
            'notify' => 'http://www.baidu.com',
            'page_notify' => 'http://www.baidu.com/page_notify'
        );
        $result=qhtpay\service\MerchantService::import($req_data);
        return $result;
    }

    public static function import_query(){
        $req_data = array(
            'cellphone' => '15116998567',
            'id_card' => '441427198801011245',
            'sign_type' => 'MD5',
        );
        $result=qhtpay\service\MerchantService::import_query($req_data);
        return $result;
    }
}

//$import_result = DemoMerchant::import();
$query_result=DemoMerchant::import_query();
echo '<pre>';
//var_dump(json_decode($import_result,true));
var_dump(json_decode($query_result,true));