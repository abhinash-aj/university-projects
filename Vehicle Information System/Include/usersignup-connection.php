<?php
	
	if (isset($_POST['submit'])) {
		require 'connection.php';

		$name     = $_POST['name'];
		$email    = $_POST['email'];
		$phone    = $_POST['phone'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($name) || empty($email) || empty($phone) || empty($username) || empty($password)) {
			header("Location: ../user-signup.php?error=empty");
			exit();
		}
		else {
			$sql = "SELECT * FROM user_table WHERE username = '$username'";
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0) {
            	header("Location: ../user-signup.php?error=usertaken");
            }
            else {
            	$sql = "INSERT INTO user_table (name,email,phone,username,password) VALUES ('$name','$email',$phone,'$username','$password')";
            	mysqli_query($con, $sql);
                header("Location: ../user-signup.php?signup=success");
                exit();
            }
		}
	}
	else {
		header("Location: ../user-signup.php");
	}