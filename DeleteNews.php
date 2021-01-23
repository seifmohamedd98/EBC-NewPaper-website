<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT  ArticleID, Headline, ArticleText, Author, CreationDate, Category FROM article WHERE 1";

$result=mysqli_query($conn,$sql);


?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Delete News | EBC</title>

    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device -->
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
          <h1><b>Delete News :-</b></h1>
          <hr><br>
            <table width='80%' class="table table-hover">
                <thead> <!-- deh 3ashan may3mlsh hover 3alehom -->
                    <tr class="info">   
                        <th>Headline</th>
                        <th>Article Text</th>
                        <th>Author</th>
                        <th>Creation Date</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php   
                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>".$row['Headline']."</td>";
                    echo "<td>".$row['ArticleText']."</td>";
                    echo "<td>".$row['Author']."</td>";
                    echo "<td>".$row['CreationDate']."</td>";
                    echo "<td>".$row['Category']."</td>";
                    echo "<td><a href=\"DeleteNews_PHP.php?id=$row[ArticleID]\" onClick=\"return confirm('Are you sure you want to delete this Account?')\">Delete</a></td>";	
                    echo"</tr>";
                    }
                ?>
            </table>


            
        </div>


    <!-------------------------------------------------------End of Content----------------------------------------------------------------->

    <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
    <?php include "footer.php"; ?>
    <!-------------------------------------------------------End of Footer------------------------------------------------------------------>
</body>

</html>