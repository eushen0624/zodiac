<!DOCTYPE html>
<html>
<head>
	<title>Zodiac Landing Page</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/yeti/bootstrap.css">
</head>
<body>
	<div class="d-flex justity-content-center align-items-center">

		<?php
			session_start();
		

		$months = ["January","Febraury","March","April","May","June","July","August","September","October","November","December"];

		$birthMonth = 0;

		foreach($months as $month){
			if($month==$_SESSION["birthMonth"]){
			$index = array_search($month, $months);
			$birthMonth = $index + 1 ;
		}
		}

		var_dump($birthMonth);
		?>
	</div>
</body>
</html>