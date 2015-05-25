<?php
$access_token = "hDwYPNcshL6v2zakkjgMvWojwQqZXMW_CAR22D2jgkqa17OlwybFbPu564_Tck-eSnsvowgIpwYpKIWSz5uFDxV3IEvjciQ2-_u0He4v_W0";

$jsonmenu = '{"action_name": "QR_LIMIT_STR_SCENE", "action_info": {"scene": {"scene_str": "123"}}}';


$url = "https://api.weixin.qq.com/cgi-bin/qrcode/create?access_token=".$access_token;
$result = https_request($url, $jsonmenu);
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