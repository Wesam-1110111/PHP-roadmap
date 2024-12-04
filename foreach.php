<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>8th | Foreach Loop</title>
</head>
<body>

	<center>

		<h2>Welcome To We-School</h2>
		<h3>Enter Your Information</h3>

		<form method="POST">
			<input type="text" name="name" placeholder="Enter Your Name" required>
			<select name="state">
				<option>Libya</option>
				<option>Egypt</option>
				<option>Algera</option>
				<option>Tunisia</option>
				<option>USA</option>
			</select>
			<input type="submit" name="submit">
		</form>

		<br><br><br>

</body>
</html>



<?php

$price = 100;
$states = ['Libya', 'Egypt', 'Tunisia', 'Algera'];
$state_discount = ['Libya' => 40, 'Egypt' => 40, 'Tunisia' => 20, 'Algera' => 30];
$is_he_in = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	$name = $_POST['name'];
	$state = $_POST['state'];

	// echo "Hello $name, is $state good?";
	foreach($states as $s){
		if ($state == $s){
			$is_he_in = true;
		}
	}

	if($is_he_in){
		$result = $price - $state_discount[$state];
		echo "There is discount for you.<br>The Price: $price - $state_discount[$state] = $" . $result;
	}
	else{
		echo "Sorry, no discount for you.<br>The Price: $$price";
	}

}