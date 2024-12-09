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


echo "To passing by reference just add '&' to the Argument.<br>Example:<br><br>";


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