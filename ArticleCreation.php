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

		$ArticleTextError=$HeadlineError="";
		$ArticleText=$Headline="";
		
		$flag=true;
		
		$file = fopen("ArticleCreationLog.txt", 'a');
		if(isset($_POST['submit']))
		{
			if(empty($_POST['headline']))
			{
				$HeadlineError="*Headline can't be empty";
				//error_log($HeadlineError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL , 3, "ErrorLog.txt");
				fwrite($file, $HeadlineError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$flag=false;
			}
			else if(is_numeric($_POST['headline']))
			{
				$HeadlineError="*Headline can't consist of numbers only";
				//error_log($HeadlineError." by user ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL , 3, "ErrorLog.txt");
				fwrite($file, $HeadlineError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$flag=false;
			}
			else
			{
				$Headline=filter_var($_POST['headline'], FILTER_SANITIZE_MAGIC_QUOTES);
				//$Headline=mysqli_real_escape_string($conn,$Headline);
				$Headline=addslashes($Headline);
			}
			
			if(empty($_POST['articleArea']))
			{
				$ArticleTextError="*Article text can't be empty";
				//error_log($ArticleTextError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL , 3, "ErrorLog.txt");
				fwrite($file, $ArticleTextError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$flag=false;
			}
			else if(is_numeric($_POST['articleArea']))
			{
				$ArticleTextError="*Article text can't consist of numbers only";
				//error_log($ArticleTextError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL , 3, "ErrorLog.txt");
				fwrite($file, $ArticleTextError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$flag=false;
			}
			else
			{
				$ArticleText=filter_var($_POST['articleArea'], FILTER_SANITIZE_MAGIC_QUOTES);
				//$ArticleText=mysqli_real_escape_string($conn,$ArticleText);
				$ArticleText=addslashes($ArticleText);
			}

			if($flag==true)
			{	
				$imageData=mysqli_real_escape_string($conn,file_get_contents($_FILES['image']['tmp_name']));
				$sql="INSERT INTO article(Headline, ArticleText, Category, Image, CreationDate, Author) VALUES('".$_POST['headline']."','".$_POST["articleArea"]."','".$_POST["category"]."','".$imageData."','".date("Y-m-d")."','".$_SESSION['username']."'); ";
				$result=mysqli_query($conn,$sql);
				
				if($result)	
				{
					echo "<script type='text/javascript'>alert('Article created successfully.');</script>";
					header("Location:".$_POST['category'].".php");
				}
				else
				{
					die('Invalid query: ' . mysqli_error($conn));
				}
			}
		}
		fclose($file);
		
	/*}
else
{
	echo "<script type='text/javascript'>alert('You Cannot Enter This Page Directly');</script>";
}*/

mysqli_close($conn);
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Article Creation | EBC</title>
  
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
	<div class="bootstrap-iso"> <h1 class="jumbotron">Article Creation</h1> </div>
	
      <style>
         .error {color: #FF0000;}
      </style>

	<div class="articleCreationDiv" >
		<form action="" method="POST" class="form-group"  enctype="multipart/form-data">
		
			Headline: <input type="text" name="headline" class="form-control" value=<?php echo $Headline; ?>>
			<span class = "error"><?php echo $HeadlineError;?></span>
			<br>
			Category:
			<?php
				include('EchoCategory.php');
			?>
			<br>
			Thumbnail:<input type="file" name="image" accept=".jpg" required>
			<br>
			Article:<br> 
			<textarea name="articleArea" style="width:100%; height:300px;"><?php echo $ArticleText; ?></textarea>
			<span class = "error"><?php echo $ArticleTextError;?></span>
			<br>
			<input type="submit" value="Submit Article" name="submit" class="btn btn-success">
		</form>
	</div>




   <!-------------------------------------------------------Footer---------------------------------------------------------------->
   <?php include "footer.php";?>

</body>

</html>