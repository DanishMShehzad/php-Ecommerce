<?php
	session_start();
	include('connection.php');
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "select * from `user_registration` where email = '".$email."' and password = '".$password."'";
	$result = $conn->query($sql);

	if($result){
		echo("Login");
	}
?>