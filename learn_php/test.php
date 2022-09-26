<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>echo or Print </h1>

<?php 

$student_name = 'Muneer Ambule Suraj';

$student = array('Muneer', 30, true);
// echo $student_name; 
// echo '<br>';
// print_r($student);
$string = null;

// $num = sddsf;

var_dump($string);

// echo $num;

exit();

?>

<?php Echo 'Hello Rahul'; ?>
<h1>
27-08-2022



<?php 
	/*ECHO "Hiii Muneer</br>"; 
		ECHO "Hiii Muneer</br>";
		ECHO "Hiii Muneer</br>";
		ECHO "Hiii Muneer</br>";*/
		// ECHO "Hiii Muneer</br>";
		#ECHO "Hiii Muneer</br>";
		ECHO "Hiii Muneer</br>";
		ECHO "Hiii Muneer</br>";
	?> 
</h1>

<!-- ---------- --><br><br>

<?php 
	$name = 'Muneer Ahmad';
	$Name = 'Rahul Sharma';
	$naMe = 'Salman Khan <br>';

	echo $naMe;
?>

<!-- ---------- --><br><br>

<?php
$polsing = 5 + 5 + 20;

echo $polsing;
?>

<!-- ---------- --><br><br>

<?php
	$mahendra = "Hello Mahendra!";
	$Praful = 435;
	$RaGhav = 10.5;

	echo $mahendra;
	echo "<br>";

	echo $Praful;
	echo "<br>";

	echo $RaGhav;
?>

<!-- ---------- --><br><br>

<?php
	$textecch = "Teztecch.com";
	echo "Hey.... $textecch!";
?>

<!-- ---------- --><br><br>

<?php
	echo "<h1>Polsing Ambule</h1>";
	echo "<h2>Hey Polsing...</h2>";
	echo "<h3>........................................................</h3>";
 ?>

 <!-- ---------- -->
 <?php
	echo "<h1><u># If Else Condition</u></h1>";
 ?>

 <?php
	
	$day = "sunday"; 

	if ($day == "sunday"){
		echo "Today Is Holiday";
	}else{
		echo "Today Is Office Work";
	}

 ?>

<!-- ---------- --><br><br>

  <?php
	
	$num = 18529; 

	if($num % 2 == 0){
		echo "Miltiple Of 2";
	}else{
		echo "Not a Miltiple Of 2";
	}

 ?>

 <!-- ---------- --><br><br>

<?php
	
	$a = 15;
	$b = 18; 


	if($a < $b){
		echo "A Is Smaller";
	}else{
		echo "A Is Not Smaller";
	}

?>

<!-- ---------- --><br><br>

<?php
	
	$a = 30;
	$b = "30"; 


	if($a == $b):
		echo "A Is Smaller<br>";
		echo "A Is Smaller REpeat<br>";
	endif;

	echo "Here Is Other StateMent";
?>

<!-- ---------- --><br><br>

<?php
		$t = date("50");

		if ($t < "20") {
		  echo "Have a good day!";
		} else {
		  echo "Have a good night!";
		}

?>




</body>
</html>