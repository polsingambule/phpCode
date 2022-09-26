<!DOCTYPE html>
<html>
<body>
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

</body>
</html>
