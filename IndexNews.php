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
        
		// select health news
	    $sql = "SELECT * FROM info_news";
	    $healthRes = $conn->query($sql);
		

        // select economy news
	    $sql = "SELECT * FROM economy_news";
	    $economyRes = $conn->query($sql);
			
	/*}
else
{
	echo "<script type='text/javascript'>alert('You Cannot Enter This Page Directly');</script>";
}*/


?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Index News | EBC</title>
  
	
  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
	<link rel="stylesheet" type="text/css" href="WorldNews_CSS.css" />
    	<!-- links of bootstrap 3 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
		.link {
		    text-decoration: none;
		    font-weight: bold;
		    color: cornflowerblue;
		    border: 3px solid cornflowerblue;
		    padding: 6px;
		    border-radius: 5px;			
		}
		.link-delete {
		    text-decoration: none;
		    font-weight: bold;
		    color: indianred;
		    border: 3px solid indianred;
		    padding: 6px;
		    border-radius: 5px;			
		}
		th {
			background: #eee;
			border: 1px solid #eee 
		}
		table,th,td{
			border: 1px solid black;	
		}
	</style>
</head>

<body>
<div id="page">

    <!-------------------------------------------------------Header---------------------------------------------------------------->
    <?php include "header.php";?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->
    <div id="content">
	 <div id="content">

	<div class="bootstrap-iso"> <h1 class="jumbotron">Health News</h1> </div>


     
	 	<br>

		<a href="HealthNewsCreation.php" class="link">Add Health News</a> 
		<br>
		<br>
		<br>

		<table cellpadding="20">
			<tr>
				<th>news id</th>
				<th>title</th>
				<th>short description</th>
				<th>full content</th>
				<th>news authors</th>
				<th>news published on</th>
				<th>news image</th>
				<th>Edit</th>
				<th>Delete</th>
				
			</tr>
			<?php while ($row = $healthRes->fetch_assoc()) { ?>
				<tr>
					<td><?= $row["news_id"]; ?></td>
					<td><?= $row["news_title"]; ?></td>
					<td><?= $row["news_short_description"]; ?></td>
					<td><?= $row["news_full_content"]; ?></td>
					<td><?= $row["news_author"]; ?></td>
					<td><?= $row["news_published_on"]; ?></td>
					<td><?= $row["news_image"]; ?></td>
					<td>
						<a href="edit_health_news.php?id=<?= $row["news_id"]; ?>" class='link'>Edit</a>
						</td>
						<td>
						<a href="deleteHealthNews.php?id=<?= $row["news_id"]; ?>" onclick="return confirm('do you  want to delete?')" class='link-delete'>Delete</a>
					    </td>
				</tr>	
			<?php } ?>
		</table>		
	



    </div>


	<div class="bootstrap-iso"> <h1 class="jumbotron">economy News</h1> </div>


     
	 	<br>

		<a href="EconomyNewsCreation.php" class="link">Add economy News</a> 
		<br>
		<br>
		<br>

		<table cellpadding="20">
			<tr>
				<th>news id</th>
				<th>title</th>
				<th>short description</th>
				<th>full content</th>
				<th>news authors</th>
				<th>news published on</th>
				<th>news image</th>
				<th>Edit</th>
				<th>Delete</th>
				
			</tr>
			<?php while ($row = $economyRes->fetch_assoc()) { ?>
				<tr>
					<td><?= $row["news_id"]; ?></td>
					<td><?= $row["news_title"]; ?></td>
					<td><?= $row["news_short_description"]; ?></td>
					<td><?= $row["news_full_content"]; ?></td>
					<td><?= $row["news_author"]; ?></td>
					<td><?= $row["news_published_on"]; ?></td>
					<td><?= $row["news_image"]; ?></td>
					<td>
						<a href="edit_economy_news.php?id=<?= $row["news_id"]; ?>" class='link'>Edit</a>
						</td>
						<td>
						<a href="deleteEconomyNews.php?id=<?= $row["news_id"]; ?>" onclick="return confirm('do you  want to delete?')" class='link-delete'>Delete</a>
					    </td>
				</tr>	
			<?php } ?>
		</table>		
	



    </div>
   <!-------------------------------------------------------Footer---------------------------------------------------------------->
   <?php include "footer.php";?>
</div>

</body>

</html>