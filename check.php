<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	

<?php

 session_start();
 if(!isset($_SESSION['username']))
 {
	header('location:login.php');
 }

 $conn = mysqli_connect('localhost','root','');
 mysqli_select_db($conn,'student');
?>
<div class="card">
<?php
	if(isset($_POST['submit']))
	{

		if(!empty($_POST['quizecheck']))
		{
			$count = count($_POST['quizecheck']);
?>
<div class="container-fluid card-block ">


			<h1 class="text-center text-success"><?php echo "out of 5,you have selected"  .$count. "options";?></h1>
<?php
			$result=0;
			$i = 1;

			$selected = $_POST['quizecheck'];
			#print_r($selected);

			$q="SELECT * FROM html";
			$query=mysqli_query($conn,$q);

			while ($rows = mysqli_fetch_array($query)) 
			{
				#print_r($rows['ans_id']);

				$checked = $rows['ans_id']  == $selected[$i];

				if($checked)
				{
					$result++;
				}

					$i++;		
			}
			?>


					<div class="text-center" style="color: red;"><?php echo "<br> your total score is".$result;
		}
	}
	?></div>
</div>
</div>


	<?php
					$name=$_SESSION['username'];
					$finalquery= "INSERT INTO user(username,totalquestion,answerescorrect) VALUES('$name','5','$result') ";
					$queryresult=mysqli_query($conn,$finalquery);




?>

</body>
</html>
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
       
  <ul class="pager">
  	
   <li><a href="home.php">Previous</a></li>
    <li><a href="logout.php">logout</a></li>
   
  </ul>
</div>

</body>
</html>
