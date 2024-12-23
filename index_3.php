<?php


echo '<center>';


require('toolbox.php');




//  ****************  1  *****************



print_title(1, 'Functions');


echo 'Nothing new';



// *******************  2  ****************


print_title(2, "Function Variable Arguments List");


// echo "<code>func_argu_num()";


function sum(...$nums){
	$result = 0;
	foreach($nums as $num):
		$result += $num;
	endforeach;
	echo $result . '<br>';
}

sum(2, 4, 6, 8, 2, 5, 0, 0, 0, 111, 2);


//  *****************  3  *******************


print_title(3, 'Functions Passing By Reference');


echo "To passing by reference just add '&' to the Parameter.<br>Example:<br><br>";


echo <<< 'code'
	<code>
		function add_two(&$num){<br>
			return $num += 2;<br>
		}<br>
		$n = 5;<br>
		echo add_two($n);<br>
	</code>
code;


// the code

function add_two(&$num){
	return $num += 2;
}

echo '<br>'.'<br>';

$n = 5;
		
echo add_two($n) . '<br>';
echo $n;



//    *********************  4  ***************


print_title(4, "Return Type");


echo <<< 'p'
	<p>
		To declear the return type just add the type in the function.<br>
		Example:<br><br>
		<code>
			function sum($num1, $num2): int{<br>
				return $num1 + $num2;<br>
			}<br><br>
			echo sum(9.5, 10.5); // int(20)<br>
		</code>
	</p>
p;


// ***********************  5  **********************


print_title(5, 'Anonymous Function');


echo 'It is just a function without a name, and used for one task.<br><br>';


$hi = function($msg, $person){
	return "$msg $person";
};

echo $hi('Welcome back', 'Mr. W');


$nice = function(){
	return '<br><br><p style="color:red; font-size: 40px;">nice try</p><br><br>';
};

echo $nice();




//  ******************  6  *********************



print_title(6, 'Arrow Function');


function say_hi(){
	return 'hi';
}


$say_hello = fn() => 'hello';



echo 'test --> ' . say_hi();

echo '<br><br><br>';

echo 'test2 --> ' . $say_hello();


echo '<p>- The Arrow Function is a short syntax for Anonymous Function.<br><br>Example:<br><br><br><code>$say_hello = fn() => \'hello\';</code></p>';