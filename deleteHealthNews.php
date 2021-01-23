<?php  
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

	$news_id = $_GET["id"];

	$query = "delete from info_news WHERE news_id=$news_id";

    echo "done";
	
	mysqli_query($conn, $query);
	

	header("Location:IndexNews.php");

?>
