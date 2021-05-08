<?php
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('127.0.0.1','qwert','root','register-bg');
$mysql->query("INSERT INTO `users` ( `name`, `pass`, `email`) VALUES ('$name', '$pass', '$email')") ;

$mysql->close();
header('location: /index.php' );
?>