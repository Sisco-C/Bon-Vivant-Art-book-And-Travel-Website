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
<div class="col-md-6"></div>	
		<h2 style="text-align: center; padding: 10px;"> Log In </h2>
		<form action="loginvalidation.php" method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user" class="form-control" placeholder="Enter Email" required>
				<div class="form-group">
				
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
				<br>
				<button type="submit" name="save" class="btn btn-danger" style=" width: 650px;"> Log In</button>

			</div>
		</form>
		<br>
		
		<br>
		<p style="text-align: center;">Forgot Password? <a href="#" style="color: red;"><u>Reset Password</a></p>

		</div>
		</div>
		</div>







</div>
</body>
</html>