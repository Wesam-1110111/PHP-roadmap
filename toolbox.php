<!DOCTYPE html>
<html>
<head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
		body{
			font-family: Inter;
		}
	</style>
</head>
</html>


<?php

function print_title($number, $title){
	if ($number != 1){

		echo "<br><br><br><br><br><hr><br><br>";
	    
	}
	else{

		echo "<br>";
		
	}

	echo '<div style="font-size: 15px; color: #3A719E;">';
	echo "<h3>********************  $number  ********************</h3>";
	echo "<h3>* * * * * * * $title * * * * * * *</h3>";
	echo "<h3>****************************************</h3>";
	echo "<br><br><br><br>";
	echo '</div>';	
}



function newLine($num=1){
	
	if ($num == 1){
		echo '<br>';
	}
	else{
		for($i=0;$i<=$num;$i++){
			echo '<br>';
		}
	}
}

?>