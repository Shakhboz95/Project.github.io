<?php
	session_start();
include('products/config.php');

	if (isset($_POST['Log_btn'])){

		$username = $_POST['name'];
		$password = $_POST['pass'];
		
		$password = md5($password);
		$sql = "SELECT * FROM signin WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) == true) {
$_SESSION['logged']=true;
    		$_SESSION['username']=$username;
					header("location: index.php");
					exit();
		}else{
			$_SESSION['logged']=false;
			header("Location: Log.html");
			exit();
		}

	}
?>
