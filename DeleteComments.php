<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT `id`, `username`, `comment`, `category`FROM `comments`;" ;

$result=mysqli_query($conn,$sql);
//echo $sql;

?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Delete Comments | EBC</title>
        <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->

        <!-- links of bootstrap 3 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
        
    </head>
    
    <body>		
        <!-------------------------------------------------------Start of Header---------------------------------------------------------------->
        <?php include "header.php";?>
        <!-------------------------------------------------------End of Header------------------------------------------------------------------>

        <!-------------------------------------------------------Start of Content--------------------------------------------------------------->
        <div class="container">
          <h1><b>Delete Comments :-</b></h1>
          <hr><br>
        <table width='80%' class="table table-hover" id="table">
                <thead>
                    <tr class="info">   
                        <th>Username</th>
                        <th>Comment</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php   
                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>".$row['username']."</td>";
                    echo "<td>".$row['comment']."</td>";
                    echo "<td>".$row['category']."</td>";
                    echo "<td><a href=\"DeleteComments_PHP.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete this Account?')\">Delete</a></td>";	
                    echo"</tr>";
                    }
                ?>
        </table>    
        <br><br>
        </div>
        <!-------------------------------------------------------End of Content----------------------------------------------------------------->

        <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
        <?php include "footer.php";?>
        <!-------------------------------------------------------End of Footer------------------------------------------------------------------>
    </body>
</html>
