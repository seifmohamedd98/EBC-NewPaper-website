<?php
session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Health Details | EBC</title>
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device -->
	
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
  <?php include "header.php";?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->
  
	 <div class="content">
	
			<?php
				$newsid = (int)$_REQUEST['healthnewsid'];
				
				
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

              
				$sql = "SELECT * FROM info_news where news_id = $newsid ";
				$result = $conn->query($sql);		
				$row = $result->fetch_assoc(); 
					
						
						echo "<h2>" . $row['news_title']. "</h2>";
						$result = $row['news_image'];
                        echo "<img width=700 height=500 src='".$result."'>";
						echo "<p>" . $row["news_full_content"]. "</p>";
						echo "<p> <b> published on  </b>" .  $row["news_published_on"].  "  <b> by  </b> " .   $row["news_author"] . "</span>";	
				$conn->close();
				?>
							
   </div>
   <h1 class="jumbotron"><b>Comments:-</b></h1>
	<?php include "WriteComment.php"; ?>
  <!-------------------------------------------------------Footer---------------------------------------------------------------->
  <?php include "footer.php";?>


</body>

</html>