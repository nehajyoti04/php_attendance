<?php
ini_set("allow_url_fopen", 1);

$csrf_token = "MOyBRpje3IoTSypYMESzbJdR06jgjaebA-yr9ml2mNY";
$logout_token = "Zm1JqjBGEULeIGrhU21E0DPB31A_Po1kyChjqWhSmlM";
session_start($csrf_token);

$result = '{"current_user":{"uid":"5","name":"neha1"},"csrf_token": "'.$csrf_token .'","logout_token":"'.$logout_token.'"}'
;



print '<pre>'; print_r("result"); print '</pre>';
print '<pre>'; print_r($result); print '</pre>';

$user = serialize(json_decode($result));


print '<pre>'; print_r("user"); print '</pre>';
print '<pre>'; print_r($user); print '</pre>';


// $user = $result;


$url = "http://attendance-drupal-8.4.2/rest/user/".$result;










$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result1 = curl_exec($ch);

echo $result1;
print '<pre>'; print_r("result"); print '</pre>';
print '<pre>'; print_r($result1); print '</pre>';
curl_close($ch);

$obj = json_decode($result1);
echo $obj->access_token;



