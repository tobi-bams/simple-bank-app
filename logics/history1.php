<?php

	include 'core/init.php';
	include 'logic.php';

	$history_deposit = $db->query("SELECT * FROM account WHERE `user_id` = '$session' AND `deposit` != 0");

	/**if(mysqli_num_rows($history_deposit) > 0){
		while($history_row = mysqli_fetch_array($history_deposit)){
			$date = $history_row['date'];
			 $deposit = $history_row['deposit'];
			
		}
	}**/

	$history_withdraw = $db->query("SELECT * FROM account WHERE `user_id` = '$session' AND `withdraw` != 0");

	if(isset($_POST['log_out'])){
		session_unset();
		session_destroy();


	echo "<script>window.open('login.php','_self')</script>";
	}

	
  ?>
