<?php
$access_token = "Te8pbjQEYlVVXXuiGIkZEgV6gs2_9FfD5VjScBUzx1rCI-lt4ejB_JtJdFyoCEqH9c1Ab35Cjt3iXcth5h4SLWf1SSVWE6jO2HtiZdOi6Bg";


$type="image";
$filepath=dirname(__FILE__)."/1.jpg";
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