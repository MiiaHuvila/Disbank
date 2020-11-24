<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
<title>Disbank - Account Creation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<!-- Bootstrap -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!--Disbank style and code-->
	<!-- CSS only -->
	<link rel="stylesheet" href="style/disbankstyle.css">
	<!-- JS and PHP -->
</head>
<body class="bgcolor">
	<div class="container" style="margin-top:30px">
		<div class="fircolor" style="border-radius: 15px 15px 15px 15px;">
			<div class="seccolor" style="border-radius: 15px 15px 0px 0px; padding: 30px;">
				<h1>Register</h1>
				<p>Please fill in this form to create an account.</p>
			</div>
			<div style="padding: 30px;">
			<form action=Register.php method="post">
			
			 <div class="form-group ">
				<labe><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="newdisuser" id="newdisuser" required>
				<br>
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="newdispsw" id="newdispsw" required>
				<br>
				<label for="psw-repeat"><b>Repeat Password</b></label>
				<input type="password" placeholder="Repeat Password" name="newdispsw-repeat" id="newdispsw-repeat" required>
			</div>
			<div class="seccolor" style="border-radius: 0px 0px 15px 15px; padding: 30px;">
				<p>By creating an account you agree to our Terms & Privacy.</p>
				<a href="login.html" class="acccolor disbutton">Back</a>
				<button type="submit" class="acccolor disbutton" style="float: right;">Register</button>
			</div>
		</div>
	</div>
	</div>
</body>
</html>
