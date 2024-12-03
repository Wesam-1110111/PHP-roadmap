<?php

echo "<br><br><br>";

echo <<<"f2"

	<center>

	<form action="" method="POST">
		<input type="text" name="username">
		<select name="lang">
			<option value="ar">Arabic</option>
			<option value="en">English</option>
			<option value="sp">Spanish</option>
		</select>
		<button type="submit">Submit</button>
	</form>
f2;

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
	if ($_POST['lang'] == 'ar'){
		header('Location: ar.php');
		exit();
	}
	elseif($_POST['lang'] == 'en'){
		header('Location: en.php');
		exit();
	}
	elseif($_POST['lang'] == 'sp'){
		header('Location: sp.php');
		exit();
	}
}