<?php 
if($_SERVER['REQUEST_METHOD'] =='POST')
{
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['send']))
{ 


  
    $sql = "SELECT Author FROM article  WHERE article.Headline ='" . $_POST['headline'] . "';" ;

    $result=mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    //echo print_r($row);     

       if($result=mysqli_query($conn,$sql))
    {
   
            while($row = mysqli_fetch_array($result))
            {
              $sql2 ="insert into messages (sender,receiver,Headline , subject ,message ) values ( '".$_SESSION['username']."', '".$row['Author']."',  '".$_POST['headline']."','".$_POST['subject']."','".$_POST['yourmessage']."')";
			    //echo print_r($row);     

            }
                $result2=mysqli_query($conn,$sql2); 

        
    }

}
header("Location:ReaderMessageSent.php");
}
else
{
	echo "You cannot enter this page directly";
}
?>
