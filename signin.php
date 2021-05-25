<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registration</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	
	</head>
<body style="background-image: url(https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60);">
	<br><hr>
<div class="container">
	<div class="jumbotron" style="margin-right: 200px; margin-left: 200px;">
			<p class="alert alert-<?php

if (isset($_GET['registered'])){

	echo $_SESSION['classTypeSuccess'];
	session_unset();
	session_destroy();
} elseif (isset($_GET['notreg'])){

	echo $_SESSION['classTypeError'];
	session_unset();
	session_destroy();




} elseif (isset($_GET['wrongCred'])){
	
	echo $_SESSION['classTypeError'];
	session_unset();
	session_destroy();
} 



?>">
<?php
	

if (isset($_GET['registered'])){
	if (isset($_SESSION['reg'])){

	echo $_SESSION['reg'];
	session_unset();
	session_destroy();
} else{
	echo "Registration Successful";
}
} elseif (isset($_GET['notreg'])){
	if (isset($_SESSION['noreg'])){

	echo $_SESSION['noreg'];
	session_unset();
	session_destroy();
} else 
{


echo "not registered";
}
} elseif (isset($_GET['wrongCred'])) {
	# code...
	if (isset($_SESSION['userTaken'])) {
		# code...
		echo $_SESSION['userTaken'];
		session_unset();
	session_destroy();
} else {

	echo "Credentials Exist, try Different Credentials";
}

}

?>


<div class="col-md-6"></div>	
		<h2 style="text-align: center; padding: 10px;"> Sign Up </h2>
		<form action="connection.php" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="username" class="form-control" required>
				<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" id="email" onkeyup="check()" class="form-control" required>
				<div class="form-group">
				<label>Confirm Email</label>
				<input type="email" name="confirmEmail" id="confirmEmail" onkeyup="check()"class="form-control" required>
				<span id="message"></span>
				<div class="form-group">
				<label>Password</label>
				<input type="password" name="pass" class="form-control" required>
				<br>
				
				<button type="submit" class="btn btn-danger" id="save" name="save" style=" width: 650px;">Sign Up</button>

			</div>
		</form>
		<br>
		<p>By Signing up, you agree to Bon Vivant's <a href="#"> Terms Of Use</a>,<a href="#"> Privacy Policy</a> and <a href="#"> cookie policy</a></p>
		<br>
		<p style="text-align: center;"> Already have an account? <a href="http://localhost/projects/sharethegoodthings/login.php" style="color: red;"><u>Log In</a></p>

		</div>
		</div>
		</div>

		<script type="text/javascript"> function check(){
		if (document.getElementById('email').value === document.getElementById('confirmEmail').value){

			document.getElementById('message').style.color = "green";
			document.getElementById('message').innerHTML = "email address does match";
			document.getElementById('save').disabled = false;

		}
		else {
			document.getElementById('message').style.color = "red";
			document.getElementById('message').innerHTML = "email address does not match";
			document.getElementById('save').disabled = true;

		}
	}
</script>


<script type="text/javascript" scr="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" scr="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" scr="js/script.js"></script>




</div>
</body>
</html>