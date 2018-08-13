<?php

session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

$conn = mysqli_connect('localhost','root','');
mysqli_select_db($conn,'student');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	
</head>
<body style="background-color: silver;">
	<div class="container">
		<div class="col-lg-8 col-xl-8 col-sm-8 col-xs-8 col-md-8 m-auto d-block" style="background-color: black;">
			<br><h1 class="text-center text-primary" >Quize exam</h1><br>
			<h2 class="text-primary text-center">welcome <?php echo $_SESSION['username']; ?></h2>
			<h3 class="text-center text-primary">welcome <?php echo $_SESSION['username']; ?> , you have to select best subject</h3>
		</div>
	</div>
<div class="container">
	<div class="col-lg-8 col-xl-8 col-sm-8 col-xs-8 col-md-8 m-auto d-block" style="background-color: orange;">
		<form action="check.php" method="POST">
		<?php
		for($i=1;$i<=5;$i++)
		{
			$query="SELECT * FROM css WHERE qid=$i" ;
			$result=mysqli_query($conn,$query);
			while ($rows = mysqli_fetch_array($result))
			 {
				?>


				<div>
				<h6 class="card  card-header"><?php echo $rows['questions']; ?> </h6>


				<?php
				$query="SELECT * FROM cssanswere WHERE ans_id=$i";
				$result=mysqli_query($conn,$query);
				while ($rows = mysqli_fetch_array($result)) 
				{
					?>

					
				<div class="card-body" >
					<input  type="radio" name="quizecheck[<?php echo $rows['ans_id'] ?>]" value="<?php echo $rows['aid'] ?>">
				 <?php echo $rows['answeres']; ?>
				</div>

				<?php

			}

		}

	}

	?>

			<input type="submit" name="submit" value="submit" class=" btn-success m-auto d-block">
		</form>
	</div>
	
</div>
<br><br>

<div class="m-auto d-block">
	<a href="logout.php" class="btn btn-danger ">logout</a>
</div><br><br><br><br><br><br><br>

<div>
	<h6 class="text-primary text-center">@online exam</h6>
</div>

</body>
</html>


