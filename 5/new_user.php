<?php
$hostname = "localhost";
$username = "root";
$password = "root123";

$dbhandle = mysqli_connect($hostname, $username, $password) or die("Could not connect to database");

$selected = mysqli_select_db($dbhandle,"login" );

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $query = mysqli_query($dbhandle,"SELECT * FROM users WHERE Username='$user'");
    if (mysqli_num_rows($query) > 0) { //check if there is already an entry for that username
        echo "Username already exists!";
    } else {
        mysqli_query($dbhandle, "INSERT INTO users (Username, Password) VALUES ('$user', '$pass')");
        header("location:index.php");
    }
}
mysqli_close($dbhandle);
?>

<html>
<body>
<h1>Signup!</h1>
<form action="new_user.php" method="POST">
    <p>Username:</p><input type="text" name="user"/>
    <p>Password:</p><input type="password" name="pass"/>
    <br/>
    <input type="submit" value="Signup!"/>
</form>
</body>
</html>