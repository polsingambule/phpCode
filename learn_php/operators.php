<?php
echo "<h1>&#128525 <u>Operrators In php</u></h1><br>"; 
/*

	1.Arithmetic Operators
	2.Assigment Operators
	3.Comparison operators
	4.Increment/Decrement operators
	5.logical Operators
	6.String operators
	7.Array operators
	8.Conditional assignment operators

*/

echo "<h3>&#128151 1.Arithmetic Operators</h3>";

	$a = 20;
	$b = 5;
	
	echo "For <b>a + b</b> the Result Is = " . ($a + $b) . "</br>";
	echo "For <b>a - b</b> the Result Is = " . ($a - $b) . "</br>";
	echo "For <b>a * b</b> the Result Is = " . ($a * $b) . "</br>";
	echo "For <b>a / b</b> the Result Is = " . ($a / $b) . "</br>";
	echo "For <b>a % b</b> the Result Is = " . ($a % $b) . "</br>";
	echo "For <b>a ++ b</b> the Result Is = " . ($a ** $b) . "</br>";

echo "<h3>&#128151 2.Assigment Operators</h3>";
	$x = 20;
	$Y = 30;
	
	echo "all comment <br>";
	// $x
	//echo "For <b>X </b> the value Is = " .$x. "</br>";
	
	//$x += 11;
	//echo "For <b>X </b> the value Is = " .$x. "</br>";
	
	//$x -= 11;
	//echo "For <b>X </b> the value Is = " .$x. "</br>";

	//$x *= 11;
	//echo "For <b>X </b> the value Is = " .$x. "</br>";
	
	//$x /= 11;
	//echo "For <b>X </b> the value Is = " .$x. "</br>";
	
	//$x %= 10; // $x = $y % 10
	//echo "For <b>X </b> the value Is = " .$x. "</br>";
	
echo "<h3>&#128151 3.Comparison Operators</h3>";

	$p = 5;
	$k = 10;
	
	echo "all comment <br>";
	
	//echo "For <b>p == k</b> the Result Is = ";
	//var_dump($p == $k) ."</br>";
	
	//echo "For <b>p === k</b> the Result Is = ";
	//var_dump($p === $k) ."</br>";
	
	//echo "For <b>p != k</b> the Result Is = ";
	//var_dump($p != $k) ."</br>";
	
	//echo "For <b>p !== k</b> the Result Is = ";
	//var_dump($p !== $k) ."</br>";
	
	//echo "For <b>p < k</b> the Result Is = ";
	//var_dump($p < $k) ."</br>";
	
	//echo "For <b>p > k</b> the Result Is = ";
	//var_dump($p > $k) ."</br>";
	
	//echo "For <b>p <> k</b> the Result Is = ";
	//var_dump($p <> $k) ."</br>";
	
	//echo "For <b>p >= k</b> the Result Is = ";
	//var_dump($p >= $k) ."</br>";
	
	//echo "For <b>p >= k</b> the Result Is = ";
	//var_dump($p >= $k) ."</br>";
	
	//echo "For <b>p <=> k</b> the Result Is = ";
	//var_dump($p <=> $k) ."</br>";
	
	
echo "<h3>&#128151 4.Increment/Decrement operators</h3>";

		$g = 5;
		
		//echo ++$g; //1+5 = $a6
		
		//echo $g++; 
		
		//echo --$g;
		
		//echo $g--;
		
// Example

	$pol = 1;
	$sing = 2;
	$am = $pol++ + ++$sing;
	
	echo $am;	
		
		
echo "<h3>&#128151 5.Logical Operators</h3>";

	$m = true;
	$n = false;
	
	echo "For m and n, the result is ";
	echo var_dump($m and $n); // && For Use 
	echo "<br>";
	
	echo "For m or n, the result is ";
	echo var_dump($m or $n); // || For Use 
	echo "<br>";

	echo "For m xor n, the result is ";
	echo var_dump($m xor $n);
	echo "<br>";n 
	
	echo "For !m, the result is ";
	echo var_dump(!$m);
	echo "<br>";




echo "<h3>&#128151 6.String operators</h3>";
	//$talha = "Hellow "; // 2000 Use This
	//$suraj = $talha."World !" . 5000;

	//echo $suraj;

	$talha = "Hellow";	
	$talha .= "this is ";
	$talha .= "Our World";
	$talha .= 50000;
	
	echo $talha;
	

echo "<h3>&#128151 7.Array operators</h3>";

	$array1 = array(52,56,10,89);
	$array2 = array("85","95","78","48");
	
	$arrayx = array("Name"=>"Parvesh","Last_Name"=>"Saroha");
	$arrayy = array("Age"=>"27","DOB"=>"26");
	
	print_r($arrayx);
	print_r($arrayy);
	
	
echo "<h3>&#128151 8.Conditional assignment operators</h3>";

	//$salman = 15;
	
	//$salman > 20)? $khan = "Greater" : $khan = "Smaller";
	
	//echo $khan;
	
	//==============
	
	
	//$salman = 15;
	
	//$khan = ($salman > 20)? "Greater" : "Smaller";
	
	//echo $khan;
	
	//===========
	
	$salman = 15;
	
	$khan = "Value Is : " . ($salman > 20 ? "Greater" : "Smaller");
	
	echo $khan;
	

?>