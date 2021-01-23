<?php
session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Economy | EBC</title>
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device -->
    <link rel="stylesheet" type="text/css" href="economy.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 3ashan icons el social media-->

		<!-- links of bootstrap 3 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.content
{
  width:90%;
  padding:20px;
  background:#fff;
  margin:20px auto 60px;
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
	<h1 class="jumbotron"><b>Economy News</b></h1>

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

              
				$sql = "SELECT * FROM economy_news";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
		
						echo "<h2>" . "<a href='economydetails.php?economynewsid=" . $row["news_id"] ."'>" . $row['news_title']. " </a></h2>";
						echo "<p>" . $row["news_short_description"]. "</p>";
						echo "<p> <b> published on  </b>" .  $row["news_published_on"].  "  <b> by  </b> " .   $row["news_author"] . "</span>";	
					}
				} else {
					echo "Nothing to show";
				}
				$conn->close();
				?>
    </div>
  <!-------------------------------------------------------Footer---------------------------------------------------------------->
  <?php
      include("footer.php");
  ?> 


</body>

</html>