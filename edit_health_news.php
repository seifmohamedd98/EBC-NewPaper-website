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

		$NewsID = $_GET['id'];
		$sql   = "SELECT * FROM info_news WHERE news_id = '$NewsID'";
		$res   = $conn->query($sql);
		if ($res->num_rows > 0) {
			$row = $res->fetch_assoc();
		}	
	/*}
else
{
	echo "<script type='text/javascript'>alert('You Cannot Enter This Page Directly');</script>";
}*/


?>

	<?php  

	    $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);


	if (isset($_POST['submit'])) {
		$news_id = $_GET['id'];
		$news_title = $_POST['news_title'];
		$news_image = $_POST['news_image'];
		$news_short_description = $_POST['news_short_description'];
		$news_full_content = $_POST['news_full_content'];
		$news_author = $_POST['news_author'];
		$news_published_on = $_POST['news_published_on'];

		$query = "UPDATE info_news SET news_title='$news_title', news_image='$news_image', news_short_description='$news_short_description', news_full_content='$news_full_content', news_author='$news_author', news_published_on='$news_published_on' WHERE news_id=$news_id";

		if (mysqli_query($conn, $query)) {		
			
			header('Location:IndexNews.php');
		} else {
			echo 'error';
		}

	} 

?>
<!DOCTYPE HTML>

<html>

<head>
  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
	<link rel="stylesheet" type="text/css" href="WorldNews_CSS.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 3ashan icons el social media-->
	<style>
		.input {
		    padding: 5px;
		    border: 1px solid #333;
		    border-radius: 2px;			
		}	
		.submit {
		    font-weight: bold;
		    font-size: 18px;
		    color: white;
		    background: cornflowerblue;
		    border: cyan;
		    padding: 10px;			
		}
	</style>
</head>

<body>
<div id="page">

    <!-------------------------------------------------------Header---------------------------------------------------------------->
    <?php include "header.php";?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->
    <div id="content">
        <h1>Health News</h1>
    	<form action="" method="POST" class="form-group">
		
			Title: <input type="text" name="news_title" class="form-control" value="<?= $row['news_title']; ?>">
			<br>
			Image Path: <input type="text" name="news_image" class="form-control" value="<?= $row['news_image']; ?>">
			<br>
			Short Description:<br> 
			<textarea name="news_short_description" style="width:100%; height:300px;" > <?= $row['news_short_description']; ?></textarea>
			<br>
			Full Description:<br> 
			<textarea name="news_full_content" style="width:100%; height:300px;" ><?= $row['news_full_content']; ?></textarea>
			<br>
			Author: <input type="text" name="news_author" class="form-control" value="<?= $row['news_author']; ?>">
			<br>
			<br>
			Published on: <input type="date time" name="news_published_on" class="form-control" value="<?= $row['news_published_on']; ?>">
			<br>
			<input type="submit" name="submit" value="Update data" class="submit" class="btn btn-success">
			
		</form>
	
    </div>
	

   <!-------------------------------------------------------Footer---------------------------------------------------------------->
   <?php include "footer.php";?>
</div>

</body>



</html>