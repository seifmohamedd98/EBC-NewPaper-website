<?php
if($_SERVER['REQUEST_METHOD'] =='POST')
{
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";
session_start();
$conn = new mysqli($servername, $username, $password, $dbname);

$sql="DELETE FROM reader WHERE ID=".$_GET['id'];

$result = mysqli_query($conn, $sql);

header("Location:DeleteAccount.php");
}
else
{
	echo "You cannot enter this page directly";
}

?>

