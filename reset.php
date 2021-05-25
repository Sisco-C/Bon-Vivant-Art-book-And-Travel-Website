<!DOCTYPE html>
<html>
<head>
	<title>Reset Password </title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	
	</head>
<body style="background-image: url(https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60);">
<br><hr>
<div class="container">
	<div class="jumbotron" style="margin-right: 200px; margin-left: 200px;">
		<div class="col-md-6"></div>	
		<h2 style="text-align: center; padding: 10px;"> Reset Password </h2>
		<form action="loginvalidation.php" method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="user" class="form-control" placeholder="Enter Email" required>
				<div class="form-group">
				
				<label>New Password</label>
				<input type="password" name="password" id="password" class="form-control" onkeyup="check()" placeholder="Enter New Password" required>
				<br>
				<label>Confirm Password</label>
				<input type="password" name="passwordreset" id="passwordreset" class="form-control" onkeyup="check()" placeholder="Confirm Password" required>
				<span id="message"></span>
				<br>
				<button type="submit" name="reset" class="btn btn-danger" style=" width: 650px;"> Reset Password</button>

			</div>
		</form>
		<br>
		
		<br>
		<p style="text-align: center;"><a href="http://localhost/projects/sharethegoodthings/login.php" style="color: red;"><u>Log In </a></p>

		</div>
		</div>
		</div>

		<script type="text/javascript"> function check(){
		if (document.getElementById('passwordreset').value === document.getElementById('password').value){

			document.getElementById('message').style.color = "green";
			document.getElementById('message').innerHTML = "passwords do match";
			document.getElementById('save').disabled = false;

		}
		else {
			document.getElementById('message').style.color = "red";
			document.getElementById('message').innerHTML = "passwords do not match";
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