<!DOCTYPE html>
<html>
<head>
	<title>ZODIAC - HTML</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/yeti/bootstrap.css">
</head>
<body class="bg-white">
	<h1 class="text-center ">Zodiac Checker</h1>
	<div class="col-lg-4 offset-lg-4">
		<form class="bg-warning p-4" action="../controllers/checking-process.php" method="POST">
			<div class="form-group">
				<label for="fname" >Full Name</label>
				<input type="text" name="fname" class="form-control">
			</div>
			<div class="form-group">
				<label for="name" >Birth Month</label>
				<select class="form-control" name ="birthMonth">
					<option>January</option>
					<option>Febraury</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
				</select>
			</div>
			<div class="form-group">
				<label>Birth Day</label>
				<input type="text" name="birthDay" class="form-control">
			</div>
			<div class="text-center">
				<button class="btn btn-primary">Check Zodiac</button>
			</div>

			<?php 
				session_start();
				session_destroy();

				if(isset($_SESSION['errorMsg'])){
			?>

			<p class="text-danger">
				<?php 
					echo $_SESSION['errorMsg'];
						}
				?>

			</p>
		</form>
	</div>
</body>
</html>