<?php

	include 'core/init.php';

	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$oname = $_POST['oname'];
		$gender = $_POST['gender'];
		$state = $_POST['state'];
		$email = $_POST['email'];
		$username = $_POST['uname'];
		$password = $_POST['password'];

		$insert = $db->query("INSERT INTO information (fname, lname, oname, gender, state, email, username, password) VALUES ('$fname', '$lname', '$oname', '$gender', '$state', '$email', '$username', '$password')");

			if($insert){
				echo "Inserted Successfully";
				echo "<script>window.open('index.php', '_self')</script>";
			}
	}
?>