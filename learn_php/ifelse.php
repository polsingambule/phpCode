<?php
	$saving = 5000;
	$withdrawal = 10000;
	
	
	if($withdrawal <= $saving){
		//$saving -= $withdrawal;
		echo "<b>$withdrawal</b>"," Rupees Have Been Withdrawn Successfully";
	}else{
		echo "Your ";
	}
?>





<?php


	
	
/*
if( $status === "process" ){
	echo "Your Order Is In ".$status;
}elseif( $status === "in transt"){
	echo "Your Order IS ".$status;
}elseif($status === "delivery"){
	echo "Your Order Is ".$status;
}else{
	echo "Same Error Found";
}
*/


exit();
 
	$userlogin = 1;

	if( $userlogin ){ 
?>
	<h2> Welcome User </h2>
	<ul>
		<li><a href="" >My Account</a></li>
		<li><a href="" >Setting</a></li>
		<li><a href="" >Logout</a></li>
	</ul>
	<?php }else{ ?>
		
		<h2>Welcome Guest</h2>	
		<p>You Are Not LogIn, Please <a href="#">Click Here</a>To LogIn...</p>
		
	<?php } ?>


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

// If if...elseif...else Advance

	$today = date("l");
	echo "<h2>".$today."</h2>";


	if($today == 'saturday' || $today == "Sunday"){
		echo "Wow !! Its Weekend Enjoy It.";
	}else if($today == "Friday"){
		echo "Weekend Are Coming";
	}else{
		echo "Its A Working Day";
	}
	
echo "<br><br>";
	
	$saving = 5000;
	$withdrawal = 4000;
	
	if($withdrawal <= $saving){
		$saving -= $withdrawal;
		echo "<b>$withdrawal</b>"," Rupees Have Been Withdrawn Successfully";
	}else{
		echo "! Nor Enough Balance";
	}
	
	
echo "<br><br>";

	$num = 6;
	if($num % 2 == 0){
		echo"The Number Is Even";
	}else{
		echo "The Number is Odd";
	}


	//$userlogin = 0;
	//  // 1 == true && 0 == false

	//if( $userlogin ){
	//	echo "You Are Login";
	//}else{
	//	echo "You Are Not Login .Please Login";
	//}
	




exit();


	$x = 5;
	$y = 10;
	
	if($x < $y){
		echo "X is Greater";
	}
	



	$p = 50;
	$a = "50";
	
	if($p === $a){
		echo "X is Greater<br>";
	}
	echo "Here Is Other Statement";
	
	


	$a = 65;
	$b = 10;

	if ($a > 78){
		echo "a is greter than 78";
	}else{
		echo "a is not greter than 78";
	}	




	$age = 4;

	if($age > 18){
		echo "1 - You Can Drink Water Chai And Alcohol";
	}elseif($age>13){
		echo "2 - You Can Drink Chai Obly With Water. No Alcohol For You";
	}else{
		echo "3 - You Can Drink Water Only";
	}
	echo "Done";


	$name = "Kiran";
	$gender = "Male";

	if($gender == "Male"){
		echo "Hello Mr.".$name;
	}else{
		echo "Hello Miss.".$name;
	}


echo "<br><h3>..............</h3><br>";

	$per = 521;

	if($per >= 80 && $per <= 100){
		echo "You Are In Merit";
	}elseif($per >= 60 && $per <= 80){
		echo "You Are In Ist Division";
	}elseif($per >= 45 && $per <= 60){
		echo "You Are In IInd Division";
	}elseif($per >= 33 && $per <= 45){
		echo "You Are In IIIrd Division";
	}elseif($per < 33){
		echo "You Are Fail";
	}else{
		echo "Please Enter Valid Percentage.";
	}

echo "<br><h3>..............</h3><br>";

	 $a = 52; 
	 $b = 89; 
	 $c = 25;
	 
	if($a > $b){
		echo "Txt - 1";
	}elseif($a > $b){
		echo "Txt - 2";
	}elseif($a > $c){
		echo "Txt - 3";
	}elseif($b > $c){
		echo "Txt - 4";
	}elseif($b > $c){
		echo "Txt - 5";
	}


	$day = "monday"; 
	$txt1 = "( Sunday )";
	$txt2 = "( Other Day )";

	if (strtolower($day) == "sunday"){
		
		echo " Today Is ".ucwords(strtolower($day))." So, Today is Holiday";
	}else{	
		echo " Today Is ".ucwords(strtolower($day))." So, Today is Working Day";;	
	}
	
	echo "<br>";
		
	


	if($a < $b){
		
		echo "A Is Smaller";
	}else{
		echo "A Is Not Smaller";
	}
	
	echo "<br>";

	$wish =("50");

	if ($wish < "10") {
	  echo "Have a Good Day !";
	} else {
	  echo "Have a Good Night !";
	}
?>

