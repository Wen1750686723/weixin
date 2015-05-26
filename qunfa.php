<?php
$access_token = "nX-8aX8727PvJSAAIYhiMeKbzCXRr8DOQ60ShfHxOAhidB28DFdoFnN4qwxinfAKaIeigV2u49U61oKYq5wvAlHLW3jDB858ofqsRPzjKlg";

$jsonmenu = '{
   "articles": [
         {
                        "thumb_media_id":"1.png",
                        "author":"xxx",
             "title":"Happy Day",
             "content_source_url":"www.qq.com",
             "content":"content",
             "digest":"digest",
                        "show_cover_pic":"0"
         },
         {
                        "thumb_media_id":"",
                        "author":"xxx",
             "title":"Happy Day",
             "content_source_url":"www.qq.com",
             "content":"content",
             "digest":"digest",
                        "show_cover_pic":"0"
         }
   ]
}';


$url = "https://api.weixin.qq.com/cgi-bin/material/add_news?access_token=".$access_token;
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