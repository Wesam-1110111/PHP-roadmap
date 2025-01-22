<?php

echo '<center>';

require('toolbox.php');




//   ***************  1  ****************


print_title(1, 'String Access');



echo 'You can access to item/char in a string like you do with Array.<br>';


echo '<br>Example:<br><br><br><code>$name = \'Wesam\';<br>echo $name[3]; // = a</code>';



//  ********************  2  **********************



print_title(2, 'String Functions 1');


echo '- lcfirst() --> lower case first: only the first letter will convert.<br>';
echo '- ucfirst() --> upper case first: only the first letter will convert.<br>';
echo '- strtolower() --> string to lower: the hole string will convert.<br>';
echo '- strtoupper() --> string to upper: the hole string will convert.<br>';
echo '- ucwords() --> upper case words: only the first letter of every word will convert.<br>';



//  *******************  3  ********************



print_title(3, 'String Functions 2');


echo '';




//  *******************  4  ********************



print_title(4, 'String Functions 3');




echo '- chunk_slpit(String[require], Length[optional], End[optional]) --> Split the string as you want.<br>';
echo '- strlen(String[require]) --> Return the string length.<br>';
echo '- str_slpit(String[require], Length[optional]) --> Split the string as you want and return it as Array.<br>';



//  ***********************  5  *******************


print_title(5, 'String Functions 4');


echo<<<'test'

- strpos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Sensitive* Return the position of the value in the string.

- strrpos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Sensitive* Return the last(Right) position of the value in the string.

- stripos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Insensitive* Return the position of the value in the string.

- strripos(String[Required], Value[Required], Start Position[Optional]) --> *Case-Insensitive* Return the last position of the value in the string.

- substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional]) --> *unknowon* Return the count of the value in string.

test;
