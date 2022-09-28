	<?php
		echo strlen("Polsing")."<br>";
	?>

	<?php
		echo str_word_count("Ram Sham polsing")."<br>";
	?>

	<?php
		echo strrev("Hello world!")."<br>";
	?>

	<?php
		echo strpos("Hello world!", "world")."<br>";
	?>

	<?php
		echo str_replace("world", "Dolly", "Hello world!") ."<br>";
	?>

	<?php
		echo strlen("Polsing") ."<br>";
	?>
	
	<?php
		echo str_word_count("polsing yograj ambule") ."<br>";
	?>
	
	<?php
		echo strrev("abcd") ."<br>";
	?>
	
	<?php
		echo strpos("Hello Dolly","Dolly" ."<br>" );
	?>
			
	<?php 
		//echo str_replace(search, replace, subject);
		echo str_replace ("ambule","patle","polsing ambule");
	?>
	<br>
	<?php

		$str = 'muNeeR ahMad';
		echo strtoupper($str);
	?>
	<br>
		<?php echo ucwords(strtolower($str)); ?>
	<br>

	<?php

		$demmy = 'PolSinG AmBuLe';
		echo strtolower($demmy);
	?>
	<?php 
	echo ucwords(strtolower($demmy)); 

	?>
<?php
	$txt  = "Hello";

	echo "$txt";
	
echo "<br><br>";	
?>

<?php
	$x = "Polsing";
	$y = "Ambule";
	echo "$x $y !";
	
	echo "<br><br>";	
?>

<?php
	$x = 552;
	$y = 1;
	
	echo $x + $y;	
	
	echo "<br><br>";
?>

<?php
	$a = 52;
	$b = 89;


		if( $a < $b ){
			echo $a." Smaller Number";
		}else{
			echo $b." Not Smaller Number";
		}
		
		echo "<br><br>";
?>

<?php
	$a = 30;
	$b = 50;
	
	if ($a != $b){
		echo "Not Match";
	}else{
		echo "Match";
	}
	
	echo "<br><br>";
?>

<?php
	$pra = 52;
	$rina = 52;
	
	if ($pra != $rina){
		echo "No";
	}else{
		echo "Yes";
	}
	
	echo "<br><br>";
?>