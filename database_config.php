<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "engineering_connect";

	$connect = mysqli_connect($server, $username, $password, $db_name);

	if (!$connect)
	{
		die("Connection Failed: " . mysqli_connect_error());
	}
	else
	{
		//echo "Successfull Connection<br>";
	}
?>