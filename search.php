<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Engine</title>
</head>
<body>

	<center>
		<h2>Search Engine Page</h2>
		<h3>Enter the file name to find it</h3>
		<form method="POST">
			<input type="text" name="input" placeholder="Search.." required>
			<input type="submit" name="submit" required>
		</form>
		<br><br><br>

</body>
</html>


<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// code...
	$dir = $_POST['input'];
	header("Location: $dir.php");
	exit();
}