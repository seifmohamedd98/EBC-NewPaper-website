<?php  
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

	$news_id = $_GET["id"];
    
	$query = "DELETE FROM economy_news WHERE news_id=$news_id";

	mysqli_query($conn, $query);

	header("Location:IndexNews.php");

?>
