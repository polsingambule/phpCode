<?php

echo "<mark><b>...PHP Indexed Arrays...</b></mark><br><br>";

$index = array("Hey", "How Are", "You");
$arrlength = count($index);

for($x = 0; $x < $arrlength; $x++) {
  echo $index[$x];
  echo "<br>";
}

 echo "<br>";

$salman = ['red','20.5','blue','yellow'];

echo '<ul>';
for ($i = 0; $i < 4; $i++){
	echo "<li> $salman[$i] </li>";
}  
echo '</ul>';



echo "<br><br><br><mark><b>...PHP Associative Arrays...</b></mark><br><br>";

$emp = array("Polsing"=>"Good", "Sabha"=>"Bad", "Ram"=>"Good");

foreach($emp as $x => $x_value) {
  echo "Emp " . $x . ", is " . $x_value;
  echo "<br>";
}

$khanAge = array(
				'bill' => 25,
				'steta' => 55,
				'elon' => 85
			);
echo $khanAge['bill']."<br>";
echo $khanAge['steta']."<br>";
echo $khanAge['elon']."<br>";

////////////////
echo '<br>';

$khanAgeR =[
				'bill' => 70.5,
				'steta' => 'polsing',
				5 => 87
			];
			
	$khanAgeR [5] = 00;
	echo '<pre>';		
		print_r($khanAgeR); //use this = var_dump
	echo '</pre>';
	
echo $khanAgeR['bill']."<br>";
echo $khanAgeR['steta']."<br>";
echo $khanAgeR[5]."<br>";


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


$teztecchEmp = [
		[1,"Muneer Ahmad","Web Developer",50000],
		[2,'Awan Rajja','FontEnd Developer',25000],
		[3,'Nigam Shalu','Telly Comunication',15000],
		[4,'Sabha Shekh','Time-Pass',78000],
		[5,'Keyur bisen','Sortware Developer',96000],
		[6,'Vishal Agrawal','Local Developer',60000]
	];
	
	/*
	echo $teztecchEmp[0][0]. ' ';
	echo $teztecchEmp[0][1]. ' ';
	echo $teztecchEmp[0][2]. ' ';
	echo $teztecchEmp[0][3]. ' ';
	echo '<br>';
	echo $teztecchEmp[1][0]. ' ';
	echo $teztecchEmp[1][1]. ' ';
	echo $teztecchEmp[1][2]. ' ';
	echo $teztecchEmp[1][3]. ' ';
	*/
	for($row = 0; $row < 4; $row++){
		for($col = 0; $col < 4; $col++){
			echo $teztecchEmp[$row][$col].' ';
		}
		echo '<br>';
	}
echo '<br>';echo '<br>';

echo '<table border="2px" cellpadding="5px" cellspacing="0px">';

echo "<tr>
		<th>Emp id</th>
		<th>Emp Name</th>
		<th>Emp Designation</th>
		<th>Emp Salary</th>
	</tr>
";

foreach($teztecchEmp as $v1){
	echo '<tr>';
	foreach( $v1 as $v2){
		echo "<td> $v2 </td>";
	}
}	echo '</tr>';

echo '</table>';


echo '<br><br><mark><b>...PHP Foreach Loop...</b></mark><br>';
//PHP Foreach Loop

$bopche = array(
	'mahendra',
	'gita',
	'dipali',
	'sanu',
	'hema',
	'gauri',
	);
foreach($bopche as $value ){
	echo $value. '<br>';
};


echo '....................................<br>';

$associative = array(
	'New-mahendra Age ' => 23 ,
	'New-gita Age ' => 28,
	'New-dipali Age ' => 43,
	'New-sanu Age ' => 83,
	'New-hema Age ' => 13,
	'New-gauri Age ' => 93,
	);
	
echo '<ul>';
foreach($associative as $keyValue => $associative_value ){
	echo "<li> $keyValue =  $associative_value </li>";
};
echo '</ul>';


echo "<br><br><br><mark><b>...PHP Multidimensional Associative Array ...</b></mark><br><br>";
//= PHP Multidimensional Associative Array 

$studentsMarks = [
		"Polsing" => [
				"English" => 89,
				"Marathi" => 19,
				"Biology" => 59,
				"Physics" => 89,
				"Chemistry" => 69
		],
		"Nikhil" => [
				"English" => 65,
				"Marathi" => 65,
				"Biology" => 84,
				"Physics" => 49,
				"Chemistry" => 34
		],
		"Ashwin" => [
				"English" => 87,
				"Marathi" => 65,
				"Biology" => 32,
				"Physics" => 54,
				"Chemistry" => 65
		],
		"Suraj" => [
				"English" => 55,
				"Marathi" => 33,
				"Biology" => 44,
				"Physics" => 99,
				"Chemistry" => 19
		],
		"Harsh" => [
				"English" => 89,
				"Marathi" => 89,
				"Biology" => 89,
				"Physics" => 89,
				"Chemistry" => 89
		]
];
echo '<table  border="2px" cellpadding="5px" cellspacing="0px">
	<tr>
		<th>Student Name</th>
		<th>English</th>
		<th>Marathi</th>
		<th>Biology</th>
		<th>Physics</th>
		<th>Chemistry</th>
		<th>Total Marks</th>
	</tr>
';
$total1 = 0;
$total2 = 0;
$total3 = 0;
$total4 = 0;
$total5 = 0;
$i = 1;
foreach($studentsMarks as $key => $v1){
	echo "<tr>
		<td>$key</td>";
		foreach($v1 as $v2){?>
			
			<td> <?php echo $v2;
						$total2 = $total2 + $v2;	?> </td>
			
			
		<?php }?>
		<td> <?php echo $total2; ?> </td>
		<?php 
	 echo "</tr>";
}
echo "</table>";

echo '<pre>';
	print_r ($studentsMarks);
echo '</pre>';

echo "<br><br><br><mark><b>...PHP Foreach Loop with List...</b></mark><br><br>";
//= PHP Foreach Loop with List

$data = [
		[1, 'Harsha',"Good",'Positive'],
		[2, 'Trupti',"Very Good",'Negative'],
		[3, 'Divya',"Bad",'Negative'],
		[4, 'Dimple',"Excilent",'Positive']
];

echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Responce</th>
		<th>Nothing</th>
	</tr>	
";
foreach($data as list($id,$what,$responce,$nothing)){
	echo "<tr><td>$id</td> <td>$what</td> <td>$responce</td><td>$nothing</td></tr>";
}
echo "</table>";


echo '........................................................................<br>';

$demmy = [
			[
				'id' => 1,
				'Name' => 'Sabha',
				'designation' => 'Manager',
				'Salary' => 20.000
			],
			[
				'id' => 2,
				'Name' => 'Keyur',
				'designation' => 'Owner',
				'Salary' => '2 Lakh'
			],
			[
				'id' => 3,
				'Name' => 'Minal',
				'designation' => 'Hr',
				'Salary' => 80.000
			],
			[
				'id' => 4,
				'Name' => 'Karishma',
				'designation' => 'Actor',
				'Salary' => 85.000
			],
			[
				'id' => 5,
				'Name' => 'Ravi',
				'designation' => 'Driver',
				'Salary' => 10.000
			]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
	<tr>
		<th>First</th>
		<th>Second</th>
		<th>thrd</th>
		<th>Salary</th>
	</tr>	
";
foreach($demmy as list("id" => $first, "Name" =>$second, "designation" =>$thrd, "Salary" =>$forth)){
	echo "<tr><td>$first</td> <td>$second</td> <td>$thrd</td> <td>$forth</td></tr>";
}
echo "</table>";


echo "<br><br><br><mark><b>---- PHP Array Function ----</b></mark>";
echo "<br><br><mark><b>...PHP Array Count & Sizeof Function...</b></mark><br><br>";

$names = array('Salman','Virat','Karishma','Talha');

echo count($names);
echo "<br>";

echo '<pre>';
print_r (array_count_values ($names));
echo '</pre>';

echo '<br>....................................<br>';

$names = array('Salman','Virat','Karishma','Talha');

echo sizeof($names);

echo '<br>....................................<br>';

$food = array(
			'Fruits' => array('Orange', 'Banana', 'Apple'),
			'Veggie' => array('Carrot', 'Collard', 'Pea')
		);
echo sizeof($food['Fruits'],1); //use this count


echo '<br>....................................<br>';

$leo = array('Salman','Virat','Karishma','Talha');

$len = count($leo);

for($pol = 0; $pol < $len; $pol++){
	echo $leo[$pol]. "<br>";
}

echo "<br><br><br><mark><b>...PHP Array In_array & Array_search Function...</b></mark><br><br>";

$bads = array('Shilpa', 'Sapna', '55' ,'Raj','Rani');


if(in_array(55, $bads)){
	echo 'Find Successfully';
}else{
	echo 'Can"t Find';
}

echo '<br>....................................<br>';


$numNames = array(array('p','o'),array('l','s','i'),'n','g');


if(in_array(array('p','o'), $numNames)){
	echo 'Find Successfully';
}else{
	echo 'Can"t Find';
}

echo '<br>....................................<br>';

$good = array('Name1', 'Name2', 'Name3' ,'Name4','Name5');

echo array_search('Name4',$good);

echo '<br>....................................<br>';

$goods = array('a' => 'Name1','b' => 'Name2','c' => 'Name3' ,'d' => 'Name4','e' => 'Name5');

echo array_search('Name1',$goods);


echo "<br><br><br><mark><b>...PHP Array_replace & Array_replace_recursive...</b></mark><br><br>";

$first = ['orange','apple','banana','grapes','kivi','mango'];
$second = ['carrot','pea'];
$colors = ['red','yellow','blue'];


$newArray = array_replace($first, $second, $colors);
echo "<br>";
$newArray = array_replace_recursive($first, $second, $colors);
echo '<pre>';
	print_r($newArray);
echo '</pre>';

echo "<br><br><br><mark><b>...PHP Array_pop & Array_push...</b></mark><br><br>";

$pop = ["Hey1","Hey2","Hey4"];

array_pop($pop);

array_push($pop,"Hey3","Hey5");

echo "<pre>";
	print_r($pop);
echo "</pre>";



echo "<br><br><br><mark><b>...PHP Array_shift & Array_unshift...</b></mark><br><br>";

$shift = ["Hello1","Hello2","Hello3","Hello4"];

array_shift($shift);

array_unshift($shift,"Hello0","Hello");

echo "<pre>";
	print_r($shift);
echo "</pre>";


echo "<br><br><br><mark><b>...PHP Array_Merge & Array_Combine...</b></mark><br><br>";


$merge = ["a1","a2","a3","a4"];
$combine = ["b1","b2","b3","b4"];
$c = ["c1","c2","c3","c4"];

$mergeCombine = array_merge($merge,$combine,$c);

echo "<pre>";
	print_r($mergeCombine);
echo "</pre>";


echo '<br>....................................<br>';

$mergeNew = [	'a' => "a1",
				'b' => "a2",
				'c' => "a3",
				'd' => "a4"
			];
$combineNew = [ 'e' => ['color' => ['red','yellow','blue','green']],
				'f' => "b2",
				'g' => "b3",
				'b' => "b4",
				55,
				58
			];	

//$mergeCombineNew = array_merge($mergeNew,$combineNew);
//$mergeCombineNew = $mergeNew+$combineNew;
$mergeCombineNew = array_merge_recursive($mergeNew,$combineNew);

echo "<pre>";
	print_r($mergeCombineNew);
echo "</pre>";

echo '<br>....................................<br>';

$names = array("Ram","Mohan","Saly","Deny");
$ages = array("32","15","85","24");

$namesAge = array_combine($names,$ages);

echo "<pre>";
	print_r($namesAge);
echo "</pre>";



echo "<br><br><br><mark><b>...PHP Array Sorting Function...</b></mark><br><br>";

$sorting = array("Ram","Mohan","Saly","Deny","Anveet");
$sortingNew = array(25,26,85,55,89);
$sortingA = array(	'a' => "Ram",
					'b' => "Mohan",
					'c' => "Saly",
					'd' => "Deny",
					'e' => "Anveet"
				);
				
				
///-----
$array1 = array("Img12.png","Img10.png","img2.png","img1.png");

//natsort($array1);
natcasesort($array1);
///-----

//sort($sorting);
//rsort($sortingNew);
//sort($sortingA);
//asort($sortingA);
//arsort($sortingA);
//ksort($sortingA);
//krsort($sortingA);
// array_multisort($sortingA,$sortingNew,$sorting); // value same 2/2
//array_reverse

echo "<pre>";
	print_r($sorting);
echo "</pre>";

echo "<pre>";
	print_r($sortingNew);
echo "</pre>";

echo "<pre>";
	print_r($sortingA);
echo "</pre>";

echo "<pre>";
	print_r($array1);
echo "</pre>";


echo "<br><br><br><mark><b>...PHP Array Traversing Function...</b></mark><br><br>";

$traversing = ["one","two","three","four","five"];

echo "<b>Current : </b>".current($traversing)."</br>";
echo "<b>Key : </b>".key($traversing)."</br>";
echo "<b>Pos : </b>".pos($traversing);

echo "<br>";

next($traversing);
echo "<b>Current : </b>".current($traversing)."</br>";

echo "<br>";

prev($traversing);
echo "<b>prev : </b>".current($traversing)."</br>";

echo "<br>";

end($traversing);
echo "<b>prev : </b>".current($traversing)."</br>";
echo "<b>Key : </b>".key($traversing)."</br>";

echo "<br>";
echo"<pre>";
	print_r(each($traversing));
echo"</pre>";


reset($traversing);
echo "<b>current : </b>".current($traversing)."</br>";

echo "<br><br><br><mark><b>...PHP Array_Slice Function...</b></mark><br><br>";

$slice = ["One","Two","Three","Four"];

$newSlice = array_slice($slice, 1, 3); //use -2 1 and true

echo"<pre>";
	print_r($newSlice);
echo"</pre>";

echo "<br><br><br><mark><b>...PHP Array_Splice Function...</b></mark><br><br>";

$splice = ["Awan","Polsing","Atul","Muneer"];
$spliceNew = ["Mahendra","Bopche"];

//array_splice($splice,2,1); //use -2 1 and true
//array_splice($splice,0, 1);
//array_splice($splice, 2,2 ,$spliceNew);
array_splice($splice,2, count($splice),$spliceNew);


echo"<pre>";
	print_r($splice);
echo"</pre>";


echo "<br><br><br><mark><b>...PHP Array Key Functions ...</b></mark><br><br>";

//$key = ["One","Two","Three","Four"];
$key = [
		"first" => "Red",
		"Two" => "Blue",
		"Three" => "Yellow",
		"Four" => "Green"
	];

//$newKey = array_keys($key);
//$newKey = array_key_first($key);
//$newKey = array_key_last($key);


$newKey = array_key_exists("first", $key);

if($newKey){
	echo "Key Exists !";
}else{
	echo "Key does not Exists !";
};


echo"<pre>";
	print_r($newKey);
echo"</pre>";


echo "<br><br><br><mark><b>...PHP Array Intersect Functions...</b></mark><br><br>";


$intersect1 = array(
					"a" => "Red",
					"b" => "Green",
					"c" => "purple",
					"d" => "Blue"
					);
					
$intersect2 = array(
					"a" => "purple",
					"f" => "pink",
					"d" => "orange"
					);


$newIntersect = array_intersect($intersect1 , $intersect2);

echo"<pre>";
	print_r($newIntersect); // case sensitive
echo"</pre>";







?> 