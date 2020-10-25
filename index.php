
<?php
include 'logics/login1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css1/style.css">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="card sign my-5 mx-lg-5 py-lg-5 px-lg-5">
			
			<div class="card-body">
				<h3 class="card-title" style="text-align: center;">Sign In</h3>
				<form action="" method="post">
					<div class="form-row">
						<div class="form-group col-md-2">
							<label>Username:</label>
						</div>
						<div class="form-group col-md-10">
							<input type="text" name="uname" class="form-control" placeholder="Enter Username">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label>Password:</label>
						</div>
						<div class="form-group col-md-10">
							<input type="password" name="password" class="form-control" placeholder="Enter Password">
							<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							
						</div>
						<div class="form-group col-md-7">
							<div class="form-check">
								<input type="checkbox" class="form-check-input">
								<label class="form-check-label" for="gridCheck">Remember Me</label>
							</div>
						</div>
						<div class="form-group col-md-3">
							<label class="">Forget Password?</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							
						</div>
						<div class="col-md-5">
							<button class= "btn btn-success" href="" name="login">Sign In</button>
						</div>
						<div class="col-md-5">
							<button class= "btn btn-info" href="" name="signup">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>