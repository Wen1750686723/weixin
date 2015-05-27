<?php
$access_token = "aysAB-EUnjaDYrQlj4YC1cD-arwd7a3xqgw_vgf6Syybm1RmS470Ffmbt93pxihgHi5wKkxIGNrN5jszku9U5IWS3L_HxPRKOQaqHugQ1Fc";

header("Content-Type: text/html;charset=utf-8");

$url = "https://api.weixin.qq.com/cgi-bin/material/get_materialcount?access_token=".$access_token;
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