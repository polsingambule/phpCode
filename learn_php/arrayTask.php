<?php
$student = array(
	'Name' => 'Polsing Ambule',
	'Roll' => 1010,
	'Sub' => 'English'
);
	
// echo $student['sub'];

foreach ($student as $key => $value) {
	echo 'Student '.$key.' is '.$value.'<br/>';
}

//-----------------------------------------------------------------------------
/*
$color = array('white', 'green', 'red'') Go to the editor
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,
*/
echo '<br><br><br>';


$color = array('White', 'Green', 'Red');

echo $color[0].' ';
echo $color[1].' ';
echo $color[2];


/*
$x = array(1, 2, 3, 4, 5);
Delete an element from the above array. After deleting the element, integer keys must be normalized.
*/
echo '<br><br><br>';

 $x = array(1, 2, 3, 4, 5);
 
foreach ($x as $valueV) {
	unset($x[1]);
	echo ' Number is  '.$valueV.'<br/>';	
}
/*
	echo $x[0].' ';
	echo $x[1].' ';
	echo $x[2].' ';
	echo $x[3].' ';
	echo $x[4].' ';
*/

/*
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
Write a PHP script to get the first element of the above array.
*/
echo '<br><br><br>';

$colors = array(
	4 => 'white',
	6 => 'green',
	11 => 'red'
);


foreach ($colors as $key1 => $value1) {
	echo 'Colors '.$key1.' is '.$value1.'<br/>';	
}



	?>