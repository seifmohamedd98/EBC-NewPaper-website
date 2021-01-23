<?php
	session_start();

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		$flag=true;
		
		$ArticleTextError=$HeadlineError="";
		$ArticleText=$Headline="";
		
		$sql="SELECT * FROM article WHERE ArticleID=".$_GET['id'].";";
		$result=mysqli_query($conn,$sql);
		
		if(!$result)
		{
			die('Invalid query: ' . mysqli_error($conn));
		}
		
		$row = mysqli_fetch_array($result);
		
		$_SESSION['Head Line']=$row['Headline'];
		$_SESSION['Article Text']=$row['ArticleText'];
		$_SESSION['c']=$row['Category'];
		
		
		$file = fopen("EditArticleLog.txt", 'a');
		
		
		if(isset($_POST['submit']))
		{
			$imageData=mysqli_real_escape_string($conn,file_get_contents($_FILES['image']['tmp_name']));
			
			if(empty($_POST['headline']))
			{
				$HeadlineError="*Headline can't be empty";
				fwrite($file, $HeadlineError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$_SESSION['Head Line']="";
				$flag=false;
			}
			else if(is_numeric($_POST['headline']))
			{
				$HeadlineError="*Headline can't consist of numbers only";
				fwrite($file, $HeadlineError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$flag=false;
			}
			else
			{
				$Headline=filter_var($_POST['headline'], FILTER_SANITIZE_MAGIC_QUOTES);
				$Headline=addslashes($Headline);
			}
			
			if(empty($_POST['articleArea']))
			{
				$ArticleTextError="*Article text can't be empty";
				fwrite($file, $ArticleTextError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$_SESSION['Article Text']="";
				$flag=false;
			}
			else if(is_numeric($_POST['articleArea']))
			{
				$ArticleTextError="*Article text can't consist of numbers only";
				fwrite($file, $ArticleTextError." by ".$_SESSION['username']." at ".date("Y-m-d h:i:sa").PHP_EOL);
				$flag=false;
			}
			else
			{
				$ArticleText=filter_var($_POST['articleArea'], FILTER_SANITIZE_MAGIC_QUOTES);
				$ArticleText=addslashes($ArticleText);
			}
			
			if($flag==true)
			{
				$sql2="UPDATE article SET Headline='".$_POST['headline']."', ArticleText='".$_POST['articleArea']."', Category='".$_POST['category']."', Image='".$imageData."' WHERE ArticleID=".$_GET['id'].";";
				$result2=mysqli_query($conn,$sql2);
				header("Location: EchoEditArticles.php");
			}
		}
		else if(isset($_POST['cancel']))
		{
			header("Location: EchoEditArticles.php");
		}
		else if(isset($_POST['delete']))
		{
			$sql3="DELETE FROM article WHERE ArticleID=".$_GET['id'].";";
			$result3=mysqli_query($conn,$sql3);
			if($result)
			{
				header("Location: EchoEditArticles.php");
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
  <title>Edit Article | EBC</title>
  
	<!--Bootstrap
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
	
  
  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
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

	<div class="bootstrap-iso"> <h1 class="jumbotron">Edit Article</h1> </div>

      <style>
         .error {color: #FF0000;}
      </style>

	<div class="articleCreationDiv" >
		<form action="" method="POST" class="form-group"  enctype="multipart/form-data">
			<?php
				$headLine=$_SESSION['Head Line'];
				$articleText=$_SESSION['Article Text'];
				$category=$_SESSION['c'];
			?>
			Headline: <input type="text" name="headline" class="form-control" value = '<?php echo $headLine ?>'>
			<span class = "error"><?php echo $HeadlineError;?></span>
			<br>
			Category:
			<?php
				//include('EchoCategory.php');
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "webproject";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql="SELECT * FROM category;";

				$result=mysqli_query($conn,$sql);
				
				$flag=true;
				$num=mysqli_num_rows($result);

				echo"<select name='category' class='form-control'>";
				for($i=0;$i<$num;$i++)
				{	
					$row = mysqli_fetch_array($result);
					if($category!=$row['CategoryName'])
					{
						echo "<option value='".$row['CategoryName']."'>".$row['CategoryName']."</option>";
					}
					else
					{
						echo "<option selected='selected' value='".$row['CategoryName']."'>".$row['CategoryName']."</option>";
					}
					$flag=false;
				}
				echo"</select>";
				
				if($flag==true)
				{
					echo "Nothing to show here.";
				}
				
				mysqli_close($conn);
			?>
			<!--<input type="text" name="category"/>-->
			<br>
			<!--Image Path: <input type="text" name="imagePath" class="form-control">-->
			Thumbnail:<input type="file" name="image" accept=".jpg" required>
			<br>
			Article:<br> 
			<textarea name="articleArea" style="width:100%; height:300px;"><?php echo $articleText ?></textarea>
			<span class = "error"><?php echo $ArticleTextError;?></span>
			<br>
			<input type="submit" value="Edit Article" name="submit" class="btn btn-success">
			<input type="submit" value="Delete Article" name="delete" class="btn btn-danger">
			<input type="submit" value="Cancel" name="cancel" class="btn btn-default">
		</form>
	</div>

   <!-------------------------------------------------------Footer---------------------------------------------------------------->
   <?php include "footer.php";?>

</body>

</html>