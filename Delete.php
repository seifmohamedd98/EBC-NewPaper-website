<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql="delete from reader where ID =".$_SESSION['ID'];
$result=mysqli_query($conn,$sql);
if($result)
{
	session_destroy();
	header("Location:Home.php");
}
else
{
	echo $sql;
}	
?>