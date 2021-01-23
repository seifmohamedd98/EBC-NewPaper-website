<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webproject";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT `ArticleID`, `Headline` FROM `article` WHERE 1;";
$result=mysqli_query($conn,$sql);


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
            
            <h1 class="jumbotron"> Write Your Message </h1>
            <form action="ReaderMessageSent_PHP.php" method="post"  >

                <div class="form-group">
                
                <h3><b>Choose Article:</b></h3>
                
                <?php
                    echo "<select name='headline' class='form-control'>";
                    while($row=mysqli_fetch_array($result))
                    { 
                    echo   "<option>" .$row[Headline]."</option>";
                    }
                    echo "</select>";
                ?>
                <br>
                <br>
                <br>

                <input type="text" class="form-control" placeholder="SUBJECT" name="subject">
                <br>
                <br>
                <br>
                <textarea  class="form-control" placeholder="YOUR MESSAGE" name="yourmessage"></textarea>
                <br>
                <br>
                <br>
                <button class="btn btn-primary"  name="send" ><b> SEND </b></button>

                </div>

            </form>
		
        <!-------------------------------------------------------End of Content----------------------------------------------------------------->

        <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
        <?php include "footer.php";?>
        <!-------------------------------------------------------End of Footer------------------------------------------------------------------>
    </body>
</html>
