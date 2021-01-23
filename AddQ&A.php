<?php
		session_start();
		//if($_SERVER['REQUEST_METHOD'] =='POST')
		//{
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		if(isset($_POST['submit']))
		{		
				$sql="INSERT INTO questions(Message, Answer) VALUES('".$_POST['question']."', '".$_POST["answerArea"]."');";
				$result=mysqli_query($conn,$sql);
				
				if($result)	
				{
					header("Location: Help.php");			
				}
				else
				{
					die('Invalid query: ' . mysqli_error($conn));
				}
		}

mysqli_close($conn);
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Add Q&A | EBC</title>
  
	<!-- links of bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
  
  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 3ashan icons el social media-->
    

</head>

<body>
    <!-------------------------------------------------------Header---------------------------------------------------------------->
    <?php include "header.php";?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->
	<div class="bootstrap-iso"> <h1 class="jumbotron">Add Q&A</h1> </div>

      <style>
         .error {color: #FF0000;}
      </style>

	<div class="Q&ADiv" >
		<form action="" method="POST" class="form-group"  enctype="multipart/form-data">
		
			Question: <input type="text" name="question" class="form-control">
			<br>
			Answer:<br> 
			<textarea name="answerArea" style="width:100%; height:200px;"></textarea>
			<br>
			<input type="submit" value="Submit Q&A" name="submit" class="btn btn-success">
		</form>
	</div>


   <!-------------------------------------------------------Footer---------------------------------------------------------------->
   <?php include "footer.php";?>

</body>

</html>