<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql="SELECT * FROM questions WHERE Answer IS NOT NULL;";
		
		$result=mysqli_query($conn,$sql);
		
		$flag=true;
		if($result)
		{
			$num=mysqli_num_rows($result);
			
			echo"<table class='table'>";
			for($i=0;$i<$num;$i++)
			{
				$row = mysqli_fetch_array($result);
				if(!$row)
				{
					break;
				}
				$flag=false; 
				echo"
					<tr>
						<td rowspan='2'><h2>Q&A</h2></td>
						<td> <div class='text'> <b><h2>".$row['Message']."</h2></b></div> </td>
					</tr>
					<tr>
						<td> <div class='text'><h3>".$row['Answer']."</h3></div> </td>
					</tr>
					";
			}
		}
		echo"</table>";

		
		if($flag==true)
		{
			echo "No Q&A to show here.";
		}
		//echo"</div>";
		mysqli_close($conn);	
?>