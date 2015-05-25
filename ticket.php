<?php
$access_token = "gQHH7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xLzZVTjBNOXpsYlBJVkNSbmFqV3R5AAIESO9iVQMEAAAAAA==";

$jsonmenu = '';


$url = "https://mp.weixin.qq.com/cgi-bin/showqrcode?ticket=".$access_token;
$result = getImage($url);
var_dump($result);

function getImage($url,$filename='',$type=0){
    if($url==''){return false;}
    if($filename==''){
        $ext=strrchr($url,'.');
        if($ext!='.gif' && $ext!='.jpg'){return false;}
        $filename=time().$ext;
    }
    //文件保存路径 
    if($type){
  $ch=curl_init();
  $timeout=5;
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $img=curl_exec($ch);
  curl_close($ch);
    }else{
     ob_start(); 
     readfile($url);
     $img=ob_get_contents(); 
     ob_end_clean(); 
    }
    $size=strlen($img);
    //文件大小 
    $fp2=@fopen($filename,'a');
    fwrite($fp2,$img);
    fclose($fp2);
    return $filename;
}
?>