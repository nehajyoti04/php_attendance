<?php


$url = 'http://attendance-drupal-8.4.2/user/register?_format=json';

// $name = $_POST['username'];
// $email = $_POST['email'];
// $password = $_POST['password'];

// $name = "neha1";
// $email = "neha1@mailinator.com";
// $password = "neha1";


$json = '{
"name": { "value": "'.$_POST['username'].'" },
"mail": { "value": "'.$_POST['email'].'" },
"pass": { "value": "'.$_POST['password'].'" }
}';

// $client = new Zend_Http_Client($url);
// $client->setRawData($json, 'application/json')->request('POST');







$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Content-Length: ' . strlen($data_string))
// );


curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json')
);

$result = curl_exec($ch);

print "<pre>"; print_r("result"); print '</pre>';
print "<pre>"; print_r($result); print '</pre>';



