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


echo <<< "form"
	<form method="POST">
		<input type="text" name="input" placeholder="Enter to print" required>
		<button type="submit">Submit</button>
	</form>
form;


// if ($_POST != false){
// 	echo $_POST['input'];
// }

if ($_SERVER["REQUEST_METHOD"] === "POST"){
	// echo $_POST['input'];
	if ($_POST['input'] == 0){
		echo "Sorry, you can not enter zero.";
	}
	else{
		echo $_POST['input'];
	}
}


//  **************  2  ****************


print_title(2, "Advanced if, elseif and else");


// echo <<<"f2"
// 	<form action="" method="POST">
// 		<input type="text" name="username">
// 		<select name="lang">
// 			<option value="ar">Arabic</option>
// 			<option value="en">English</option>
// 			<option value="sp">Spanish</option>
// 		</select>
// 		<button type="submit">Submit</button>
// 	</form>
// f2;

echo 'Click <a href="lang_support.php">here</a> to go';