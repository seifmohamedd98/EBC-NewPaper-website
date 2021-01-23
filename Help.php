<?php
session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Help | EBC</title>  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
	
    <!-- links of bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    		
		<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script>
			function getResult() 
			{
				jQuery.ajax(
				{
					url: "SearchHelp.php",
					data:'term='+$("#term").val(),
					type: "POST",
					success:function(data2)
					{
						$("#result").html(data2);
						
					}
				});
			}
		</script>
</head>

<body>


    <!-------------------------------------------------------Header---------------------------------------------------------------->
    <?php include "header.php";?>
    <!-------------------------------------------------------Content---------------------------------------------------------------->

		<div class="bootstrap-iso"> <h1 class="jumbotron"><b>Help page</b></h1> </div>

		<?php
			include ("Help_PHP.php");
		?>

		<input class="form-control"name="term" type="text" id="term" onkeyup="getResult()" placeholder="Search for question..." />
		<div id="result"></div>
	<!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
	<?php include "footer.php"; ?>
	<!-------------------------------------------------------End of Footer------------------------------------------------------------------>
</body>

</html>