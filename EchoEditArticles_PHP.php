<?php		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql="SELECT * FROM article WHERE Author='".$_SESSION['username']."';";

		$result=mysqli_query($conn,$sql);
		
		if(!$result)
		{
			die('Invalid query: ' . mysqli_error($conn));
		}
		
		//echo"<div class='row'>";
		//$result = mysqli_query($conn, $sql);
		$flag=true;
		$num=mysqli_num_rows($result);

		for($i=0;$i<$num/3;$i++)
		{
			echo"<div class='row'>";
			for($j=0;$j<3;$j++)
			{
				$row = mysqli_fetch_array($result);
				if(!$row)
				{
					break;
				}
				$flag=false;
				echo"
				<div class='col-sm-4'>
           			 <div class='content'>
						<img src='data:image/jpg;base64,".base64_encode($row['Image'])."' height='300px' width='100%'/>
						<p>Published by ".$row['Author']." on ".$row['CreationDate']."</p>
						<h2>".$row['Headline']."</h2>
						<div class='content hideContent'>".$row['ArticleText']."</div>
						<div class='show-more'>
							<button class='btn btn-primary'>Show more</button>
							<a class='btn btn-primary' href='EditArticle.php?id=".$row['ArticleID']."'>Edit Article</a>							
						</div>
					</div>
        		</div>
				";

			}
			echo"</div>";
		}
		
		if($flag==true)
		{
			echo "Nothing to show here.";
		}
		//echo"</div>";
						/*<div class='edit-article'>
							<button class='btn btn-primary'id=".$row['ArticleID'].">Edit Article</button>
						</div>*/
		mysqli_close($conn);
?>
