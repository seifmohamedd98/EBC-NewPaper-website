<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql="SELECT * FROM article WHERE Category ='".$_SESSION['Category']."'";
		
		$result=mysqli_query($conn,$sql);
		
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
						</div>
					</div>
        		</div>
				";
			}
			echo"</div>";
		}
		//<button class='btn btn-primary' id=".$row['ArticleID'].">Edit Article</button>
		//<img src='data:image/jpeg;base64,".base64_encode($row['image'])."'/>"
		//<img src='".$row['Image']."'style='width:100%; height:300px;'>
		
		/*while ($row = mysqli_fetch_array($result))
		{
			echo"
				<div class='col-sm-4'>
           			 <div class='content'>
						<img src='".$row['ImagePath']."'style='width:100%; height:300px;'>
						<h2>'".$row['Headline']."'</h3>
						<div class='content hideContent'>'".$row['ArticleText']."'</div>
						<div class='show-more'>
							<a href='#'>Show more</a>
						</div>
					</div>
        		</div>
				";



			/*echo"<tr>
					<td rowspan='2'> <img src='".$row['ImagePath']."' id='img' style='width:100%; height:20;'> </td>
					<td> <div class='text'> <b>'".$row['Headline']."'</b></div> </td>
				</tr>
				<tr>
					<td>
						<div class='content hideContent'>'".$row['ArticleText']."'</div>
						<div class='show-more'>
							<a href='#'>Show more</a>
						</div>
					</td> 
				</tr>";*/
				//$flag=false;
		//}
		
		if($flag==true)
		{
			echo "Nothing to show here.";
		}
		//echo"</div>";
		mysqli_close($conn);	
?>