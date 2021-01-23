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

		$articleError="";

		if(isset($_POST['submit']))
		{
			if(empty($_POST['news_full_content']))
			{
				$articleError="News Content is required";
				
			}
			else
			{
				$sql="INSERT INTO info_news(news_title,news_short_description,news_full_content,news_author,news_published_on,news_image) VALUES('".$_POST['news_title']."','".$_POST["news_short_description"]."','".$_POST["news_full_content"]."','".$_POST["news_author"]."','".$_POST["news_published_on"]."','".$_POST['news_image']."')";
				$result=mysqli_query($conn,$sql);
				echo $sql; 
				if($result)	
				{
					echo "<script type='text/javascript'>alert('News created successfully.');</script>";
					header("Location:IndexNews.php");
					echo "rvnkaefnv";
				}
				
			}
		}
	/*}
else
{
	echo "<script type='text/javascript'>alert('You Cannot Enter This Page Directly');</script>";
}*/


?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Add Article | EBC</title>
  
	<!--Bootstrap
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
	
  
  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
	<link rel="stylesheet" type="text/css" href="WorldNews_CSS.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 3ashan icons el social media-->
	
    	<!-- links of bootstrap 3 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->

	<!--<link rel="stylesheet" href="jquery-ui.min.css">
	<script src="external/jquery/jquery.js"></script>
	<script src="jquery-ui.min.js"></script>-->	

    

</head>

<body>


    <!-------------------------------------------------------Header---------------------------------------------------------------->
    <?php include "header.php";?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->
    <div id="content">

	<div class="bootstrap-iso"> <h1 class="jumbotron">Health News Creation</h1> </div>



	<div class="articleCreationDiv" >
		<form action="" method="POST" class="form-group">
		
			Title: <input type="text" name="news_title" class="form-control">
			<br>
			Image Path: <input type="text" name="news_image" class="form-control">
			<br>
			Short Description:<br> 
			<textarea name="news_short_description" style="width:100%; height:300px;"></textarea>
			<br>
			Full Description:<br> 
			<textarea name="news_full_content" style="width:100%; height:300px;"></textarea>
			<br>
			Author: <input type="text" name="news_author" class="form-control">
			<br>
			<br>
			Published on: <input type="date" name="news_published_on" class="form-control">
			<br>
			<input type="submit" value="Submit Article" name="submit" class="btn btn-success">
		</form>
	</div>







    </div>
   <!-------------------------------------------------------Footer---------------------------------------------------------------->
   <?php include "footer.php";?>

</body>

</html>