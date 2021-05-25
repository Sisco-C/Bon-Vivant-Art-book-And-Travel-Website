 <?php
// $cars = array ("Volvo", "BMW", "Merc", "Audi");

// echo count($cars);
// echo "<br>";
// echo "I like" . $cars[0];

//looping
// $cars = array ("Volvo", "BMW", "Merc", "Audi");
// $arrlength = count($cars);

// for ($x = 0; $x < arrlength; $x++){
// 	echo $cars[$x];
// 	echo "<br>";
// }
$age = array("Peter" => "35", "Joanna" => "33" );
echo count ($age);
echo "<br>";
echo "Joanna is" . $age['Joanna'] . "years old";

// looping inside an associative array
 foreach ($age as $x => $x_value) {
 	echo "Key=" . $x .", Value=" . $x_value;
 	echo "<br>";
 	# code...
 }
 // mutli dimensional arrays
 $cars = array(
 array("Volvo",22,18),
 array("BMW",15,13),
 array("Saab",5,2),
 array("Land rover",17,15)
 );
 echo $cars[3][0] . " in stock are " . $cars[3][1] . " but those sold are " . $cars[3][2];
 // looping inside a multidimensional array
 for ($row=0; $row < 4; $row++) { 
 	echo "<p><b> Row Number $row</b><p>";
 	echo "<ul>";
 	for ($col=0; $col < 3; $col++) { 
 		echo "<li>" . $cars[$row][$col] . "</li>";
 	}

 		echo"</ul>";
 	# code...
 }
 //sorting out arrays

 echo sort($cars);

?>