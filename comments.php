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


		if(isset($_POST['send']))
		{
				$sql="INSERT INTO comments(username, comment)VALUES('".$_SESSION['username']."','".$_POST['comment']"'.)";
				$result=mysqli_query($conn,$sql);
	
		
		}