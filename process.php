<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'henry' && $password == '105923571') {
    $_SESSION['user'] = $username;
    header('Location: welcome.php');

} else {
    echo "Invalid login. <a href='login.html'>Try again</a>.";
}
?>