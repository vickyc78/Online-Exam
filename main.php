<?php
require 'test.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-lg-1 col-xl-1  ">
			<div class="card" style="width: 100px;">
				<img class="card-img-top" src="html.png" alt="html image" style="width: 50px;">
				<div class="card-body">
				<a href="html.php" class="text-center text-success">html</a>
			</div>
			</div>
		</div>
		<div class="col-xs-1 col-sm-1 col-lg-1 col-xl-1  ">
			<div class="card" style="width: 100px;">
				<img src="javascript.png" style="width: 100px;" alt="javascript image" class="card-img-top">
				<div class="card-body">
				<a href="#" class="text-success text-center">javascript</a>
			</div>
			</div>
		</div>
		<div class="col-xs-1 col-sm-1 col-lg-1 col-xl-1">
			<div class="card" style="width: 100px;">
				<img src="CSS3.png" alt="css image" class="card-img-top" style="width: 45px;">
				<div class="card-body">
					<a href="css.php" class="text-center text-success">css</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>
