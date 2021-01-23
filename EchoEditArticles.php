<?php
session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Edit Articles | EBC</title>
  
	<!-- links of bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
	<link rel="stylesheet" type="text/css" href="ShowMoreCSS.css"/> <!--Show more CSS-->

	
	
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->

	<!--<link rel="stylesheet" href="jquery-ui.min.css">
	<script src="external/jquery/jquery.js"></script>
	<script src="jquery-ui.min.js"></script>-->	
</head>

<body>

    <!-------------------------------------------------------Header---------------------------------------------------------------->
    <?php include "header.php";?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->

	<div class="bootstrap-iso"> <h1 class="jumbotron">Edit Articles</h1> </div>

	<?php
		include ("EchoEditArticles_PHP.php");
	?>
	<!--<script>
	$(".edit-article button").on("click", function() 
	{	
		<?php //$_SESSION['EditArticleID']=this.id; ?>
		
		window.location.replace("EditArticle.php");
	});
	</script>-->

	<!-- JQUERY Show more function-->
	<script type="text/javascript" src="ShowMoreJQuery.js"></script>
	<br>
   <!-------------------------------------------------------Footer---------------------------------------------------------------->
   <?php include "footer.php";?>

</body>

</html>