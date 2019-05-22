<?php
	//  replace mysqllogin and mysqlpassword with your own
	//$conn = mysqli_connect("localhost", "21704443", "mysqluser", "db1_21704443");
	$conn = mysqli_connect("localhost", "root", "", "db1_21704443");

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
