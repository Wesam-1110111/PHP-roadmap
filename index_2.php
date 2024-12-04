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



//  ****************  3  ***************


print_title(3, 'Ternary Conditional');


echo "<code>echo 10 > 8 ? 'greater then' : 'less then';</code>";
echo "<p>Here will echo 'greater then' if 10 > 8 else will echo  'less then'.<br></p>";



//  **************  4  **************


print_title(4, 'Switch case');


echo 'click <a href="switch.php">here</a> to go';




//  ****************  5  *****************


print_title(5, 'While Loop');


echo 'click <a href="while.php">here</a> to go<br><br><br>';



$i = 1;

while($i < 4){
	echo "$i ";
	$i++;
}



//  ****************  6  ***************


print_title(6, 'Do While');


echo 'Nothing new';



//  ****************  7  ****************


print_title(7, 'For Loop');


echo 'Nothing new';



//  ****************  8  ****************


print_title(8, 'Foreach Loop');


echo 'Syntax_1:<br><code>foreach($array as $kay => $value){<br> // code .. <br>}</code><br><br>';
echo 'Syntax_2:<br><code>foreach($array as $value){<br> // code .. <br>}</code><br><br><br>';

echo 'click <a href="foreach.php">here</a> to go<br><br><br>';


// *****************  Project  ******************


print_title('Project', 'Search Engine');


echo 'click <a href="search.php">here</a> to go<br><br><br>';



//  *********************  9  *****************


print_title(9, 'Include & Require');


include('test.php');


echo 'My password is ' . $password;