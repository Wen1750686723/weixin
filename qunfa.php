<?php
$access_token = "bjCPR5AofmUmfNZscdYe8TZ1tAGaMKvJpMjd-sYBXnB1dgrU8H9i0Key90G28dwM-pQPHTLEDDf5MTrhvI05eWCjnkTuyNQgd0iMP5Dxp3I";


$type="image";
$filepath=dirname(__FILE__)."/1.png";
echo $filepath;
$filedata=array("media" => "@".$filepath);
$url="https://api.weixin.qq.com/cgi-bin/media/upload?access_token=$access_token&type=$type";
$res=https_request($url,$filedata);
var_dump($res);
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