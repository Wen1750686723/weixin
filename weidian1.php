<?php
$access_token = "hZHKyEq8o9VMbFBLu6scF8u8AGFi56yiuuus7whQVtIO0QK6zvVApXKuudrupnPdLr6chvK9xLvqTOlznPtc5z_1rb981mluChbvOzP0pd4";

$jsonmenu = '{
    "status": 0
}';


$url = "https://api.weixin.qq.com/merchant/shelf/getall?access_token=".$access_token;
$result = https_request($url);
var_dump($result);

function https_request($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}
?>