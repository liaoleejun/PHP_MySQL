<?php

$hostname = "localhost";
$username = "root";
$password = "root123";

$dbhandle = mysqli_connect($hostname, $username, $password) or die("Could not connect to database");

$selected = mysqli_select_db($dbhandle, "login");

$myusername = $_POST['user'];
$mypassword = $_POST['pass'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$query = "SELECT * FROM users WHERE Username='$myusername' and Password='$mypassword'";
$result = mysqli_query($dbhandle,$query);
$count = mysqli_num_rows($result);

mysqli_close($dbhandle);

if ($count == 1) {
    $seconds = 120 + time();
    setcookie('loggedin', date("F jS - g:i a"), $seconds);
    header("location:login_success.php");
} else {
    echo 'Incorrect Username or Password';
}
