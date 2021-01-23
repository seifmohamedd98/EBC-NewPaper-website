<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$con = mysqli_connect($servername, $username, $password, $dbname);
 
$sql = "Select Headline , Category from article";

$term =  $_POST['term'];

  echo"<table class='table' border=1 width=100%>
        <tr><th class='p-3 mb-2 bg-primary'>Headline</th><th class='p-3 mb-2 bg-primary text-white'>In Category</th></tr>";

if(!empty($term))
{
    $sql = $sql." WHERE Headline LIKE '%" . $term . "%' or Category LIKE '%" . $term . "%'";
}

if($result = mysqli_query($con, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {

        
            echo "<tr class='p-3 mb-2 bg-info'><td>" . $row['Headline'] . "</td><td><a href='".$row["Category"].".php'>".$row["Category"]."</a></td></tr>";
        
        }
        
    } 
    else
    {
        echo "<tr ><td colspan=4 class='p-3 mb-2 bg-danger'>No matches found</td></tr>";
    }
}
else
{
    echo "<tr><td colspan=4>ERROR: Could not able to execute $sql. " . mysqli_error($con)."</td></tr>";
}
echo"</table>";
mysqli_close($con);
?>