<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title>User Login </title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	
	</head>
<body style="background-image: url(https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60);">
<br><hr>
<div class="container">
	<div class="jumbotron" style="margin-right: 200px; margin-left: 200px;">
				<p class="alert alert-<?php

if (isset($_GET['wrongCred'])){

	echo $_SESSION['classTypeError'];
	session_unset();
	session_destroy();
}

?>">
<?php
	

if (isset($_GET['wrongCred'])){
	if (isset($_SESSION['UserUnavailable'])){

	echo $_SESSION['UserUnavailable'];
	session_unset();
	session_destroy();
} else{
	echo "Wrong credentials, when logging in, check credentials or create account";
}
}






?>




		</p>
<div class="col-md-6"></div>	
		<h2 style="text-align: center; padding: 10px;"> Log In </h2>
		<form action="reset.php" method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user" class="form-control" placeholder="Enter Email" required>
				<div class="form-group">
				
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
				<br>
				<button type="submit" name="save" class="btn btn-danger" style=" width: 650px;"> Login</button>

			</div>
		</form>
		<br>
		
		<br>
		<p style="text-align: center;">Forgot Password? <a href="http://localhost/projects/sharethegoodthings/reset.php" style="color: red;"><u>Reset Password</a></p>

		</div>
		</div>
		</div>







</div>
</body>
=======
<!DOCTYPE html>
<html>
<head>
	<title>User Login </title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	
	</head>
<body style="background-image: url(https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60);">
<br><hr>
<div class="container">
	<div class="jumbotron" style="margin-right: 200px; margin-left: 200px;">
				<p class="alert alert-<?php

if (isset($_GET['wrongCred'])){

	echo $_SESSION['classTypeError'];
	session_unset();
	session_destroy();
}

?>">
<?php
	

if (isset($_GET['wrongCred'])){
	if (isset($_SESSION['UserUnavailable'])){

	echo $_SESSION['UserUnavailable'];
	session_unset();
	session_destroy();
} else{
	echo "Wrong credentials, when logging in, check credentials or create account";
}
}






?>




		</p>
<div class="col-md-6"></div>	
		<h2 style="text-align: center; padding: 10px;"> Log In </h2>
		<form action="reset.php" method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user" class="form-control" placeholder="Enter Email" required>
				<div class="form-group">
				
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
				<br>
				<button type="submit" name="save" class="btn btn-danger" style=" width: 650px;"> Login</button>

			</div>
		</form>
		<br>
		
		<br>
		<p style="text-align: center;">Forgot Password? <a href="http://localhost/projects/sharethegoodthings/reset.php" style="color: red;"><u>Reset Password</a></p>

		</div>
		</div>
		</div>







</div>
</body>
>>>>>>> fd4775e7e42ea03e8f9967db189b38eec33995ca
</html>