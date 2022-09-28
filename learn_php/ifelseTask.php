<?php
// Tasks If if...elseif...else

//1. Example
//1. Find user is Eligible for Vote or Not

	
    $name = "Polsing";
    $age = 18;
	
	if ($age >= 21) {
        echo $name . ", You Are Eligible For Vote";
    } else {
        echo $name . ", You Are Not Eligible For Vote. ";
    }

echo "<br><br>";

//2. Example
//$a = 52; $b = 89; $c = 25; Find the smaller Number
  
$a = 52;
$b = 89;
$c = 25;

if( $c < $a ){
	if( $c < $b ){
		echo $c."Smaller Number";
	}else{
		echo $c."Is Not Smaller Number Within".$b;
	}
}else{
	echo$c."Is Not Samller Number Within".$a;
}

echo "<br><br>";

//3. Example
//3.  if $a = 20 is not equal to $b= 50 echo not match otherwise it match.

	$a = 30;
	$b = 50;
	
	if ($a != $b){
		echo "Not Match";
	}else{
		echo "Match";
	}

echo "<br><br>";

//4. Example

$status = "delivery";

if( $status === "process" ){
	echo "Your Order Is In ".$status;
}elseif( $status === "in transt"){
	echo "Your Order IS ".$status;
}elseif($status === "delivery"){
	echo "Your Order Is ".$status;
}else{
	echo "Same Error Found";
}

echo "<br><br>";




	$marathi=0;
	$english=0;
	$maths=95;
	$biology=0;
	$physics=84;
	$histroty=95;
	
		
	$results = ($marathi + $english + $histroty + $maths + $biology + $physics)/600*100;
	
	echo number_format($results,2); 
	echo '<br/>';	
	
	if ($results >= 90){
		echo "<h3>Grade A &#128513;</h3>";
	}elseif($results >= 70){
			echo "<h3>Grade B &#128515;</h3>";
	}elseif($results >= 50){
			echo "<h3>Grade C &#128522;</h3>";
	}elseif($results > 34){
			echo "<h3>! Fail &#128557;</h3>";
	}else{
			echo "<h3>Don't Study, I'm Tired &#128546;</h3>";
	}
	

echo "<br><br><br>";


/*

Percentage   Grade

80-100%	 	Merit
60-79% 		Ist Division
45-59% 		IIst Division
33-44% 		IIIst Division
Less than 	33% Fail

*/
	
$per = 60;

	if($per >= 80 && $per <= 100){
		echo "You Are In Merit. <b>Grade A</b>";
	}elseif($per >= 60 && $per <= 80){
		echo "You Are In Ist Division. <b>Grade B</b>";
	}elseif($per >= 45 && $per <= 60){
		echo "You Are In IInd Division. <b>Grade C</b>";
	}elseif($per >= 33 && $per <= 45){
		echo "You Are In IIIrd Division. <b>Grade D</b>";
	}elseif($per < 33){
		echo "You Are <b>Fail</b>";
	}else{
		echo "Please Enter Valid Percentage.";
	}
	

echo "<br><br><br>";

	$saving = 5000;
	$withdrawal = 52;
	
	
	if($withdrawal <= $saving){
		echo "<b>$withdrawal</b>"," Rupees Have Been Withdrawn Successfully";
	}else{
		echo "! You don't have that much money in your *Saving Accound";
	}
?>