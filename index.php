<?php

echo "Hello";

session_start();
print '<pre>'; print_r("session"); print '</pre>';
print '<pre>'; print_r($_SESSION); print '</pre>';


if ($_SESSION) {
  echo '<a href="user.php">User Details</a>';
  echo '<a href="user-logout.php">Logout</a>';
}
else {

?>


<form action="register.php" method="post">
Username: <input type="text" name="username" value="<?php echo $username;?>">
E-mail: <input type="email" name="email" value="<?php echo $email;?>">

Password: <input type="password" name="password" value="<?php echo $password;?>">

<input type="submit">
</form>



<form action="login.php" method="post">
Username: <input type="text" name="username" value="<?php echo $username;?>">
Password: <input type="password" name="password" value="<?php echo $password;?>">

<input type="submit">
</form>

<?php
}
?>

