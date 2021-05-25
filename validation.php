<?php
if (isset($_POST['save'])) {
	$file = $_FILES['fileUploads'];

$fileName = $_FILES['fileUploads']['name'];
$fileTmpName = $_FILES['fileUploads']['tmp_name'];
$fileSize = $_FILES['fileUploads']['size'];
$fileError = $_FILES['fileUploads']['error'];
$fileType = $_FILES['fileUploads']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('jpg','jpeg','pdf','png');
if (in_array($fileActualExt, $allowed)) {
	if ($fileError === 0) {
		if ($fileSize < 1000000000000000) {
			$fileNameNew = uniqid('', true) . "." .$fileActualExt;
			$fileDestination = 'uploads/'.$fileNameNew;
			move_uploaded_file($fileTmpName, $fileDestination);
			header("Location: index.php/uploadsuccess");
			# code...
		} else{
			echo "Your File is too big!";
		}
		# code...
	}
	else{
		echo "There was  an error uploading your file!";
	}
	# code...

} else{
	echo "You Cannot Upload files of this Type!";
	header("Location: index.php/youcannotupload");

}


}






?>