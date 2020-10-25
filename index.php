<?php
	include 'logics/logic.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container my-lg-5">
		<div class="card">
			<div class="class-body">
				<div class="card-title my-lg-5 mx-lg-4">
					<?php
						while($rowss = mysqli_fetch_array($select2)){
						echo "<h1 class = 'card-title'> Welcome Back ".$rowss['fname']."</h1>";
					}
					?>
				</div>
				<form method="post">
					<div class="form-group my-lg-5 mx-lg-4">
						<label>Enter Amount:</label>
						<input type="number" name="money" class="form-control">
					</div>
					<div class="form-row my-lg-5 mx-lg-4">
						<div class="form-group col-md-4">
							<button type="submit" class="btn btn-success" name="save">Deposit</button>
						</div>
						<div class="form-group col-md-4">
							<button type="submit" class="btn btn-success" name="debit">Withdraw</button>
						</div>
						<div class="form-group col-md-4">
							<button type="submit" class="btn btn-success" name="history">History</button>
						</div>
					</div>
				</form>
				<table class="table table-hover table-dark ">
					<tr class="row mx-lg-3">
						<td class="col-md-12">Your Account Balance is:</td>
						
					</tr>
					<tr class="row mx-lg-3">
						<td class="col-md-12"><?php echo $balance;?></td>
					</tr>
				</table>
			</div>
		</div>
				<form method="post">
					<div class="container mt-lg-12">
						<button class="btn btn-success" type="submit" name="log_out">Log Out</button>
					</div>
				</form>
	</div>
</body>


</html>