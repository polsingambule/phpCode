<?php

$accountNumber = 921810510005736;
$accountPassword = 123;
$accountType = "saving";

switch ($accountNumber){
	case 921810510005736:	
	switch($accountPassword){
		case 123:
			echo "Wellcome to <b>Polsing Ambule</b><br><br>";
			echo "Your Account Number Is = ".$accountNumber."<br><br>";
			echo "Your Available Balance Here = ₹ <b>120202</b><br><br>";
		switch($accountType){
		case "saving":
			echo "Your Available Account Type Is ".$accountType."<br>";
		break;
		default:
			echo "! Your Available Account Type Is <b>Wrong</b>";
		}
		break;	
		default:
			echo "! Your Password Is Not Correct<br><br>";
	}
	break;	
	
	case 921810510005737:	
	switch($accountPassword){
		case 1234:
			echo "Wellcome to <b>Muneer Sir</b><br><br>";
			echo "Your Account Number Is = ".$accountNumber."<br><br>";
			echo "Your Available Balance Here = ₹ <b>100000</b><br><br>";
		switch($accountType){
		case "current":
			echo "Your Available Account Type Is <b>Current Account</b><br>";
		break;
		default:
			echo "! Your Available Account Type Is ".$accountType."<br>";
		}
		break;	
		default:
			echo "! Your Password Is Not Correct<br><br>";
	}
	break;	
	
	case 921810510005738:	
	switch($accountPassword){
		case 12345:
			echo "Wellcome to <b>Talha Sir</b><br><br>";
			echo "Your Account Number Is = ".$accountNumber."<br><br>";
			echo "Your Available Balance Here = ₹ <b>52500</b><br><br>";
		switch($accountType){
		case "current":
			echo "Your Available Account Type Is <b>Current Account</b><br>";
		break;
		default:
			echo "! Your Available Account Type Is ".$accountType."<br>";
		}
		break;	
		default:
			echo "! Your Password Is Not Correct<br><br>";
	}
	break;	
	
default:
		echo "! Your Account Number Is Not Correct";
}




?>