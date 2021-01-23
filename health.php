<?php
session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Health | EBC</title>
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device -->
			<!-- links of bootstrap 3 -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
	.content
	{
	width:95%;
	padding:20px;
	background:#fff;
	margin:30px auto 60px;
	border-radius:2px;
	
	}
</style>
</head>

<body>

  <!-------------------------------------------------------Header---------------------------------------------------------------->
  <?php
    include("header.php");
  ?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->
	<h1 class="jumbotron"><b>Health News</b></h1>
    <div class="content">
			
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "webproject";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

              
				$sql = "SELECT * FROM info_news";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						//echo "id: " . $row["news_title"]. " - Name: " . $row["news_short_description"]. " " . $row["news_published_on"]. "<br>";
					
						
						echo "<h2>" . "<a href='healthdetails.php?healthnewsid=" . $row["news_id"] ."'>" . $row['news_title']. " </a></h2>";
						echo "<p>" . $row["news_short_description"]. "</p>";
						echo "<p> <b> published on  </b>" .  $row["news_published_on"].  "  <b> by  </b> " .   $row["news_author"] . "</span>";
						
					
					
					}
				} else {
					echo "Nothing to show";
				}
				$conn->close();
				?>
				</div>

<?php
    include("footer.php");
  ?>

</body>
</html>