<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>5th | While Loop</title>
</head>
<body>

	<center>

		<h3>Enter a number and see</h3>

		<form method="POST">
			<input type="number" name="number" placeholder="Enter a number">
			<input type="submit" name="submit">
		</form>	
		<br><br>	

</body>
</html>


<?php


if($_SERVER['REQUEST_METHOD'] === 'POST'){
	
	$number = $_POST['number'];
	$i = 0;


	if ($number > 1000){
		echo 'Sorry, the number most be <= 1000';
	}
	elseif($number < 0){
		echo 'Sorry, the number most be >= 0';
	}
	else{
		while($i <= $number){
			echo "$i ";
			$i++;
		}
	}
}