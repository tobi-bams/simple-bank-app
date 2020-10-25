<?php
	
	session_start();
	$session = $_SESSION['id'];

	include 'core/init.php';

	$select2 = $db->query("SELECT * FROM `information` WHERE `id` = '$session'");


		$check = $db->query("SELECT SUM(deposit) AS deposit_total FROM account WHERE `user_id` = '$session'");
				$rows2 = mysqli_fetch_assoc($check);
				$deposit_amount = $rows2['deposit_total'];
				/**echo $deposit_amount. "<br>";**/

				$check2 = $db->query("SELECT SUM(withdraw) AS withdraw_total FROM account WHERE `user_id` = '$session'");
				$rows3 = mysqli_fetch_assoc($check2);
				$withdraw_amount = $rows3['withdraw_total'];
				/**echo $withdraw_amount. "<br>";**/

				$balance = $deposit_amount - $withdraw_amount;
				/**echo $balance;**/

	if(isset($_POST['save'])){
		$money = $_POST['money'];

		$input = $db->query("INSERT INTO account (user_id, deposit) VALUES ('$session', '$money') ");
		$check = $db->query("SELECT SUM(deposit) AS deposit_total FROM account WHERE `user_id` = '$session'");
		$rows2 = mysqli_fetch_assoc($check);
		$deposit_amount = $rows2['deposit_total'];
		/**echo $deposit_amount. "<br>";**/

		$check2 = $db->query("SELECT SUM(withdraw) AS withdraw_total FROM account WHERE `user_id` = '$session'");
		$rows3 = mysqli_fetch_assoc($check2);
		$withdraw_amount = $rows3['withdraw_total'];
		/**echo $withdraw_amount. "<br>";**/

		$balance = $deposit_amount - $withdraw_amount;
		/**echo $balance;**/


		

		
	}

	else if(isset($_POST['debit'])){
		$money = $_POST['money'];

		$input2 = $db->query("INSERT INTO account (user_id, withdraw) VALUES ('$session', '$money') ");
		$check = $db->query("SELECT SUM(deposit) AS deposit_total FROM account WHERE `user_id` = '$session'");
		$rows2 = mysqli_fetch_assoc($check);
		$deposit_amount = $rows2['deposit_total'];
		/**echo $deposit_amount. "<br>";**/

		$check2 = $db->query("SELECT SUM(withdraw) AS withdraw_total FROM account WHERE `user_id` = '$session'");
		$rows3 = mysqli_fetch_assoc($check2);
		$withdraw_amount = $rows3['withdraw_total'];
		/**echo $withdraw_amount. "<br>";**/

		$balance = $deposit_amount - $withdraw_amount;
		/**echo $balance;**/

	}

	/**if(isset($_POST['check_balance'])){
		$check = $db->query("SELECT SUM(deposit) AS deposit_total FROM account WHERE `user_id` = '$session'");
		$rows2 = mysqli_fetch_assoc($check);
		$deposit_amount = $rows2['deposit_total'];
		echo $deposit_amount. "<br>";**/

		/**$check2 = $db->query("SELECT SUM(withdraw) AS withdraw_total FROM account WHERE `user_id` = '$session'");
		$rows3 = mysqli_fetch_assoc($check2);
		$withdraw_amount = $rows3['withdraw_total'];
		/**echo $withdraw_amount. "<br>";

		$balance = $deposit_amount - $withdraw_amount;
		/**echo $balance;
	}**/

	if(isset($_POST['history'])){
		echo "<script>window.open('history.php','_self')</script>";
	}

	if(isset($_POST['log_out'])){
		session_unset();
		session_destroy();


	echo "<script>window.open('login.php','_self')</script>";
	}

	

	

?>