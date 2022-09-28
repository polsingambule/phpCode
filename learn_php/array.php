<?php

echo "<mark><b>...PHP Indexed Arrays...</b></mark><br><br>";

$index = array("Hey", "How Are", "You");
$arrlength = count($index);

for($x = 0; $x < $arrlength; $x++) {
  echo $index[$x];
  echo "<br>";
}

echo "<br><br><br><mark><b>...PHP Associative Arrays...</b></mark><br><br>";

$emp = array("Polsing"=>"Good", "Sabha"=>"Bad", "Ram"=>"Good");

foreach($emp as $x => $x_value) {
  echo "Emp " . $x . ", is " . $x_value;
  echo "<br>";
}


echo "<br><br><br><mark><b>...PHP Multidimensional Arrays...</b></mark><br><br>";


 $students = array(
	array('Rahul' , 1250 , "12th"),
	array('Talha' , 5120 , "10th"),
	array('Ram' , 2585 , "9th"),
	array('Sandip' , 9625 , "8th"),
	array('Tez' , 2855 , "7th"),
	array('Kumar' , 8555 , "6th")
);

echo $students[2][0];


echo "<br><br><br><mark><b>...Practice Arrays...</b></mark><br><br>";



$cars = array("YOGRAJ", "AMBULE", "POLSING", "GONDIA");

echo count($cars);

echo "<br>";
echo "My Name is " . $cars[2] . ", ". $cars[0] . " , " . $cars[1]." , ".$cars[3];


echo "<br><br><br><br>😜	..............................<br><br><br><br>";






$names = array("Polsing", "Ram", "Mahendra", "Praful", "Talha","Polsing", "Ram", "Mahendra", "Praful", "Talha");
$arrlength = count($names);

echo count($names);
echo "<br>";

for($demmy = 0; $demmy < $arrlength; $demmy++) {
  echo $names[$demmy];
  echo "<br>";
}

	$colors = array("Red",22,"Blue",12.50);
	
	/*
	echo $colors[0]."<br>";
	echo $colors[1]."<br>";
	echo $colors[2]."<br>";
	echo $colors[3]."<br>";
	
	*/
	echo "<pre>";
	print_r($colors);
	echo "</pre>";
	
//*****************************
	
	$days = array("One","Two","Three","Four","Five");
	
	for($i = 0; $i < 4; $i++){
		echo $days[$i]. "<br>";
	};
	
//*****************************

	$number = array("-Ones","-Twos","-Threes","-Fours","-Fives");
	
	echo "<ul>";
	for($p = 0; $p < 4; $p++){
		echo "<li> $number[$p]. </li>";
	};
	
	echo "</ul>";
	
//*****************************Associative Array
echo "<br><br><br>......................................<br>";

	$age = array(
	"sabha" => 42,
	"talha" => 52,
	"suraj" => 25,
	"polsing" => 21,
	); // [] Use This
	
	echo "<pre>";
	print_r($age); // var_dump Use This
	echo "</pre>";
	
	echo $age ["sabha"]. "<br>";
	echo $age ["talha"]. "<br>";
	echo $age ["suraj"]. "<br>";
	echo $age ["polsing"];
	
//**********

	$praful = [
		152 => "good",
		"sabha" => 52.5,
		3342 => 25,
		423 => 21	
	];
	
	echo "<pre>";
		var_dump($praful); // var_dump Use This
	echo "</pre>";
	
	echo $praful [152]. "<br>";
	echo $praful ["sabha"]. "<br>";
	echo $praful [3342]. "<br>";
	echo $praful [423];
	
	
//***************************** Multidimensional Arrays
echo "<br><br><br>......................................<br>";
	
	$emp =[
		[1, "Dimple", "UI Developer", 50000],
		[1, "Harsh", "UX Developer", 20000],
		[1, "Prem", "Software Developer", 30000],
		[1, "Mansi", "Grapics Developer", 40000],
		[1, "Nikhil", "Backend Developer", 10000],
	];
	
	echo $emp[0][0] . " ";
	echo $emp[0][1] . " ";
	echo $emp[0][2] . " ";
	echo $emp[0][3] . " ";
	
	echo "<br>";
	
	echo $emp[1][0] . " ";
	echo $emp[1][1] . " ";
	echo $emp[1][2] . " ";
	echo $emp[1][3] . " ";
	
	echo "<pre>";
		print_r($emp);
	echo "</pre>";

//*****************************
echo "<br>";


	$raghav = [
			[1, "Ram", "AI Developer", 50000],
			[2, "Vishal", "PA Developer", 20000],
			[3, "Tez", "SCO Developer", 30000],
			[4, "Krishna", "KO Developer", 40000],
			[5, "Mahendra", "BA Developer", 10000],
		];

	
	echo "<table border='2px' cellpadding= '5px' cellspacing = '0'>";
	
		echo "<tr>
			<th>Emp Id.</th>
			<th>Emp Name.</th>
			<th>Emp Designation.</th>
			<th>Emp salary.</th>
		</tr>";
		
	foreach($raghav as $v1){
		echo "<tr>";
		foreach($v1 as $v2){
			echo "<td> $v2 </td>";
		};
		echo "</tr>";
	};
	echo "<table>";
/*
	for($row = 0; $row < 4; $row++){
		for($col = 0; $col < 4; $col++){
			echo $raghav[$row][$col];
		}
		echo "<br>";
	}
*/


//***************************** Multidimensional Associative Array
echo "<br><br><br>......................................<br>";
/*
$marks[
		"POLSING" => [
			"English" => 75,
			"Marathi" => 67,
			"Biology" => 61,
			"Physics" => 89
		],
		"RAM" => [
			"English" => 78,
			"Marathi" => 36,
			"Biology" => 49,
			"Physics" => 61
		],
		"TALHA" => [
			"English" => 88,
			"Marathi" => 77,
			"Biology" => 66,
			"Physics" => 35
		],
		"NAINA" => [
			"English" => 99,
			"Marathi" => 44,
			"Biology" => 55,
			"Physics" => 68
		]
];

echo "<table border='2px' cellpadding= '5px' cellspacing = '0'>
	<tr>
		<th>Student Name</th>
		<th>English</th>
		<th>Marathi</th>
		<th>Biology</th>
		<th>Physics</th>
	</tr>
";
foreach($marks as $key => $value1){
	echo "<tr>
		<td>$key</td>";
		foreach($value1 as $value2){
			echo "<td>$value2 </td>";
		}
	echo "</tr>";
}

echo "</table>";


echo "<pre>";
	print_r($marks);
echo "</pre>";

*/
?>