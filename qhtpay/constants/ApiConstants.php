<?php
namespace qhtpay\constants;
class ApiConstants{
    const MERCHANT_NO = "350427201709121441548139537";//商户在钱汇通的商户号
    const KEY = "S91aCCc7eFIH";//密钥
    const PUBLIC_KEY="qhtpay@qhtpay";//公共MD5密钥
    const BASE_URL="http://api.qhtpay.com.cn:18084/api/";
    const VERSION='v1.0';

    const IMPORT_URL=self::BASE_URL.self::VERSION."/merchant/import";//商户入驻
    const IMPORT_QUERY_URL=self::BASE_URL.self::VERSION."/merchant/import_query";//商户入驻查询

    const SCAN_CODE_URL = self::BASE_URL.self::VERSION."/scan_code_pay";//扫码支付
    const BAR_CODE_URL = self::BASE_URL.self::VERSION."/bar_code_pay";//条码支付
    const QUICK_PAY_URL = self::BASE_URL.self::VERSION."/quickPay";//快捷支付
    const CONVENIENT_PAY_URL=self::BASE_URL.self::VERSION."/convenience_pay";//便民支付
    const ORDER_QUERY_URL=self::BASE_URL.self::VERSION."/order_query";//订单查询

    const RSA_PRIVATE_KEY='-----BEGIN PRIVATE KEY-----
MIICdQIBADANBgkqhkiG9w0BAQEFAASCAl8wggJbAgEAAoGBALl1HlU3TE8nlEv7
K5Nx93Gc3d1tkU7jFYLSBLgqofYVJ3ENUzV3xSwwEVm01qoWonEpUbgg/vzpG3gJ
V9BPL2X88VpcHf7tbVOR0++1REiC/8szbw/Wj3qNLIcwboCgi1cF2IqA1JSYM83+
zGGii72l+FsSAL2DiMLa5V744OKNAgMBAAECgYBGT/gLGOcOj5Py5qxTv36wDWg0
fkj8Hq5WJefyJv+2u7hzbTjh6aHQqfy6BQzp+aDmxGKeK6xhGMP4U5p+eLcgD0oK
WHjUqh+IdCSc0LmbCvPeP+EU9J2W1+DzH41hPPfhGG3AlI8KPzhrMnEeSumRSaxY
uMe38nCTq7KcAtNdgQJBAORaKNYtneUBUnz/kjE7AjyCXE+3tLNLVRY8CrFVfLna
O1Oh9v4to/se+VvVA4oWRyXhWuhkCrEcJMb0cUPO3C0CQQDP6W0HQtfhDUhEvPJm
1+T1DjhL1eK6pLOsP+GyveMKhk8DMl9aZEVVOzcqh9b4fWovi1lVjNMHFo4QaiL9
fzvhAkA5tRcw2SJX5zejYyrcyh7Mj90oQDKoRNdh4RaKriHxDdeEUSAMKBiSs8cs
j+5vDSY5ynOg2vdgvs4EgW3GRxaZAkBeAjzzOI0mTHwt4IV2bQ4wo/Jej+KJ5Cj9
rJDf4i5DtwEJAADPfWFALZs/Ftbj2slloAuPvDI7FT69O1CA8MPhAkAECZapHWLS
XqjNJR8BXnxPhvfrBUu6R6XS0rg9WUXKHH4WHaVZq85BUpLqA2bB5FSvEKzzrJna
911EKnTQKF2T
-----END PRIVATE KEY-----';
    const RSA_PUBLIC_KEY='-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC5dR5VN0xPJ5RL+yuTcfdxnN3d
bZFO4xWC0gS4KqH2FSdxDVM1d8UsMBFZtNaqFqJxKVG4IP786Rt4CVfQTy9l/PFa
XB3+7W1TkdPvtURIgv/LM28P1o96jSyHMG6AoItXBdiKgNSUmDPN/sxhoou9pfhb
EgC9g4jC2uVe+ODijQIDAQAB
-----END PUBLIC KEY-----';
}