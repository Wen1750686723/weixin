<?php
$access_token = "bjCPR5AofmUmfNZscdYe8TZ1tAGaMKvJpMjd-sYBXnB1dgrU8H9i0Key90G28dwM-pQPHTLEDDf5MTrhvI05eWCjnkTuyNQgd0iMP5Dxp3I";

$jsonmenu = '{
   "articles": [
         {
                        "thumb_media_id":"CfQP79CyLjW_cibpWzeIaLMkJLWB1EU9hkAPwtT0tckOmVfy9AziFsBcr3AH1LE8",
                        "author":"xxx",
             "title":"Happy Day",
             "content_source_url":"www.qq.com",
             "content":"content",
             "digest":"digest",
                        "show_cover_pic":"1"
         },
         {
                        "thumb_media_id":"CfQP79CyLjW_cibpWzeIaLMkJLWB1EU9hkAPwtT0tckOmVfy9AziFsBcr3AH1LE8",
                        "author":"xxx",
             "title":"Happy Day",
             "content_source_url":"www.qq.com",
             "content":"content",
             "digest":"digest",
                        "show_cover_pic":"0"
         }
   ]
}';


$url = "https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token=".$access_token;
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