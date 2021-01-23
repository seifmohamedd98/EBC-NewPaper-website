<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
$con = mysqli_connect("localhost", "root", "", "webproject");
 
$sql = "SELECT * FROM messages";

// Escape user inputs for security
$term =  $_POST['term'];
  echo"<table class='table' border=1 width=100%>
            <tr><th>First Name</th><th>Last Name</th><th>Course</th><th>Grade</th></tr>";
if(!empty($term))
{
    // Attempt select query execution
    $sql = $sql." WHERE Message LIKE '%" . $term . "%'";
}
    if($result = mysqli_query($con, $sql))
	{
        if(mysqli_num_rows($result) > 0)
		{
            while($row = mysqli_fetch_array($result))
			{
					echo"<tr>
						<td rowspan='2'><h2>Q&A</h2></td>
						<td> <div class='text'> <b><h2>".$row['Message']."</h2></b></div> </td>
					</tr>
					<tr>
						<td> <div class='text'><h3>".$row['Answer']."</h3></div> </td>
					</tr>";
            }
            
        } 
		else
		{
            echo "<tr><td colspan=4>No matches found</td></tr>";
        }
    } 
	else
	{
        echo "<tr><td colspan=4>ERROR: Could not able to execute $sql. " . mysqli_error($con)."</td></tr>";
    }

 echo"</table>";
// close connection
mysqli_close($con);
?>