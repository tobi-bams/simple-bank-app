<?php
	include 'core/init.php';

	session_start();

	if(isset($_POST['login'])){
		$uname = $_POST['uname'];
		$pword = $_POST['password'];


/** PHP Code for Selection from the Database **/

$select = $db->query("SELECT * FROM `information` WHERE `username` = '$uname' AND `password` = '$pword'");
		if(mysqli_num_rows($select) > 0){
			while($rows = mysqli_fetch_array($select)){
				if($rows['username'] == "$uname" && $rows['password'] == "$pword"){
					$_SESSION['id'] = $rows['id'];
					echo "<script>window.open('home.php','_self')</script>";
				}
				else {
					
				}
			}
		}
	}

	if(isset($_POST['signup'])){
		echo "<script>window.open('registration.php', '_self')</script>";
	}
?>