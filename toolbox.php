<?php

function print_title($number, $title){
	if ($number != 1){

		echo "<br><br><br><br><br><hr><br><br>";
	    
	}
	else{

		echo "<br>";
		
	}

	echo "<h3>********************  $number  ********************</h3>";
	echo "<h3>* * * * * * * $title * * * * * * *</h3>";
	echo "<h3>****************************************</h3>";
	echo "<br><br><br><br>";	
}



?>