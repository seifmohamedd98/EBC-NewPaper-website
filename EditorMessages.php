<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT `id`, `sender`, `receiver`, `Headline`, `subject`, `message` FROM `messages` WHERE receiver ='" . $_SESSION['username'] . "';" ;

$result=mysqli_query($conn,$sql);
//echo $sql;

?>
<!DOCTYPE HTML>

<html>
    <head>
        <title>Send Message | EBC</title>
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

        <table width='80%' class="table table-hover">
                <thead> <!-- deh 3ashan may3mlsh hover 3alehom -->
                    <tr class="info">   
                        <th>Sender</th>
                        <th>Headline</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php   
                    while($row = mysqli_fetch_array($result))
                    {
                    echo "<tr>";
                    echo "<td>".$row['sender']."</td>";
                    echo "<td>".$row['Headline']."</td>";
                    echo "<td>".$row['subject']."</td>";
                    echo "<td>".$row['message']."</td>";
                    echo "<td><a href=\"EditorReplay.php?id=$row[id]\">Replay</a></td>";	
                    echo"</tr>";
                    }
                ?>
        </table>

        <!-------------------------------------------------------End of Content----------------------------------------------------------------->

        <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
        <?php include "footer.php";?>
        <!-------------------------------------------------------End of Footer------------------------------------------------------------------>
    </body>
</html>
