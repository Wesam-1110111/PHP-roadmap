<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>4th | Switch Case</title>
</head>
<body>

	<center>

		<h2>Welcome To Our Store</h2>
		<h3>Enter the day to know works time</h3>
		<form action="" method="POST">
			<input type="text" name="day">
			<input type="submit">
		</form>

	</center>

</body>
</html>

<?php

echo "<center><br><br>";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$day = $_POST['day'];

	switch($day){

		case 'sat':
			echo "In $day, we open at 8:00 a.m - 10:00 p.m";
			break;

		case 'sun':
		case 'mon':
		case 'tus':
		case 'wen':
			echo "In $day, we open at 10:00 a.m - 9:00 p.m";
			break;

		case 'thu':
			echo "In $day, we open at 12:00 p.m - 9:00 p.m";
			break;	

		case 'fri':
			echo "In $day, close.";
			break;

		default:
			echo 'Sorry, can you please enter a day...';
			break;
	}
}