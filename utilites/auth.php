<?php
session_start();
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('127.0.0.1','qwert','root','register-bg');
$result=$mysql->query("SELECT * FROM users WHERE email='$email' AND pass='$pass'");
$user=$result->fetch_assoc();
if (count($user) == 0) {
    header("Location: ../pages/regvhod.php?lol=Такой пользователь не найден");
}
else{
    $_SESSION['id_pok'] = $user['id'];
    setcookie("user", $user['name'], time()+3600,"/");
    $mysql->close();
    header('location: /index.php' );
}
?>