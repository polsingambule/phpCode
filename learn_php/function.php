<?php

function addition($aValue1, $aValue2){
	 echo $aValue1 + $aValue2."<br>";
}

addition(20,50);	
addition(100,50);	

echo "<br>";

function subscription($sValue1, $sValue2){
	echo $sValue1 - $sValue2."<br>";
};

subscription(10,2);
subscription(1050,50);

echo "<br>";

function dividend($dValue1, $dValue2){
	echo $dValue1 / $dValue2."<br>";
}

dividend(50000,4);
dividend(15660,2);

echo "<br>";

function multiplication($mValue1, $mValue2){
		echo $mValue1 * $mValue2."<br>";
};

multiplication(2,10);
multiplication(20,5);

echo "<br>";

function polsing(){
	echo "Hello Polsing Ambule<br>";
}


polsing();
echo "At-Nagpur<br>";
polsing();

echo "<br><br><br><b><mark>-------------------------------------</mark></b><br><br>";

function processMarks($marksArr){
	$sum = 0;
	foreach($marksArr as $value){
		$sum += $value;
	}
	return $sum;
}

function avgMarks($marksArr){
	$sum = 0;
	$i = 1;
	foreach($marksArr as $value){
		$sum += $value;
		$i++;
	}
	return $sum/$i;
}


$rohanDas = [34,58,15,85,12];
//$sumMarls = processMarks($rohanDas);
$sumMarls = avgMarks($rohanDas);

$polsing = [99,55,88,70,80];
//$sumMarksPolsing = processMarks($polsing);
$sumMarksPolsing = avgMarks($polsing);


echo "Total Marks Scored By ROHAN Out Of 500 is $sumMarls <br>";
echo "Total Marks Scored By POLSING Out Of 500 is $sumMarksPolsing";

echo "<br><br><br><b><mark>----------------------------------------------------------------------------------</mark></b><br><br>";




function studentDetails($name){
	if($name == 'Muneer Ahmad'){
			
		}else{
			echo 'student name is:'.$name.'<br/>';
	}
}




studentDetails('Muneer Ahmad');
studentDetails('Ambule Singh');
studentDetails('Talha Mubashshir');

echo '<br><br>';

function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function

echo '<br><br>';

function familyName($fname) {
  echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

echo '<br><br>';


















echo "<b><mark>Function</mark></b><br><br>";
 




echo "<br><br><b><mark>Function With Parameters</mark></b><br><br>";// Function With Parameters

	function hello($fname, $lname){
		echo "Hello $fname, $lname.<br>";
	}

	hello("Rohit","Sharma");
	
	hello("Bill","Gates"); 
	
	echo "<br>---------<br>";//========
	
	function ram($firstName="First Name", $lastName="First Name"){
		echo "Hello $firstName, $lastName.<br>";
	}

	ram("Nothing");
	
	ram("Google","Yahoo");
	
	echo "<br>---------<br>";//========
	
	function sum($y,$z){
		echo $y + $z;
	}
	
	$one = 10;
	$two = 20.55;
	
	sum($one,$two);
	
echo "<br><br><b><mark>Function With Return Value</mark></b><br><br>";// Function With Return Value

	function praful($midName="MidName",$endName="EndName"){
		$raghav = "$midName $endName";
		
		return $raghav;
	}
	//echo praful("Rinait","Nothing");
	$sabha = praful("Rinait","Nothing");

	echo "Hello $sabha";
	
	echo "<br>---------<br>";//========
	
	function add($math, $eng, $sci){
		$sub = $math + $eng + $sci;
		
		return $sub;
	}
	
	function percentage($st){
		$per = $st /3;
		
		echo $per."%";
	}
	
	$subTatal = add(55,65,88);
	
	percentage($subTatal);
	
	
echo "<br><br><b><mark>Function Arguments by Reference</mark></b><br><br>";// Function Arguments by Reference

	 function testing(&$string){
		$string .= " and samething extra. ";
	 }
	 
	 $str = "This Is A String";
	 testing($str);
	 
	 echo $str;
	 
	echo "<br>---------<br>";//========
	 
	function nameFirst($num){
		$num += 5;
	}
	
	function nameSecond(&$num){
		$num += 7;
	}
	
	$number = 10;
	nameFirst($number);
	echo "Original Value Is $number<br>";
	
	$number = 10;
	nameSecond($number);
	echo "Original Value Is $number<br>";
	
	
echo "<br><br><b><mark>Variable Function</mark></b><br><br>";// Variable Function
	
	function wow($extra){
		echo "Hello $extra";
	}
	
	
	$func = "wow";
	
	$func("Polsing Ambule");
	
	
	echo "<br>---------<br>";//========
	
	$sayHello = function($extra){
		echo "Hello $extra";
	};
	
	$sayHello("Sachin Roy");
	
	
echo "<br><br><b><mark>Recursive Function</mark></b><br><br>";// Recursive Function
	
	function display($demmyVariable){
		if($demmyVariable <= 5){
			echo "$demmyVariable <br>";
			display($demmyVariable + 1);
		}
	}
	
	display(1);
	
	echo "<br>---------<br>";//========
	
	
	function factorial($demmy){
		if($demmy == 0){
			return 1;
		}else{
			return($demmy * factorial($demmy - 1));
		}
	}
	
	echo factorial(3);
	
	/*
		f()=demmy*f(demmy-1)
		f(5)=5*f(5-1)=5*f(4)
			5*4*f(4-1)=20*f(3)
			20*3*f(3-1)=60*f(2)
			62*2*f(2-1)=120*f(1)
			120*1*f(1-1)=120*f(0)
			120*1=120
	*/
?>

