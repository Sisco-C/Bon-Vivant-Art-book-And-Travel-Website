<?php
// set up variables to store server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonvivants";
// create and execute connection based off credentials
$conn = new mysqli($servername,$username,$password,$dbname);

// variables to store users input
	$name = $email = $password = '';

//check if submit is clicked
	if (isset($_POST['save'] )) {
		# code...
	$usrname = $_POST['name'];
	$email = $_POST['email'];

	$password = $_POST['pass'];
 
} 


// create and execute connection based off credentials

$sql = "INSERT INTO users (name,email,password) VALUES ('$username','$email','$password')";

	// checking if data has been created
	if ($conn->query($sql) === TRUE) {
		# code...
		echo "record created <br>";
		
	
		header('location: index.php'); // redirect after action
	} else {
		echo "bid cannot be made <br>" . $conn->error;
		header('location: art.php'); 
	}

   

//close
$conn->close();




?>