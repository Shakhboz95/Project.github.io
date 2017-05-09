<?php

	session_start();
	include 'function.php';

	include_once('products/config.php');


	if (isset($_POST['btn'])){
	
		$user =$_POST["name"];
		$email =$_POST["mail"];
		$pass =$_POST["pass"];
		$pass2 =$_POST["pass2"];

		if ($pass == $pass2) {
			$pass = md5($pass);
			$sql = "INSERT INTO signin(username, email, password) VALUES('$user', '$email', '$pass')";
			mysqli_query($conn , $sql);
			$_SESSION['message'] = "You are logged in";


		$sql2 = "SELECT * FROM signin WHERE username = '$user' AND password = '$pass'";
		$result = mysqli_query($conn, $sql2);

		if (mysqli_num_rows($result) == true) {
$_SESSION['logged']=true;
    		$_SESSION['username']=$user;
					header("location: index.php");
					exit();
		}else{
			$_SESSION['logged']=false;
			header("Location: Log.html");
			exit();
		}
		}else{
			die("Incorrect");
		}

	}
?>

