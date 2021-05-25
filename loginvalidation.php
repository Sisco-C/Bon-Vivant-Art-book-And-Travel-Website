<<<<<<< HEAD
<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'bonvivants');
$email = $_POST['email'];
$pass = $_POST['password'];


$s = "SELECT * FROM users WHERE email = '$email' && password = '$pass'"; 
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['name'] = $name;
	header('location: travel.php');
} else{
	header('location: login.php');

}









=======
<?php

session_start();
header('location:login.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'bonvivants');
$email = $_POST['email'];
$pass = $_POST['password'];


$s = "SELECT * FROM users WHERE email = '$email' && password = '$pass'"; 
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['name'] = $name;
	header('location: travel.php');
} else{
	header('location: login.php');

}









>>>>>>> fd4775e7e42ea03e8f9967db189b38eec33995ca
?>