<!DOCTYPE html>
<html>
<head>
	<title>Upload Page</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	
	</head>
<body style="background-image: url(https://images.unsplash.com/photo-1579547621113-e4bb2a19bdd6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mzl8fGFydHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60);">
<br><hr>
<div class="container">
	<div class="jumbotron" style="margin-right: 200px; margin-left: 200px;">
<div class="col-md-6"></div>	
		<h2 style="text-align: center; padding: 10px;"> Upload Content </h2>
<hr>
		<form action="validation.php" method="post" enctype='multipart/form-data' >
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="userEmail" class="form-control" required>
				

				<div class="form-group" >
				
				<label>Password</label>
				<input type="password" name="userPassword" class="form-control" required placeholder="Enter Password">
				

				<br>
				<div class="form-group">
					
				<label>Choose Category :</label>



			<select name="fileUploads" id="fileUploads">
  			<option value="art">Art</option>
  			<option value="Book Review">Book Review And Critique</option>
 			<option value="travel escapades">Travel Escapades</option>
				</select>
				
				<br>
		<div class="form-group">
			<br>

				<label>Upload Content Pieces</label>
	 				 <input type="file" id="userUpload" name="fileUploads">
 				 
  		
  					
				
	
			</div>
			<br>
				<div class="row form-group">
		<div class="col">
			<input type="submit" name="save" class="btn btn-success btn-block" value="Upload Content">
			
		</div>
		<div class="row form-group">
			<div class="col">

			<input type="reset" class="btn btn-warning btn-block" value="Reset Form">
			
		
	</div>
	</div>
			</div>	
			</div>
			</div>
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