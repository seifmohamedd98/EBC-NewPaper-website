<?php
session_start();
$_SESSION["Category"]="Culture";
?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Culture | EBC</title>

    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
    <link rel="stylesheet" type="text/css" href="ShowMoreCSS.css"/> <!--Show more CSS-->

    <style>
        tr
        {
        background-color:#D6DBDF;
        }
        div.text-container 
        {
        margin: 0 auto;
        width: 75%;    
        }

        .hideContent 
        {
        overflow: hidden;
        line-height: 1em;
        height: 2em;
        }

        .showContent 
        {
        line-height: 1em;
        height: auto;
        }

        .showContent
        {
        height: auto;
        }

        p 
        {
        padding: 10px 0;
        }
        .show-more 
        {
        padding: 10px 0;
        text-align: center;
        }

        #aus
        {
        font-family: Times New Roman;
        }
    </style>
</head>

<body>
    <!-------------------------------------------------------Start of Header---------------------------------------------------------------->
    <?php include "header.php";?>
    <!-------------------------------------------------------End of Header------------------------------------------------------------------>
    <div class="bootstrap-iso"> <h1 class="jumbotron"><b>Culture News</b></h1> </div>

    <div class="container">
        <?php
            include("EchoTable.php");
        ?>
        
        <script type="text/javascript" src="ShowMoreJQuery.js"></script>
        <hr>
    </div>


    <h1 class="jumbotron"><b>Comments:-</b></h1>
    <?php include "WriteComment.php"; ?>

 

    <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
    <?php include "footer.php"; ?>
    <!-------------------------------------------------------End of Footer------------------------------------------------------------------>
</body>

</html>