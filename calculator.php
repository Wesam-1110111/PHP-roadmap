<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		form{
			padding-top: 100px;
		}
		input, select{
			font-size: 20px;
		}
	</style>
</head>
<body>

	<h1>Super Calculator</h1>

	<form method="POST">
		
		<input type="number" name="num1" required placeholder="Enter first number">
		<select name="operation">
			<option value="add">+</option>
			<option value="sub">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
		</select>
		<input type="number" name="num2" required placeholder="Enter 2ed number">
		<input type="submit" name="submit">

	</form>

</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'):

	$operation = $_POST['operation'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	$result = 0;

	switch($operation){
		case 'add':
			$result = $num1 + $num2;
			break;

		case 'sub':
			$result = $num1 - $num2;
			break;

		case 'mul':
			$result = $num1 * $num2;
			break;

		case 'div':
			if($num2 != 0){
				$result = $num1 + $num2;
			}
			else{
				$result = 'error, you can\'t divide on zero!';
			}
			break;
		default:
			$result = 'for real?<br>Type something goddamne.';
			break;

	}
	echo "<br><br><br>$result";
endif;

?>