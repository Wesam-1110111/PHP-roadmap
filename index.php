<?php


echo "<center>";


function print_title($n, $title){
	if ($n != 1){

		echo "<br><br><br><br><br><hr><br><br>";
	    
	}
	else{

		echo "<br>";
		
	}
	
	echo "<h3>********************  $n  ********************</h3>";
	echo "<h3>* * * * * * * $title * * * * * * *</h3>";
	echo "<h3>****************************************</h3>";
	echo "<br><br><br><br>";	
}


print_title(1, 'If, Elseif and Else');

