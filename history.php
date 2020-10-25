<?php
	include 'logics/history1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;">Deposit History</h1>
		<table class="table">
			<thead>
				<th scope="col">Date</th>
				<th scope="col">Deposit Amount</th>
			</thead>
			
				<?php while($history_row = mysqli_fetch_assoc($history_deposit)):
							$date = $history_row['date'];
							$deposit = $history_row['deposit'];
				?>
				<tbody>
					<td><?php echo $date;?></td>
					<td><?php echo $deposit;?></td>
				</tbody>
				<?php endwhile;?>
		</table>
		<h1 style="text-align: center;">Withdrawal History</h1>
		<br>
		<table class="table">
			<thead>
				<th scope="col">Date</th>
				<th scope="col">Withdrawal Amount</th>
			</thead>
			
				<?php while($history_row2 = mysqli_fetch_assoc($history_withdraw)):
							$date1 = $history_row2['date'];
							$withdraw = $history_row2['withdraw'];
				?>
				<tbody>
					<td><?php echo $date1;?></td>
					<td><?php echo $withdraw;?></td>
				</tbody>
				<?php endwhile;?>
		</table>

		<table class="table table-dark">
			<tr>
				<td>Your Current Account Balance:</td>
				<td><?php echo $balance;?></td>
			</tr>
		</table>
		<form method="post">
			<div>
				<button type="submit" class="btn btn-success" name="log_out">Log out</button>
			</div>
		</form>
	</div>
</body>
</html>