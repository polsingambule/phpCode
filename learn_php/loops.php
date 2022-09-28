<?php


for( $polsing=0; $polsing <= 300; $polsing += 10 ){
	if ($polsing == 220) {
	}else{
		echo $polsing;
	}
	echo "<br>";
}


echo "<br><br><br>";

$salman =0;

while($salman <= 300){
echo $salman."<br>";
	$salman = $salman + 10;
}

echo "<br><br><br>";

echo "..........First 10 Even numbers<br>";


$suraj = 2;

while($suraj <= 10){
	echo $suraj."<br>";
	$suraj = $suraj + 2;
}


echo "<br><br><br>";

echo "........First 10 Odd numbers<br>";

$salman = 1;

while($salman <= 10){
echo $salman."<br>";
	$salman = $salman + 2;
}


echo "<br><br><br>";
echo "..........Write a program to print first 10 integers and their squares using while loop.<br>";

$num = 1;
while ($num <= 10) {
	echo  $num**2 . "<br>";
	$num = $num+1;
}

echo "<br><br><br>";

echo "........ Write while loop statement to print the following series:
10, 20, 30 … … 300";

$salman = 0;

while($salman <= 300){
echo $salman."<br>";
	$salman = $salman + 10;
}
echo "<br><br><br>";

echo "........ Write For loop<br>*<br>**<br>***<br>****<br>*****<br><br><br>";


 for ($ram="";$ram<=75;$ram++){
	 for($sabha=1; $sabha<=$ram; $sabha++){
		echo "*"; 
	 }
	 echo "<br>";
    }
	 


































exit();
// Nested Loop
	for ($a = 1; $a <= 100; $a = $a + 10){
		for ($b = $a; $b < $a + 10; $b++){
			//echo $b . " ";
		}
		echo "<br>";
	}








// while Loop

	$z = 1;
	
	while($z <= 10){
		echo $z.") Hello bsing<br>";
		$z++;
	}
/*
echo "<br>";

	$x = 10;
	
	while($x >= 1){
		echo $x.") Hello Ambule<br>";
		$x--;
	}
	
echo "<br>";

	$y = 0;
	
	echo "<ul>";
		while($y <= 10){
			echo "<li>".$y.") Hello bsing</li>";
			$y = $y + 2;
		}
	echo "</ul>";
	
echo "<br>";

// Do While Loop
	$w = 1;
	
	do{
		echo "bsing<br>";
		$w++;
	}while($w <= 10);
	
echo "<br>";

for($u = 1; $u <= 10; $u++){
	echo "Hey Hello<br>";
}
//While loop

	/*
	$a = 1;
	
	while( $a <= 6 ){
		echo "The Number Is : $a <br>";
		$a++; 
	}
	*/

//Do While loop

/*
	$b = 100;
	
	do{
		echo "The Number Is : $b <br>";
		$b++;
	}while ($b <= 10);
	*/
//For loop
//Example-1
/*
		for ($c = 0; $c <= 20; $c++){
			echo "The Number is : $c <br>";
		}
		*/
		
//Example-2

/*
	$num = 5;
	$f;
	for($e = 1; $e <= 10; $e++){
		$f = $num * $e;
		echo "$num X $e = $f <br>";
	}
*/

// 1 to 100 even number

//Forreach

/*
$mobile = array("Macromax","Nothing","Indx","Samsung","Apple","Sony");

foreach ($mobile as $value){
	echo "$value <br>";
}
*/




 ?>