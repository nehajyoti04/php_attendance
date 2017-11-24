<?php
session_start();
print '<pre>'; print_r("session"); print '</pre>';
print '<pre>'; print_r($_SESSION); print '</pre>';

session_destroy();

// $url = "http://attendance-drupal-8.4.2/?q=user/logout?_format=json&token=". $_SESSION['logout_token'];

// $url = "http://attendance-drupal-8.4.2/user/logout?_format=json&token='". $_SESSION['logout_token'] ."'";
$url = "http://attendance-drupal-8.4.2/user/logout";

echo $url;
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_URL, $url);



// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: text/html')
// );





$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: text/html')
);

$result1 = curl_exec($ch);
print '<pre>'; print_r("trial 1 - json decode"); print '</pre>';
print '<pre>'; print_r(json_decode($result1, TRUE)); print '</pre>';





// $ch = curl_init();

// curl_setopt_array($ch, array(
//   CURLOPT_URL => $url,
//   CURLOPT_RETURNTRANSFER => true,
//   // CURLOPT_TIMEOUT => 30,
//   // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_SSL_VERIFYPEER => false,
//   CURLOPT_HTTPHEADER => array(
//     'Content-Type: text/html'
//   ),
// ));




// $result1 = curl_exec($ch);

// print '<pre>'; print_r("trial 1"); print '</pre>';
// echo $result1;

// print '<pre>'; print_r("trial 1 - json decode"); print '</pre>';
// print '<pre>'; print_r(json_decode($result1, TRUE)); print '</pre>';


// // session_destroy();



// // print '<pre>'; print_r($result1); print '</pre>';
// // curl_close($ch);

