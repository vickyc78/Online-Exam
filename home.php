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
	<style type="text/css">
		.con{
			background: rgb(99, 68, 179);

		}
	</style>
</head>
<body style="background-color: silver;">
	
	<div class=" col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block" style="background-color: black;" >
		<br><h1 class="text-center text-primary">Quiz Exam</h1><br>

		<h2 class=" text-center  text-white" >Welcome <?php echo $_SESSION['username']; ?></h2>

		
		
			<h3 class="text-center  text-white ">Welcome <?php echo $_SESSION['username']; ?> ,You have to select the best subject.</h3>

</div>

	<div class="container col-xl-8 col-lg-8 col-md-8 col-sm-8 m-auto d-block con">
		
		
		
		<form action="check.php" method="post">
		<?php

		for($i=1 ; $i <=5 ; $i++)
		{

		$q = "select * from questions where qid=$i";
		$query = mysqli_query($conn, $q);
	
		while ($rows =  mysqli_fetch_array($query) ) {

			?>

			<div >
				<h6 class="card card-header " style="background-color: #8A8CF0;"> <?php echo $rows['question']; ?> </h6>

				<?php
				 $q = "select * from answers where ans_id=$i";
		         $query = mysqli_query($conn, $q);
	
		         while ($rows =  mysqli_fetch_array($query) ) 
		         {
			    ?>
			       <div class="card-body  ">
				   <input type="radio" name="quizecheck[<?php echo $rows['ans_id']?>]" value="<?php echo $rows['aid']; ?>">
				   <?php 
				     echo $rows['answer'];
				   ?>
			</div>

<?php
	}
		}
			}
?>

			<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
			</form>
			</div>
			</div><br><br>
			<div class="m-auto d-block">
			<a href="logout.php" class="btn btn-danger  ">LOGOUT</a></button>
			</div><br><br>

			<div>
				<h6 class="text-primary text-center">@oline exam</h6>

			</div><br>
		</div>
	
	</body>
	</html>