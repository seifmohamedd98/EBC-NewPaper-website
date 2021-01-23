<?php
	session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
  <title>Contact Us | EBC</title>
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
	<!-- <link rel="stylesheet" type="text/css" href="contactus_CSS.css" />  -->

	<!-- links of bootstrap 3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

	<!-------------------------------------------------------Start of Header---------------------------------------------------------------->
	<?php include "header.php";?>
	<!-------------------------------------------------------End of Header------------------------------------------------------------------->

    <!-------------------------------------------------------Start of Content---------------------------------------------------------------->

		<div class="container" >
			<form action="" method="POST" class="container" style="background-color: #f2f2f2; border-radius: 5px; padding: 20px;">
				<div class="form-group">

					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Your name.." class="form-control"><br>

					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="Your last name.." class="form-control"><br>

					<label for="email">E-mail</label>
					<input type="email" name="emailaddress" placeholder="Your email.." class="form-control"><br>

					<label for="country">Country</label>
					<select id="country" name="country" class="form-control">
					<option value="egypt">Egypt</option>
					<option value="turkey">Turkey</option>
					<option value="usa">USA</option>
					<option value="uae">UAE</option>
					<option value="france">France</option>
					<option value="italy">Italy</option>
					</select><br>

					<label for="subject">Feedback</label>
					<textarea id="subject" name="subject" placeholder="Write your message here" style="height:200px" class="form-control"></textarea>
					<br>
					<input type="submit" value="Submit" class="btn btn-success">
				</div>
			</form>
		</div>
		<br>
		<!-------------------------------------------------------End of Content----------------------------------------------------------------->

		<!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
		<?php include "footer.php"; ?>
		<!-------------------------------------------------------End of Footer------------------------------------------------------------------>
</body>

</html>