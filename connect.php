<?php
	$servername = "mysql.idhostinger.com";
	$db_username = "u544468788_user";
	$db_password = "romegostailor";

	$conn = new mysqli($servername, $db_username, $db_password, "u544468788_sia");
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

?>