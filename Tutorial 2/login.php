<?php
	$username = "root";
	$password = "test123";
	$hostname = "localhost";
	
	$dbhandle = mysql_connect($hostname, $username, $password) or die ("Could not connect to database ya");
	$selected = mysql_select_db("login", $dbhandle);
	
	$myusername = $_POST['user'];
	$mypassword = $_POST['pass'];
	
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	
	$query = "SELECT * FROM users WHERE Username='$myusername' and Password = '$mypassword'";
	$result = mysql_query($query);
	
	$count = mysql_num_rows($result);
	
	if($count==1) {
		echo 'It worked!';
	}
?>