<?php
	
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
	$withdrawal = ;
	
	
	if($withdrawal <= $saving){
		echo "<b>$withdrawal</b>"," Rupees Have Been Withdrawn Successfully";
	}else{
		echo "! You don't have that much money in your *Saving Accound";
	}
?>