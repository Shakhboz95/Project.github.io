<?php
	session_start();
	session_destroy();

	unset($_SESSION['username']);
	header("location: index.html");

	echo "<script> alert('Your input is correct');</script>";
?>