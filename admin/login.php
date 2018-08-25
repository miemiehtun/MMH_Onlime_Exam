<?php
	$username = $_POST ['user_name'];
	$password = $_POST ['password'];
	if($username == "admin" && $password == "01234")
		{
			header("location:question.php");
		}
	else
		{
			header("location:index.php");
		}
?>