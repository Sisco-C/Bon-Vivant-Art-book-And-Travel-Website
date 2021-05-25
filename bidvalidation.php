
<?php
// set up variables to store server details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonvivants";
// create and execute connection based off credentials
$conn = new mysqli($servername,$username,$password,$dbname);

// variables to store users input
	$name = $email = $artchoice = $price = $password = '';

//check if submit is clicked
	if (isset($_POST['save'] )) {
		# code...
	$name = $_POST['name'];
	$email = $_POST['email'];
	$artchoice = $_POST['artchoice'];
	$price = $_POST['price'];
	$password = $_POST['pass'];
 
} 


// create and execute connection based off credentials

$sql = "INSERT INTO bidders (name,email,artchoice,price,password) VALUES ('$name','$email','$artchoice','$price','$password')";

	// checking if data has been created
	if ($conn->query($sql) === TRUE) {
		# code...
		echo "record created <br>";
		
	
		header('location: art.php'); // redirect after action
	} else {
		echo "bid cannot be made <br>" . $conn->error;
		header('location: art.php'); 
	}

   

//close
$conn->close();




?>