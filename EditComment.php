<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webproject";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql="SELECT * FROM comments WHERE id=".$_GET['id'].";";
	
	$result=mysqli_query($conn,$sql);
	
	//$row=mysqli_fetch_array($result);
	
	$comment=$row['comment'];
	
	if(isset($_POST['send']))
	{
		$sql2="UPDATE comments SET comment='".$_POST['comment']."' WHERE id=".$_GET['id'].";";
		$result2=mysqli_query($conn,$sql2);
	}

?>

<!DOCTYPE HTML>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">

		<!-- links of bootstrap 3 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	</head>
	<body>		
	<div class="container">	
		<h2 class="bootstrap-iso"> Edit comment </h2>
						
							
			<form method="post" action="">

				<div class="form-group">
					<textarea  class="form-control" name="comment"> <?php echo $comment ?></textarea>
					<br>
					<br>
					<br>
					<button class="btn btn-primary"  name="send"><b>Edit Comment</b></button>
				</div>
				
			</form>		
	</div>				

	</body>
</html>