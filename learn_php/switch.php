<?php









exit();

$companyName = "honda";
$bikeName = "avenger";  

switch ($companyName){
	case "bajaj":
		echo "<u><b>Your Choice Is BAJAJ Company</b></u><br><br>";
		
	switch($bikeName){
		case "avenger":
			echo "Your Bike Choice Is <b>Avenger</b>";
		break;
		case "ct-100":
			echo "Your Bike Choice Is <b>CT-100</b>";
		break;
		case "chetak":
			echo "Your Bike Choice Is <b>Chetak</b>";
		break;
		case "pulsar":
			echo "Your Bike Choice Is <b>Pulsar</b>";
		break;
		case "platina":
			echo "Your Bike Choice Is <b>Platina</b>";
		break;
		default:
			echo "! Please Correct Bike Name";
	}
break;
//*****************************

	case "honda":
		echo "<u><b>Your Choice Is HONDA Company</b></u><br><br>";
		
	switch($bikeName){
		case "activa":
			echo "Your Bike Choice Is <b>Activa 6G</b>";
		break;
		case "spshine":
			echo "Your Bike Choice Is <b>SP Shine 125</b>";
		break;
		case "dio":
			echo "Your Bike Choice Is <b>Dio</b>";
		break;
		case "unicorn":
			echo "Your Bike Choice Is <b>Unicorn</b>";
		break;
		case "shine":
			echo "Your Bike Choice Is <b>Shine</b>";
		break;	
		default:
			echo "! Please Correct Bike Name";
	}
break;
//*****************************	

	case "hero":
		echo "<u><b>Your Choice Is HERO Company</b></u><br><br>";
		
	switch($bikeName){
		case "hf deluxe":
			echo "Your Bike Choice Is <b>HF Deluxe</b>";
		break;
		case "splendor plus":
			echo "Your Bike Choice Is <b>Splendor Plus</b>";
		break;
		case "passion pro":
			echo "Your Bike Choice Is <b>Passion Pro</b>";
		break;
		case "super splendor":
			echo "Your Bike Choice Is <b>Super Splendor</b>";
		break;
		case "glamour":
			echo "Your Bike Choice Is <b>Glamour</b>";
		break;
		default:
			echo "! Please Correct Bike Name";		
	}
break;	
default:
		echo "! Please Correct Company Name";
}

?>










<?php
exit();

$brand = "Iphone";
$product = "i phone 7";


switch($brand){
	case "mi":
		echo "<u><b>This Is MI Brand</b></u><br><br>";
	
		switch($product){
			case "notepro":
				echo "Your Choice <b>Mi Note pro Modal</b> Modal";
			break;
			
			case 'note pro 7':
			echo 'This is MI Note 7 Pro Mobile';
			break;
			
			default:
			echo 'Not found';
			
			}
	break;
		
	case "Iphone":
		echo "<u><b>This Is Iphone Brand</b></u><br><br>";
		switch($product){
			case 'i phone 7':
			echo 'this is Iphone 7 mobile';
			break;
			default:
			echo 'Not found';
			
		}
	break;
	default :
	echo 'not found';
}	
//=================================

$company = "bajaj";


switch ($company) {
    case "bajaj":
		echo "<b>Bajaj Company Bikes :-</b><br><br>";
        echo "1) Bajaj Platina<br>";
		echo "2) Bajaj CT-100<br>";
		echo "3) Bajaj Chetak<br>";
		echo "4) Bajaj Pulsar<br>";
		echo "5) Bajaj Avenger<br>";
       break;
		
    case "honda":
		echo "<b>Honda Company Bikes :-</b><br><br>";
        echo "1) Honda Activa 6G<br>";
		echo "2) Honda SP 125<br>";
		echo "3) Honda Shine<br>";
		echo "4) Honda Dio<br>";
		echo "5) Honda Unicorn<br>";
       break;
	   
	case "hero":
		echo "<b>Hero Company Bikes :-</b><br><br>";
        echo "1) Hero HF Deluxe<br>";
		echo "2) Hero Splendor Plus<br>";
		echo "3) Hero Passion Pro<br>";
		echo "4) Hero Super Splendor<br>";
		echo "5) Hero Glamour<br>";
       break;
	 case "tvs":
		echo "<b>TVS Company Bikes :-</b><br><br>";

       break;
	   
    default:
        echo $company." This Company Is Not Available";
}

//=================================

	$CompanyName = "Honda";
	$BikeName = "Leo";
	$color = "Red";
	$price = "1000";

	switch($CompanyName){
		case "Honda":
	switch($BikeName){
			case 'Leo';
				echo "<b>Brand Name : </b>" .$CompanyName . "<br><b>Bike Name :</b> ".$BikeName. "<br><b>Color : </b>".$color. "<br><b>Price : </b>".$price;
		break;
		}
		break;
		default: 
			echo "CompanyName : ". $CompanyName . " is Not Available";
	}
	
//=================================

	$favcolor = strtoupper("polsinG");

	switch ($favcolor) {
	  case "red":
		echo "Your favorite color is red!";
		break;
	  case strtoupper("polsing"):
		echo "Your favorite color is blue!";
		break;
	  case "green":
		echo "Your favorite color is green!";
		break;
	  default:
		echo "Your favorite color is neither red, blue, nor green!";
	}
	
//=================================

$goodStudent = strtoupper("RAddddM");	

	switch($goodStudent){	
		case strtoupper("polsing");
			echo "Polsing Is Good Boy";
		break;
		case strtoupper("sandip");
			echo "Sandip Is Good Boy";
		break;
		case strtoupper("ram");
			echo "Ram Is Good Boy";
		break;	
		case strtoupper("praful");
			echo "Praful Is Good Boy";
		break;
		case strtoupper("sana");
			echo "Sabha Is Good Girl";
		break;
		case strtoupper("aman");
			echo "Ama";
			
}

//=================================

$weekday = 7;
	
	switch($weekday){
		case 1;
			echo "Today Is Monday";
		break;
		case 2;
			echo "Today Is Tuesday";
		break;
		case 3;
			echo "Today Is Wednesday";
		break;
		case 4;
			echo "Today Is Thursday";
		break;
		case 5;
			echo "Today Is Friday";
		break;
		case 6;
			echo "Today Is Saturday";
		break;
		case 7;
			echo "Today Is Sunday";
			echo " <b>Enjoy Your Day</b>";
		break;
		default:
			echo "Enter The Valid Week day";
	}
	
//=================================

	$age = 20;

	switch(true){
		case($age >= 15 && $age <= 20):
		echo "Your are Eligible";
	break;

	case($age >= 21 && $age <= 30):
		echo "Your are Not Eligible";
	break;  
	default:
		echo "Enter The Valid Age";
	}
	
//=================================
	
	
	$choice = 3;
	
		 switch($choice){
			 case 1: 
				echo "You Have Selected First Choice";
			break;
			case 2: 
				echo "You Have Selected Second Choice";
			break;
			default: 
				echo "Wrong Choice";
		 }
	
//=================================

	$Choices = 1;
	$x = 5;
	
	switch($Choices){
	case 1:
		echo "1 For Calculate Square Of A Number.<br>";
		echo "Square Of ", $x, " is : ",$x*$x;
	break;
	case 2;
		echo "2 For Calculate ube Of A Number.<br>";
		echo "Cube Of ", $x, " is : ", $x*$x*$x;
	break;
	default :
		echo "Wrong Choices";
	}
?>