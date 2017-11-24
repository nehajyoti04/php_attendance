<?php
session_start();
print '<pre>'; print_r("session"); print '</pre>';
print '<pre>'; print_r($_SESSION); print '</pre>';


$url = "http://attendance-drupal-8.4.2/user/" . $_SESSION['user_id'] . "?_format=json";

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);
$result1 = curl_exec($ch);

print '<pre>'; print_r("trial 1"); print '</pre>';
echo $result1;

$array = json_decode($result1, TRUE);
$user_picture = $array['uid'][0]['value'];
$user_picture = $array['user_picture'][0];
// echo $user_picture;
echo '<div align=center><img src='.$user_picture['url'].' alt='.$user_picture['alt'].' width='.$user_picture['width'].' height = '.$user_picture['height'].'></div>';
print '<pre>'; print_r("trial 1 - json decode"); print '</pre>';
print '<pre>'; print_r(json_decode($result1, TRUE)); print '</pre>';






print '<pre>'; print_r($result1); print '</pre>';
curl_close($ch);

