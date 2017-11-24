
<?php

session_start();
$url = 'http://attendance-drupal-8.4.2/user/login?_format=json';

$json = '{
"name": "'.$_POST['username'].'",
"pass": "'.$_POST['password'].'"
}';

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
$user = json_decode($result, TRUE);

print '<pre>'; print_r("user"); print '<pre>';
print '<pre>'; print_r($user); print '<pre>';
$_SESSION['user_id'] = $user['current_user']['uid'];
$_SESSION['logout_token'] = $user['logout_token'];

echo '<a href="user.php">User Details</a>';
echo '<a href="user-logout.php">Logout</a>';
