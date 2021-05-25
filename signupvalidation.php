
<?php
// set up variables to store server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonvivants";

// create and execute connection based off credentials
$conn = new mysqli($servername,$username,$password,$dbname);

// // execute the connection
// if ($conn->connect_error){
// 	# code...
// 	echo "Connection failed! <br>" . $conn->connect_error;
// } else
// 	echo "Connection successful! <br>";
// //create a db using SQL


// $sql = "CREATE DATABASE bonvivants";
// //checking if db has been created

// if ($conn->query($sql)){

// 	echo "database created <br>"; 

// }else{
// 	echo "database not created <br> " . $conn->error;
// }



// create table
// 	$sql = "CREATE TABLE uploads(
// 	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(250) NOT NULL,
// 	email VARCHAR(250),
// 	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)"; 

// 	// //checking if table has been created

// if ($conn->query($sql)){

// 	echo "table created <br>"; 

// }else{
// 	echo "table not created <br> " . $conn->error;
// }

//insert records to db
	// $sql = "INSERT INTO users (name,email) VALUES ('Sisco Kogo','siscoronojey@gmail.com')";
	// // checking if data has been created
	// if ($conn->query($sql) === TRUE) {
	// 	# code...
	// 	echo "record created <br>";
	// } else {
	// 	echo "record not created <br>" . $conn->error;
	// }
   


// variables to store users input
	$username = $email = $password = $encryptedpass = '';
	$usernameErr = $emailErr = $passwordErr = '';
	//session variables
	$_SESSION['reg'] = "Registration Successful";
	$_SESSION['noreg'] = "Registration Not Successful";	
	$_SESSION['classTypeSuccess'] = "success";	
	$_SESSION['classTypeError'] = "danger ";
	$_SESSION['userTaken'] = "Wrong credentials, try again or create a new account ";



	//capture user input/ validate users input
	if (isset($_POST['save'] )) {
		# code...
		if (empty($_POST['username'])) {
			# code...
			$usernameErr = "Username is required";
		} else{
			$username = $_POST['username'];
		}
		if (empty($_POST['email'])) {
			# code...
			$usernameErr = "email is required";
		} else{
			$username = $_POST['email'];
		}
		if (empty($_POST['password'])) {
			# code...
			$usernameErr = "password is required";
		} else{
			$username = $_POST['password'];
		}
		
	}
	
	


//check if submit is clicked
	if (isset($_POST['save'] )) {
		# code...
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	// encrypting password
	$encryptedpass = md5($password);
	//fetching records to compare sign up details
	$sql = "SELECT * FROM users WHERE username = '$username' && email = '$email' ";
	// execute the query
	$result = mysqli_query($conn,$sql);
	//find the number of rows which match my sql query
	$num = mysqli_num_rows(result);
	// check if the implementation above
	// echo "number of row(s) that match reg details" . $num;
	if ($num >= 1) {
		# code...
		$_SESSION['userTaken'];
		header("/index.php?wrongCred ");
	}

 
} else{
	if (empty($usernameErr) && empty($emailErr) && empty($passwordErr)) {
		# code...
		//prepare the statement
		$stmt = $conn->prepare("INSERT INTO users (username,email,password) VALUES (?,?,?)");
		$stmt->bind_param("sss",$username,$email,$encryptedpass);
		if ($stmt->execute() === TRUE {
			# code...
			$_SESSION["reg"]
			$_SESSION['classTypeSuccess']
			header('location: index.php?registered')
		} else{
			$_SESSION["noreg"];
			$_SESSION['classTypeError'];
			header('location: index.php?notregistered')


		}
	}
	
	
// //insert records to db
// 	$sql = "INSERT INTO users (username,email,password) VALUES ('$username','$email,'$password')";
// 	// checking if data has been created
// 	if ($conn->query($sql) === TRUE) {
// 		# code...
// 		echo "record created <br>";
		
	
// 		header('location: index.php'); // redirect after action
// 	} else {
// 		echo "record not created <br>" . $conn->error;
// 	}
// }
   

//close
$conn->close();




?>