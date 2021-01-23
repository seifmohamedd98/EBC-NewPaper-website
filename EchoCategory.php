<?php		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$sql="SELECT * FROM category;";

		$result=mysqli_query($conn,$sql);
		
		//echo"<div class='row'>";
		//$result = mysqli_query($conn, $sql);
		$flag=true;
		$num=mysqli_num_rows($result);

		echo"<select name='category' class='form-control'>";
		//echo "<option selected value=''>Choose article category</option>";
		for($i=0;$i<$num;$i++)
		{	
			$row = mysqli_fetch_array($result);
			echo "<option value='".$row['CategoryName']."'>".$row['CategoryName']."</option>";
			$flag=false;
		}
		echo"</select>";
		if($flag==true)
		{
			echo "Nothing to show here.";
		}
		//echo"</div>";
		
	mysqli_close($conn);
?>